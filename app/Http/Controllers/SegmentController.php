<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use App\Models\Setting;
use App\Models\SystemProcess;
use App\Services\SegmentService;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    public function index()
    {
        $segment = Segment::all();

        if ($segment->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Segments Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get All Segments",
            "data" => $segment
        ], 200);
    }

    public function show(string $id)
    {
        $segment = Segment::find($id);

        if (!$segment) {
            return response()->json([
                'success' => false,
                'message' => 'Segment Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get Detail Segment",
            "data" => $segment
        ], 200);
    }

    public function generate(SegmentService $segmentService)
    {
        $segmentService->generateSegments();

        $activeYear = Setting::first()->proposal_max_year;

        SystemProcess::updateOrCreate(
            ['year' => $activeYear],
            [
                'segment_generated' => true,
                'segment_generated_at' => now()
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Segments generated successfully'
        ]);
    }
}
