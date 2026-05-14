<?php

namespace App\Http\Controllers;

use App\Models\Road;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoadController extends Controller
{
    public function index()
    {
        $roads = Road::all();

        if ($roads->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Roads Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get All Roads",
            "data" => $roads
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'road_code' => 'required|string|max:20',
            'name' => 'required|string|max:500',
            'road_length' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $road = Road::create([
            'road_code' => $request->road_code,
            'name' => $request->name,
            'road_length' => $request->road_length,
        ]);

        return response()->json([
            'success' => true,
            'message' => "Road Added Successfully!",
            "data" => $road
        ], 201);
    }

    public function show(string $id)
    {
        $road = Road::find($id);

        if (!$road) {
            return response()->json([
                'success' => false,
                'message' => 'Road Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get Detail Road",
            "data" => $road
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $road = Road::find($id);

        if (!$road) {
            return response()->json([
                'success' => false,
                'message' => 'Road Not Found!'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'road_code' => 'required|string|max:20',
            'name' => 'required|string|max:500',
            'road_length' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $road->update([
            'road_code' => $request->road_code,
            'name' => $request->name,
            'road_length' => $request->road_length,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Road Updated Successfully!",
            "data" => $road
        ], 200);
    }

    public function destroy($id)
    {
        $road = Road::find($id);

        if (!$road) {
            return response()->json([
                'success' => false,
                'message' => 'Road Not Found!'
            ]);
        }

        $road->delete();

        return response()->json([
            "success" => true,
            "message" => "Road Deleted Successfully!",
        ], 200);
    }
}
