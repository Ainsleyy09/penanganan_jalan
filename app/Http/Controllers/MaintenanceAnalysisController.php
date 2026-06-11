<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceAnalysis;
use App\Models\MaintenanceType;
use Illuminate\Http\Request;

class MaintenanceAnalysisController extends Controller
{
    public function index()
    {
        $maintenanceanalysis = MaintenanceAnalysis::with('rules')->get();

        if ($maintenanceanalysis->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analyses Not Found!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get All Maintenance Analyses',
            'data' => $maintenanceanalysis
        ]);
    }

    public function show(string $id)
    {
        $maintenanceAnalysis = MaintenanceAnalysis::with('rules')
            ->find($id);

        if (!$maintenanceAnalysis) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analysis Not Found!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Detail Maintenance Analysis',
            'data' => $maintenanceAnalysis
        ]);
    }
}
