<?php

namespace App\Http\Controllers;

use App\Models\Road;
use App\Models\SurfaceLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurfaceLogController extends Controller
{
    public function index()
    {
        $surfacelog = SurfaceLog::all();

        if ($surfacelog->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Logs Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Surface Logs",
            "data" => $surfacelog
        ], 200);
    }

    public function show(string $id)
    {
        $surfacelog = SurfaceLog::find($id);

        if (!$surfacelog) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Log Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Surface Log",
            "data" => $surfacelog
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'side' => 'required|in:left,right',
            'surface_subtype_id' => 'required|exists:surface_subtypes,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $road = Road::find($request->road_id);

        if (
            $request->start_length > $road->road_length ||
            $request->end_length > $road->road_length
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Length exceeds road maximum length!'
            ], 422);
        }

        $overlap = SurfaceLog::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where(function ($query) use ($request) {

                $query
                    ->where('start_length', '<', $request->end_length)
                    ->where('end_length', '>', $request->start_length);
            })
            ->exists();

        if ($overlap) {
            return response()->json([
                'success' => false,
                'message' => 'Surface range overlaps with existing data on this road side!'
            ], 422);
        }

        $surfacelog = SurfaceLog::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Surface Log Added Successfully!",
            "data" => $surfacelog
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $surfacelog = SurfaceLog::find($id);

        if (!$surfacelog) {
            return response()->json([
                "success" => false,
                "message" => "Surface Log Not Found!"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'side' => 'required|in:left,right',
            'surface_subtype_id' => 'required|exists:surface_subtypes,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $road = Road::find($request->road_id);

        if (
            $request->start_length > $road->road_length ||
            $request->end_length > $road->road_length
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Length exceeds road maximum length!'
            ], 422);
        }

        $overlap = SurfaceLog::where('road_id', $request->road_id)
            ->where('side', $request->side)
            ->where('id', '!=', $id)
            ->where(function ($query) use ($request) {

                $query
                    ->where('start_length', '<', $request->end_length)
                    ->where('end_length', '>', $request->start_length);
            })
            ->exists();

        if ($overlap) {
            return response()->json([
                'success' => false,
                'message' => 'Surface range overlaps with existing data on this road side!'
            ], 422);
        }

        $surfacelog->update([
            'road_id' => $request->road_id,
            'start_length' => $request->start_length,
            'end_length' => $request->end_length,
            'side' => $request->side,
            'surface_subtype_id' => $request->surface_subtype_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Surface Log Updated Successfully!',
            'data' => $surfacelog,
        ], 200);
    }

    public function destroy($id)
    {
        $surfacelog = SurfaceLog::find($id);

        if (!$surfacelog) {
            return response()->json([
                'success' => false,
                'message' => 'Surface Log Not Found!'
            ]);
        }

        $surfacelog->delete();

        return response()->json([
            "success" => true,
            "message" => "Surface Log Deleted Successfully!",
            "data" => $surfacelog
        ], 200);
    }
}
