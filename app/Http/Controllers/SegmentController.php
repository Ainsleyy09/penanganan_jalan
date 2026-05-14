<?php

namespace App\Http\Controllers;

use App\Models\Segment;
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
}
