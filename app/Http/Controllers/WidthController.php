<?php

namespace App\Http\Controllers;

use App\Models\Width;
use Illuminate\Http\Request;

class WidthController extends Controller
{
    public function index()
    {
        $width = Width::all();

        if ($width->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Width Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Width",
            "data" => $width
        ], 200);
    }

    public function show(string $id)
    {
        $width = Width::find($id);

        if (!$width) {
            return response()->json([
                'success' => false,
                'message' => 'Width Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Width",
            "data" => $width
        ], 200);
    }
}
