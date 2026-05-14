<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenance = Maintenance::all();

        if ($maintenance->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Maintenance",
            "data" => $maintenance
        ], 200);
    }

    public function show(string $id)
    {
        $maintenance = Maintenance::find($id);

        if (!$maintenance) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Maintenance",
            "data" => $maintenance
        ], 200);
    }
}
