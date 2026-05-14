<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaintenanceLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenancelog = MaintenanceLog::all();

        if ($maintenancelog->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Logs Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance Logs",
            "data" => $maintenancelog
        ], 200);
    }

    public function show(string $id)
    {
        $maintenancelog = MaintenanceLog::find($id);

        if (!$maintenancelog) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Log Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance Log",
            "data" => $maintenancelog
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'year' => 'required|digits:4',
            'side' => 'required|in:left,right',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'maintenance_type' => 'required|in:Rehabilitasi,Rekonstruksi,Pelebaran,Pembangunan,Berkala,Rutin,Drainase,DPT Longsoran',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $maintenancelog = MaintenanceLog::create($request->all());

        return response()->json([
            'success' => true,
            'message' => "Maintenance Log Added Successfully!",
            "data" => $maintenancelog
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $maintenancelog = MaintenanceLog::find($id);

        if (!$maintenancelog) {
            return response()->json([
                "success" => false,
                "message" => "Maintenance Log Not Found!"
            ]);
        }

        $validator = Validator::make($request->all(), [
            'road_id' => 'required|exists:roads,id',
            'year' => 'required|digits:4',
            'side' => 'required|in:left,right',
            'start_length' => 'required|numeric',
            'end_length' => 'required|numeric|gte:start_length',
            'maintenance_type' => 'required|in:Rehabilitasi,Rekonstruksi,Pelebaran,Pembangunan,Berkala,Rutin,Drainase,DPT Longsoran',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $maintenancelog->update([
            'road_id' => $request->road_id,
            'year' => $request->year,
            'side' => $request->side,
            'start_length' => $request->start_length,
            'end_length' => $request->end_length,
            'maintenance_type' => $request->maintenance_type,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Maintenance Log Updated Successfully!',
            'data' => $maintenancelog,
        ], 200);
    }

    public function destroy($id)
    {
        $maintenancelog = MaintenanceLog::find($id);

        if (!$maintenancelog) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Log Not Found!'
            ]);
        }

        $maintenancelog->delete();

        return response()->json([
            "success" => true,
            "message" => "Maintenance Log Deleted Successfully!",
            "data" => $maintenancelog
        ], 200);
    }
}
