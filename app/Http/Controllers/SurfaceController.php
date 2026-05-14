<?php

namespace App\Http\Controllers;

use App\Models\Surface;
use Illuminate\Http\Request;

class SurfaceController extends Controller
{
    public function index()
    {
        $surface = Surface::all();

        if ($surface->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Surface",
            "data" => $surface
        ], 200);
    }

    public function show(string $id)
    {
        $surface = Surface::find($id);

        if (!$surface) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Surface",
            "data" => $surface
        ], 200);
    }
}
