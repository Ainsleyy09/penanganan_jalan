<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceLog;
use App\Models\MaintenanceProposal;
use App\Models\Road;
use App\Services\MaintenanceAnalysisService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaintenanceProposalController extends Controller
{
    public function index()
    {
        $maintenanceproposal = MaintenanceProposal::all();

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
        $maintenanceproposal = MaintenanceProposal::find($id);

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
            'year' => 'required|digits:4|integer',
            'side' => 'required|in:left,right',
            'start_length' => 'required|numeric|min:0',
            'end_length' => 'required|numeric|gt:start_length',
            'maintenance_type' => 'required|string',
            'status' => 'nullable|in:analyzed,approved,rejected',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // ambil data jalan
        $road = Road::find($request->road_id);

        // validasi panjang jalan
        if ($request->end_length > $road->road_length) {
            return response()->json([
                'success' => false,
                'message' => 'End length melebihi panjang jalan.'
            ], 422);
        }

        // histori maintenance
        $maintenanceLogs = MaintenanceLog::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)
            ->get([
                'start_length',
                'end_length'
            ]);

        // proposal existing
        $proposalSegments = MaintenanceProposal::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)
            ->get([
                'start_length',
                'end_length'
            ]);

        // gabungkan semua segmen
        $segments = $maintenanceLogs
            ->concat($proposalSegments)
            ->sortBy('start_length')
            ->values();

        $current = 0;

        foreach ($segments as $segment) {

            if ($segment->start_length > $current) {
                break;
            }

            $current = max(
                $current,
                $segment->end_length
            );
        }

        // kalau ruas sudah full
        if ($current >= $road->road_length) {
            return response()->json([
                'success' => false,
                'message' => 'Seluruh ruas jalan pada tahun ini sudah memiliki penanganan. Silakan input usulan pada tahun berikutnya.'
            ], 422);
        }

        // cek overlap
        $overlap = MaintenanceProposal::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)

            ->where(function ($query) use ($request) {

                $query

                    ->where(
                        'start_length',
                        '<',
                        $request->end_length
                    )

                    ->where(
                        'end_length',
                        '>',
                        $request->start_length
                    );
            })

            ->exists();

        if ($overlap) {
            return response()->json([
                'success' => false,
                'message' => 'Segmen jalan overlap dengan usulan lain.'
            ], 422);
        }

        // simpan proposal
        $maintenanceproposal = MaintenanceProposal::create([
            'road_id' => $request->road_id,
            'year' => $request->year,
            'side' => $request->side,
            'start_length' => $request->start_length,
            'end_length' => $request->end_length,
            'maintenance_type' => $request->maintenance_type,
            'status' => $request->status ?? 'analyzed',
        ]);

        // generate analysis
        $analysisService->analyze($maintenanceproposal);

        // cek segmen kosong
        $allSegments = MaintenanceProposal::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)
            ->orderBy('start_length')
            ->get();

        $gaps = [];

        $current = 0;

        foreach ($allSegments as $segment) {

            if ($segment->start_length > $current) {

                $gaps[] = [
                    'start_length' => $current,
                    'end_length' => $segment->start_length
                ];
            }

            $current = max(
                $current,
                $segment->end_length
            );
        }

        if ($current < $road->road_length) {

            $gaps[] = [
                'start_length' => $current,
                'end_length' => $road->road_length
            ];
        }

        return response()->json([
            'success' => true,
            'message' => "Maintenance Proposal Added Successfully!",
            'data' => $maintenanceproposal,
            'uncovered_segments' => $gaps
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $maintenanceproposal = MaintenanceProposal::find($id);

        if (!$maintenanceproposal) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Proposal Not Found!'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'year' => 'required|digits:4|integer',
            'side' => 'required|in:left,right',
            'start_length' => 'required|numeric|min:0',
            'end_length' => 'required|numeric|gt:start_length',
            'maintenance_type' => 'required|string',
            'status' => 'nullable|in:analyzed,approved,rejected',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // ambil data jalan
        $road = Road::find($request->road_id);

        // validasi panjang jalan
        if ($request->end_length > $road->road_length) {
            return response()->json([
                'success' => false,
                'message' => 'End length melebihi panjang jalan.'
            ], 422);
        }

        // cek overlap
        $overlap = MaintenanceProposal::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)

            // exclude dirinya sendiri
            ->where('id', '!=', $id)

            ->where(function ($query) use ($request) {

                $query

                    ->where(
                        'start_length',
                        '<',
                        $request->end_length
                    )

                    ->where(
                        'end_length',
                        '>',
                        $request->start_length
                    );
            })

            ->exists();

        if ($overlap) {
            return response()->json([
                'success' => false,
                'message' => 'Segmen jalan overlap dengan usulan lain.'
            ], 422);
        }

        // update proposal
        $maintenanceproposal->update([
            'road_id' => $request->road_id,
            'year' => $request->year,
            'side' => $request->side,
            'start_length' => $request->start_length,
            'end_length' => $request->end_length,
            'maintenance_type' => $request->maintenance_type,
            'status' => $request->status ?? $maintenanceproposal->status,
        ]);

        // cek segmen kosong
        $allSegments = MaintenanceProposal::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('year', $request->year)
            ->orderBy('start_length')
            ->get();

        $gaps = [];

        $current = 0;

        foreach ($allSegments as $segment) {

            if ($segment->start_length > $current) {

                $gaps[] = [
                    'start_length' => $current,
                    'end_length' => $segment->start_length
                ];
            }

            $current = max(
                $current,
                $segment->end_length
            );
        }

        // gap terakhir
        if ($current < $road->road_length) {

            $gaps[] = [
                'start_length' => $current,
                'end_length' => $road->road_length
            ];
        }

        return response()->json([
            'success' => true,
            'message' => 'Maintenance Proposal Updated Successfully!',
            'data' => $maintenanceproposal,
            'uncovered_segments' => $gaps
        ], 200);
    }

    public function destroy($id)
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
