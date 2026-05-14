<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::all();

        if ($activity->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Activities Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Activities",
            "data" => $activity
        ], 200);
    }

    public function show(string $id)
    {
        $activity = Activity::find($id);

        if (!$activity) {
            return response()->json([
                'success' => false,
                'message' => 'Activity Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Activity",
            "data" => $activity
        ], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'activity' => 'required|in:insert,update,delete,analyze,report',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $activity = Activity::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Activity Added Successfully!",
            "data" => $activity
        ], 201);
    }
}
