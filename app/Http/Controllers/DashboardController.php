<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceProposal;
use App\Models\Road;
use App\Models\Segment;
use App\Models\Setting;
use App\Models\SystemProcess;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $activeYear = Setting::first()?->proposal_max_year;

        $closeStatus = app(
            \App\Http\Controllers\MaintenanceProposalController::class
        )->getCloseYearStatus()->getData(true);

        $process = SystemProcess::where(
            'year',
            $activeYear
        )->first();

        $nextStep = 'Generate Segment';

        if (
            $process?->segment_generated &&
            !$process?->apriori_generated
        ) {
            $nextStep = 'Generate Apriori';
        }

        if (
            $process?->segment_generated &&
            $process?->apriori_generated &&
            !$process?->is_closed
        ) {
            $nextStep = 'Close Year';
        }

        if ($process?->is_closed) {
            $nextStep = 'Setting Tahun Baru';
        }

        return response()->json([
            'success' => true,

            'data' => [

                // CARD ATAS
                'total_roads' => Road::count(),

                'total_segments' => Segment::count(),

                'active_year' => $activeYear,

                'total_proposals' =>
                MaintenanceProposal::where(
                    'year',
                    $activeYear
                )->count(),

                'approved' =>
                MaintenanceProposal::where(
                    'year',
                    $activeYear
                )
                    ->where(
                        'status',
                        'approved'
                    )
                    ->count(),

                'review' =>
                MaintenanceProposal::where(
                    'year',
                    $activeYear
                )
                    ->where(
                        'status',
                        'review'
                    )
                    ->count(),

                // CLOSE YEAR
                'close_year_status' =>
                $closeStatus['can_close'],

                'completed_roads' =>
                $closeStatus['completed_roads'],

                'total_roads_close' =>
                $closeStatus['total_roads'],

                // WORKFLOW
                'workflow' => [

                    // karena ada active year di settings
                    // berarti setting tahun sudah dilakukan
                    'setting_year' =>
                    !empty($activeYear),

                    'is_closed' =>
                    $process?->is_closed ?? false,

                    'segment_generated' =>
                    $process?->segment_generated ?? false,

                    'apriori_generated' =>
                    $process?->apriori_generated ?? false,

                    'closed_at' =>
                    $process?->closed_at,

                    'segment_generated_at' =>
                    $process?->segment_generated_at,

                    'apriori_generated_at' =>
                    $process?->apriori_generated_at,
                ],

                // NEXT STEP
                'next_step' => $nextStep
            ]
        ]);
    }
}
