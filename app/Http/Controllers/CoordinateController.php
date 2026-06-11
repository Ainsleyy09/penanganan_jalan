<?php

namespace App\Http\Controllers;

use App\Models\Coordinate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoordinateController extends Controller
{
    public function index()
    {
        $coordinates = Coordinate::all();

        if ($coordinates->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Coordinates Not Found!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Coordinates',
            'data' => $coordinates
        ], 200);
    }

    public function show(string $id)
    {
        $coordinate = Coordinate::find($id);

        if (!$coordinate) {
            return response()->json([
                'success' => false,
                'message' => 'Coordinate Not Found!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Detail Coordinate',
            'data' => $coordinate
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $existingCoordinate = Coordinate::where('road_id', $request->road_id)->first();

        if ($existingCoordinate) {
            return response()->json([
                'success' => false,
                'message' => 'Coordinate for this road already exists!'
            ], 422);
        }

        $coordinate = Coordinate::create([
            'road_id' => $request->road_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Coordinate Added Successfully!',
            'data' => $coordinate
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $coordinate = Coordinate::find($id);

        if (!$coordinate) {
            return response()->json([
                'success' => false,
                'message' => 'Coordinate Not Found!'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $coordinate->update([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Coordinate Updated Successfully!',
            'data' => $coordinate
        ], 200);
    }
    public function destroy($id)
    {
        $coordinate = Coordinate::find($id);

        if (!$coordinate) {
            return response()->json([
                'success' => false,
                'message' => 'Coordinate Not Found!'
            ]);
        }

        $coordinate->delete();

        return response()->json([
            'success' => true,
            'message' => 'Coordinate Deleted Successfully!'
        ], 200);
    }
}
