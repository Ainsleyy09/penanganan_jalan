<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceAnalysis;
use Illuminate\Http\Request;

class MaintenanceAnalysisController extends Controller
{
    public function index()
    {
        $maintenanceanalysis = MaintenanceAnalysis::all();

        if ($maintenanceanalysis->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analyses Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance Analyses",
            "data" => $maintenanceanalysis
        ], 200);
    }

    public function show(string $id)
    {
        $maintenanceAnalysis = MaintenanceAnalysis::find($id);

        if (!$maintenanceAnalysis) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analyses Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance Analyses",
            "data" => $maintenanceAnalysis
        ], 200);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, MaintenanceAnalysis $maintenanceAnalysis)
    {
        //
    }

    public function destroy(MaintenanceAnalysis $maintenanceAnalysis)
    {
        //
    }
}
