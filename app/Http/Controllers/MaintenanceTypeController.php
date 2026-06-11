<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaintenanceTypeController extends Controller
{
    public function index()
    {
        $maintenancetype = MaintenanceType::all();

        if ($maintenancetype->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Types Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance Types",
            "data" => $maintenancetype
        ], 200);
    }

    public function show(string $id)
    {
        $maintenancetype = MaintenanceType::find($id);

        if (!$maintenancetype) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Type Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance Type",
            "data" => $maintenancetype
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

        $maintenancetype = MaintenanceType::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Maintenance Type Added Successfully!",
            "data" => $maintenancetype
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $maintenancetype = MaintenanceType::find($id);

        if (!$maintenancetype) {
            return response()->json([
                "success" => false,
                "message" => "Maintenance Type Not Found!"
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

        $maintenancetype->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Maintenance Type Updated Successfully!',
            'data' => $maintenancetype,
        ], 200);
    }
    public function destroy($id)
    {
        $maintenancetype = MaintenanceType::find($id);

        if (!$maintenancetype) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Type Not Found!'
            ]);
        }

        $maintenancetype->delete();

        return response()->json([
            "success" => true,
            "message" => "Maintenance Type Deleted Successfully!",
            "data" => $maintenancetype
        ], 200);
    }
}
