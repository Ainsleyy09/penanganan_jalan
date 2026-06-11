<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceAnalysisRule;
use App\Models\MaintenanceType;
use Illuminate\Http\Request;

class MaintenanceAnalysisRuleController extends Controller
{
    public function index()
    {
        $maintenanceanalysisrule = MaintenanceAnalysisRule::all();

        foreach ($maintenanceanalysisrule as $analysis) {

            $analysis->antecedent_names = MaintenanceType::whereIn(
                'id',
                json_decode($analysis->antecedent, true)
            )->pluck('name');

            $analysis->consequent_names = MaintenanceType::whereIn(
                'id',
                json_decode($analysis->consequent, true)
            )->pluck('name');
        }

        if ($maintenanceanalysisrule->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analysis Rules Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance Analysis Rules",
            "data" => $maintenanceanalysisrule
        ], 200);
    }

    public function show(string $id)
    {
        $maintenanceAnalysisrule = MaintenanceAnalysisRule::find($id);
        $maintenanceAnalysisrule->antecedent_names = MaintenanceType::whereIn(
            'id',
            json_decode($maintenanceAnalysisrule->antecedent, true)
        )->pluck('name');

        $maintenanceAnalysisrule->consequent_names = MaintenanceType::whereIn(
            'id',
            json_decode($maintenanceAnalysisrule->consequent, true)
        )->pluck('name');

        if (!$maintenanceAnalysisrule) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Analysis Rule Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance Analysis Rule",
            "data" => $maintenanceAnalysisrule
        ], 200);
    }
}
