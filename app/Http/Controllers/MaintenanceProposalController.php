<?php

namespace App\Http\Controllers;

use App\Models\FinalMaintenance;
use App\Models\MaintenanceAnalysis;
use App\Models\MaintenanceLog;
use App\Models\MaintenanceProposal;
use App\Models\ProposalMaintenance;
use App\Models\MaintenanceType;
use App\Models\Road;
use App\Models\Setting;
use App\Models\SystemProcess;
use App\Services\MaintenanceAnalysisService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaintenanceProposalController extends Controller
{
    public function index()
    {
        $maintenanceproposal = MaintenanceProposal::with(['proposalMaintenances.maintenanceType', 'finalMaintenances.maintenanceType'])->get();

        if ($maintenanceproposal->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Proposals Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance Proposals",
            "data" => $maintenanceproposal
        ], 200);
    }

    public function show(string $id)
    {
        $maintenanceproposal = MaintenanceProposal::with(['proposalMaintenances.maintenanceType', 'finalMaintenances.maintenanceType'])->find($id);

        if (!$maintenanceproposal) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Proposals Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance Proposals",
            "data" => $maintenanceproposal
        ], 200);
    }

    public function store(Request $request, MaintenanceAnalysisService $analysisService)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'side' => 'required|in:left,right',
            'segments' => 'required|array|min:1',
            'segments.*.start_length' => 'required|numeric|min:0',
            'segments.*.end_length' => 'required|numeric',
            'segments.*.maintenancetype_ids' => 'required|array|min:1',
            'segments.*.maintenancetype_ids.*' => 'exists:maintenance_types,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $road = Road::findOrFail($request->road_id);

        $setting = Setting::first();

        if (!$setting) {
            return response()->json([
                'success' => false,
                'message' => 'Setting tahun belum dibuat.'
            ], 422);
        }

        $activeYear = $setting->proposal_max_year;

        $existingSegments = MaintenanceLog::where(
            'road_id',
            $request->road_id
        )
            ->where(
                'side',
                $request->side
            )
            ->where(
                'year',
                $activeYear
            )
            ->get([
                'start_length',
                'end_length'
            ])

            ->concat(

                MaintenanceProposal::where(
                    'road_id',
                    $request->road_id
                )
                    ->where(
                        'side',
                        $request->side
                    )
                    ->where('year', $activeYear)
                    ->get(['start_length', 'end_length'])
            )

            ->sortBy('start_length')
            ->values();

        $currentCoverage = 0;

        foreach ($existingSegments as $segment) {

            if (
                $segment->start_length >
                $currentCoverage
            ) {
                break;
            }

            $currentCoverage = max(
                $currentCoverage,
                $segment->end_length
            );
        }

        $setting = Setting::first();

        if (
            $setting &&
            $activeYear > $setting->proposal_max_year
        ) {
            return response()->json([
                'success' => false,
                'message' =>
                "Periode proposal dibatasi sampai tahun {$setting->proposal_max_year}."
            ], 403);
        }

        $segments = collect(
            $request->segments
        )
            ->sortBy('start_length')
            ->values();

        $current = 0;

        foreach ($segments as $segment) {

            if (
                round(
                    $segment['start_length'],
                    2
                )
                !=
                round(
                    $current,
                    2
                )
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Masih ada ruas jalan yang belum terisi.'
                ], 422);
            }

            if (
                $segment['end_length']
                <=
                $segment['start_length']
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Panjang segmen tidak valid.'
                ], 422);
            }

            if (
                $segment['end_length']
                >
                $road->road_length
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Segmen melebihi panjang jalan.'
                ], 422);
            }

            $current =
                $segment['end_length'];
        }

        if (
            round($current, 2)
            !=
            round(
                $road->road_length,
                2
            )
        ) {

            return response()->json([
                'success' => false,
                'message' =>
                'Seluruh ruas jalan harus terisi sampai akhir.'
            ], 422);
        }

        MaintenanceProposal::where(
            'road_id',
            $request->road_id
        )
            ->where(
                'side',
                $request->side
            )
            ->where(
                'year',
                $activeYear
            )
            ->delete();

        $saved = [];

        foreach ($segments as $segment) {

            $proposal = MaintenanceProposal::create([
                'road_id' => $request->road_id,
                'year' => $activeYear,
                'side' => $request->side,
                'start_length' => $segment['start_length'],
                'end_length' => $segment['end_length'],
                'status' => 'review'
            ]);

            foreach (
                $segment['maintenancetype_ids']
                as $maintenancetypeId
            ) {

                ProposalMaintenance::create([
                    'maintenance_proposal_id' => $proposal->id,
                    'maintenancetype_id' => $maintenancetypeId
                ]);
            }

            $saved[] = $proposal;
        }

        foreach ($saved as $proposal) {
            $analysisService->analyze($proposal);
        }
        return response()->json([
            'success' => true,
            'message' => 'Maintenance Proposal Added Successfully!',
            'year' => $activeYear,
            'data' => $saved
        ], 201);
    }

    public function update(Request $request, MaintenanceAnalysisService $analysisService)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'side' => 'required|in:left,right',
            'segments' => 'required|array|min:1',
            'segments.*.start_length' => 'required|numeric|min:0',
            'segments.*.end_length' => 'required|numeric',
            'segments.*.maintenancetype_ids' => 'required|array|min:1',
            'segments.*.maintenancetype_ids.*' => 'exists:maintenance_types,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $road = Road::findOrFail($request->road_id);


        $setting = Setting::first();

        if (!$setting) {
            return response()->json([
                'success' => false,
                'message' => 'Setting tahun belum dibuat.'
            ], 422);
        }

        $activeYear = $setting->proposal_max_year;

        $setting = Setting::first();

        if (
            $setting &&
            $activeYear > $setting->proposal_max_year
        ) {
            return response()->json([
                'success' => false,
                'message' =>
                "Periode proposal dibatasi sampai tahun {$setting->proposal_max_year}."
            ], 403);
        }

        $segments = collect(
            $request->segments
        )
            ->sortBy('start_length')
            ->values();

        $current = 0;

        foreach ($segments as $segment) {

            if (
                round($segment['start_length'], 2)
                !=
                round($current, 2)
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Masih ada ruas jalan yang belum terisi.'
                ], 422);
            }

            if (
                $segment['end_length']
                <=
                $segment['start_length']
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Panjang segmen tidak valid.'
                ], 422);
            }

            if (
                $segment['end_length']
                >
                $road->road_length
            ) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    'Segmen melebihi panjang jalan.'
                ], 422);
            }

            $current =
                $segment['end_length'];
        }

        if (
            round($current, 2)
            !=
            round($road->road_length, 2)
        ) {

            return response()->json([
                'success' => false,
                'message' =>
                'Seluruh ruas jalan harus terisi sampai akhir.'
            ], 422);
        }

        $oldProposalIds = MaintenanceProposal::where(
            'road_id',
            $request->road_id
        )
            ->where(
                'side',
                $request->side
            )
            ->where(
                'year',
                $activeYear
            )
            ->pluck('id');

        \App\Models\MaintenanceAnalysis::whereIn(
            'maintenance_proposal_id',
            $oldProposalIds
        )->delete();

        MaintenanceProposal::where(
            'road_id',
            $request->road_id
        )
            ->where(
                'side',
                $request->side
            )
            ->where(
                'year',
                $activeYear
            )
            ->delete();

        $saved = [];

        foreach ($segments as $segment) {
            $proposal = MaintenanceProposal::create([
                'road_id' => $request->road_id,
                'year' => $activeYear,
                'side' => $request->side,
                'start_length' => $segment['start_length'],
                'end_length' => $segment['end_length'],
                'status' => 'review'
            ]);

            foreach (
                $segment['maintenancetype_ids']
                as $maintenancetypeId
            ) {
                ProposalMaintenance::create([
                    'maintenance_proposal_id' => $proposal->id,
                    'maintenancetype_id' => $maintenancetypeId
                ]);
            }

            $saved[] = $proposal;
        }

        foreach ($saved as $proposal) {
            $analysisService
                ->analyze($proposal);
        }

        return response()->json([
            'success' => true,
            'message' => 'Maintenance Proposal Updated Successfully!',
            'year' => $activeYear,
            'data' => $saved
        ], 200);
    }

    public function saveFinal(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'final_maintenancetype_ids' => 'required|array|min:1',
            'final_maintenancetype_ids.*' => 'exists:maintenance_types,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $proposal = MaintenanceProposal::findOrFail($id);
        FinalMaintenance::where(
            'maintenance_proposal_id',
            $proposal->id
        )->delete();
        foreach (
            $request->final_maintenancetype_ids
            as $maintenancetypeId
        ) {
            FinalMaintenance::create([
                'maintenance_proposal_id' => $proposal->id,
                'maintenancetype_id' => $maintenancetypeId
            ]);
        }
        $proposal->update([
            'status' => 'approved'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Final Maintenance Saved Successfully!'
        ]);
    }

    public function checkRoadStatus($roadId)
    {
        $road = Road::findOrFail($roadId);

        $setting = Setting::first();

        $year = $setting->proposal_max_year;

        $leftProposal = MaintenanceProposal::where('road_id', $roadId)
            ->where('side', 'left')
            ->where('year', $year)
            ->first();

        $rightProposal = MaintenanceProposal::where('road_id', $roadId)
            ->where('side', 'right')
            ->where('year', $year)
            ->first();

        return response()->json([
            'success' => true,
            'data' => [
                'road_id' => $road->id,
                'road_name' => $road->name,

                'left' => [
                    'exists' => (bool) $leftProposal,
                    'status' => $leftProposal?->status,
                ],

                'right' => [
                    'exists' => (bool) $rightProposal,
                    'status' => $rightProposal?->status,
                ],
            ]
        ]);
    }

    public function closeYear()
    {
        $setting = Setting::first();

        if (!$setting) {
            return response()->json([
                'success' => false,
                'message' => 'Setting tidak ditemukan.'
            ], 404);
        }

        $year = $setting->proposal_max_year;

        // Cegah close dua kali
        if (MaintenanceLog::where('year', $year)->exists()) {
            return response()->json([
                'success' => false,
                'message' => "Tahun {$year} sudah pernah ditutup."
            ], 422);
        }

        // Ambil semua jalan
        $roads = Road::all();

        foreach ($roads as $road) {

            $leftProposals = MaintenanceProposal::with('finalMaintenances')
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'left')
                ->get();

            $rightProposals = MaintenanceProposal::with('finalMaintenances')
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'right')
                ->get();

            // Harus ada kiri dan kanan
            if ($leftProposals->isEmpty() || $rightProposals->isEmpty()) {

                return response()->json([
                    'success' => false,
                    'message' =>
                    "Jalan {$road->name} belum lengkap sisi kiri dan kanan."
                ], 422);
            }

            // Semua kiri harus approved
            foreach ($leftProposals as $proposal) {

                if ($proposal->status !== 'approved') {

                    return response()->json([
                        'success' => false,
                        'message' =>
                        "Masih ada proposal review pada Jalan {$road->name} sisi kiri."
                    ], 422);
                }

                if ($proposal->finalMaintenances->isEmpty()) {

                    return response()->json([
                        'success' => false,
                        'message' =>
                        "Final maintenance Jalan {$road->name} sisi kiri belum lengkap."
                    ], 422);
                }
            }

            // Semua kanan harus approved
            foreach ($rightProposals as $proposal) {

                if ($proposal->status !== 'approved') {

                    return response()->json([
                        'success' => false,
                        'message' =>
                        "Masih ada proposal review pada Jalan {$road->name} sisi kanan."
                    ], 422);
                }

                if ($proposal->finalMaintenances->isEmpty()) {

                    return response()->json([
                        'success' => false,
                        'message' =>
                        "Final maintenance Jalan {$road->name} sisi kanan belum lengkap."
                    ], 422);
                }
            }
        }

        // Ambil semua proposal approved tahun aktif
        $proposals = MaintenanceProposal::with('finalMaintenances')
            ->where('year', $year)
            ->where('status', 'approved')
            ->get();

        foreach ($proposals as $proposal) {

            foreach ($proposal->finalMaintenances as $final) {

                MaintenanceLog::create([
                    'road_id' => $proposal->road_id,
                    'year' => $proposal->year,
                    'side' => $proposal->side,
                    'start_length' => $proposal->start_length,
                    'end_length' => $proposal->end_length,
                    'maintenancetype_id' => $final->maintenancetype_id,
                ]);
            }
        }

        SystemProcess::updateOrCreate(
            [
                'year' => $year
            ],
            [
                'is_closed' => true,
                'closed_at' => now()
            ]
        );

        return response()->json([
            'success' => true,
            'message' => "Tahun {$year} berhasil ditutup. Silakan ubah tahun aktif melalui menu Setting."
        ]);
    }

    public function getCloseYearStatus()
    {
        $setting = Setting::first();

        if (!$setting) {
            return response()->json([
                'success' => false,
                'message' => 'Setting tidak ditemukan.'
            ], 404);
        }

        $year = $setting->proposal_max_year;

        $roads = Road::all();

        $incompleteRoads = [];

        foreach ($roads as $road) {

            $leftProposals = MaintenanceProposal::with('finalMaintenances')
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'left')
                ->get();

            $rightProposals = MaintenanceProposal::with('finalMaintenances')
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'right')
                ->get();

            $isComplete = true;
            $reason = null;

            if (
                $leftProposals->isEmpty() ||
                $rightProposals->isEmpty()
            ) {
                $isComplete = false;
                $reason = 'Belum lengkap kiri dan kanan';
            }

            foreach ($leftProposals as $proposal) {

                if ($proposal->status !== 'approved') {
                    $isComplete = false;
                    $reason = 'Masih ada proposal review sisi kiri';
                    break;
                }

                if ($proposal->finalMaintenances->isEmpty()) {
                    $isComplete = false;
                    $reason = 'Final maintenance sisi kiri belum lengkap';
                    break;
                }
            }

            foreach ($rightProposals as $proposal) {

                if ($proposal->status !== 'approved') {
                    $isComplete = false;
                    $reason = 'Masih ada proposal review sisi kanan';
                    break;
                }

                if ($proposal->finalMaintenances->isEmpty()) {
                    $isComplete = false;
                    $reason = 'Final maintenance sisi kanan belum lengkap';
                    break;
                }
            }

            if (!$isComplete) {
                $incompleteRoads[] = [
                    'road_id' => $road->id,
                    'road_name' => $road->name,
                    'reason' => $reason
                ];
            }
        }

        return response()->json([
            'success' => true,
            'year' => $year,
            'can_close' => count($incompleteRoads) === 0,
            'total_roads' => $roads->count(),
            'completed_roads' =>
            $roads->count() - count($incompleteRoads),
            'incomplete_roads' => $incompleteRoads
        ]);
    }

    public function getAvailableYears()
    {
        $years = MaintenanceProposal::select('year')
            ->distinct()
            ->orderByDesc('year')
            ->pluck('year');

        return response()->json([
            'success' => true,
            'data' => $years->map(function ($year) {

                $isClosed = MaintenanceLog::where(
                    'year',
                    $year
                )->exists();

                return [
                    'year' => $year,
                    'status' => $isClosed
                        ? 'closed'
                        : 'active'
                ];
            })
        ]);
    }

    public function getMaintenanceReport($year)
    {
        $roads = Road::orderBy('name')->get();

        $result = [];

        foreach ($roads as $road) {

            $leftProposals = MaintenanceProposal::with([
                'proposalMaintenances.maintenanceType',
                'finalMaintenances.maintenanceType'
            ])
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'left')
                ->orderBy('start_length')
                ->get();

            $rightProposals = MaintenanceProposal::with([
                'proposalMaintenances.maintenanceType',
                'finalMaintenances.maintenanceType'
            ])
                ->where('road_id', $road->id)
                ->where('year', $year)
                ->where('side', 'right')
                ->orderBy('start_length')
                ->get();

            $leftData = [];
            foreach ($leftProposals as $proposal) {

                $analysis = MaintenanceAnalysis::where(
                    'maintenance_proposal_id',
                    $proposal->id
                )->first();

                $antecedentNames = [];
                $consequentNames = [];

                if ($analysis) {

                    $antecedentNames = MaintenanceType::whereIn(
                        'id',
                        json_decode($analysis->antecedent, true) ?? []
                    )->pluck('name')->toArray();

                    $consequentNames = MaintenanceType::whereIn(
                        'id',
                        json_decode($analysis->consequent, true) ?? []
                    )->pluck('name')->toArray();
                }

                $leftData[] = [
                    'segment' =>
                    $proposal->start_length .
                        ' - ' .
                        $proposal->end_length . ' M',

                    'proposal' =>
                    $proposal->proposalMaintenances
                        ->pluck('maintenanceType.name')
                        ->implode(', '),

                    'final' =>
                    $proposal->finalMaintenances
                        ->pluck('maintenanceType.name')
                        ->implode(', '),

                    'status' => $proposal->status,

                    'analysis_status' => $analysis?->status,

                    'antecedent' => implode(', ', $antecedentNames),

                    'consequent' => implode(', ', $consequentNames),

                    'description' => $analysis?->description,

                    'support' => $analysis?->support,

                    'confidence' => $analysis?->confidence,

                    'lift' => $analysis?->lift,
                ];
            }

            $rightData = [];

            foreach ($rightProposals as $proposal) {

                $analysis = MaintenanceAnalysis::where(
                    'maintenance_proposal_id',
                    $proposal->id
                )->first();

                $antecedentNames = [];
                $consequentNames = [];

                if ($analysis) {

                    $antecedentNames = MaintenanceType::whereIn(
                        'id',
                        json_decode($analysis->antecedent, true) ?? []
                    )->pluck('name')->toArray();

                    $consequentNames = MaintenanceType::whereIn(
                        'id',
                        json_decode($analysis->consequent, true) ?? []
                    )->pluck('name')->toArray();
                }

                $rightData[] = [
                    'segment' =>
                    $proposal->start_length .
                        ' - ' .
                        $proposal->end_length . ' M',

                    'proposal' =>
                    $proposal->proposalMaintenances
                        ->pluck('maintenanceType.name')
                        ->implode(', '),

                    'final' =>
                    $proposal->finalMaintenances
                        ->pluck('maintenanceType.name')
                        ->implode(', '),

                    'status' => $proposal->status,

                    'analysis_status' => $analysis?->status,

                    'antecedent' => implode(', ', $antecedentNames),

                    'consequent' => implode(', ', $consequentNames),

                    'description' => $analysis?->description,

                    'support' => $analysis?->support,

                    'confidence' => $analysis?->confidence,

                    'lift' => $analysis?->lift,
                ];
            }

            $result[] = [
                'road_id' => $road->id,
                'road_name' => $road->name,
                'year' => $year,

                'left_segments' => $leftData,
                'right_segments' => $rightData,
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }

    function destroy($id)
    {
        $maintenanceproposal = MaintenanceProposal::find($id);

        if (!$maintenanceproposal) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Proposal Not Found!'
            ]);
        }

        $maintenanceproposal->delete();

        return response()->json([
            "success" => true,
            "message" => "Maintenance Proposal Deleted Successfully!",
            "data" => $maintenanceproposal
        ], 200);
    }
}
