<?php

namespace App\Http\Controllers;

use App\Models\SurfaceSubtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurfaceSubtypeController extends Controller
{
    public function index()
    {
        $surfacesubtype = SurfaceSubtype::all();

        if ($surfacesubtype->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Subtypes Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Surface Subtypes",
            "data" => $surfacesubtype
        ], 200);
    }

    public function show(string $id)
    {
        $surfacesubtype = SurfaceSubtype::find($id);

        if (!$surfacesubtype) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Subtype Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Surface Subtype",
            "data" => $surfacesubtype
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'surface_type_id' => 'required|exists:surface_types,id',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $surfacesubtype = SurfaceSubtype::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Surface Subtype Added Successfully!",
            "data" => $surfacesubtype
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $surfacesubtype = SurfaceSubtype::find($id);

        if (!$surfacesubtype) {
            return response()->json([
                "success" => false,
                "message" => "Surface Subtype Not Found!"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'surface_type_id' => 'required|exists:surface_types,id',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $surfacesubtype->update([
            'surface_type_id' => $request->surface_type_id,
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Surface Subtype Updated Successfully!',
            'data' => $surfacesubtype,
        ], 200);
    }

    public function destroy($id)
    {
        $surfacesubtype = SurfaceSubtype::find($id);

        if (!$surfacesubtype) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Subtype Not Found!'
            ]);
        }

        $surfacesubtype->delete();

        return response()->json([
            "success" => true,
            "message" => "Surface Subtype Deleted Successfully!",
            "data" => $surfacesubtype
        ], 200);
    }
}
