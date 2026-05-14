<?php

namespace App\Http\Controllers;

use App\Models\SurfaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurfaceTypeController extends Controller
{
    public function index()
    {
        $surfacetype = SurfaceType::all();

        if ($surfacetype->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Types Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Surface Types",
            "data" => $surfacetype
        ], 200);
    }

    public function show(string $id)
    {
        $surfacetype = SurfaceType::find($id);

        if (!$surfacetype) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Type Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Surface Type",
            "data" => $surfacetype
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $surfacetype = SurfaceType::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Surface Type Added Successfully!",
            "data" => $surfacetype
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $surfacetype = SurfaceType::find($id);

        if (!$surfacetype) {
            return response()->json([
                "success" => false,
                "message" => "Surface Type Not Found!"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $surfacetype->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Surface Type Updated Successfully!',
            'data' => $surfacetype,
        ], 200);
    }

    public function destroy($id)
    {
        $surfacetype = SurfaceType::find($id);

        if (!$surfacetype) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Type Not Found!'
            ]);
        }

        $surfacetype->delete();

        return response()->json([
            "success" => true,
            "message" => "Surface Type Deleted Successfully!",
            "data" => $surfacetype
        ], 200);
    }
}
