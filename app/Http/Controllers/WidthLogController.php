<?php

namespace App\Http\Controllers;

use App\Models\WidthLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WidthLogController extends Controller
{
    public function index()
    {
        $widthlog = WidthLog::all();

        if ($widthlog->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Width Logs Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Width Logs",
            "data" => $widthlog
        ], 200);
    }

    public function show(string $id)
    {
        $widthlog = WidthLog::find($id);

        if (!$widthlog) {
            return response()->json([
                'success' => false,
                'message' => 'Width Log Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Width Log",
            "data" => $widthlog
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'side' => 'required|in:left,right',
            'width' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $widthlog = WidthLog::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Width Log Added Successfully!",
            "data" => $widthlog
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $widthlog = WidthLog::find($id);

        if (!$widthlog) {
            return response()->json([
                "success" => false,
                "message" => "Width Log Not Found!"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'side' => 'required|in:left,right',
            'width' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $widthlog->update([
            'road_id' => $request->road_id,
            'start_length' => $request->start_length,
            'end_length' => $request->end_length,
            'side' => $request->side,
            'width' => $request->width,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Width Log Updated Successfully!',
            'data' => $widthlog,
        ], 200);
    }

    public function destroy($id)
    {
        $widthlog = WidthLog::find($id);

        if (!$widthlog) {
            return response()->json([
                'success' => false,
                'message' => 'Width Log Not Found!'
            ]);
        }

        $widthlog->delete();

        return response()->json([
            "success" => true,
            "message" => "Width Log Deleted Successfully!",
            "data" => $widthlog
        ], 200);
    }
}
