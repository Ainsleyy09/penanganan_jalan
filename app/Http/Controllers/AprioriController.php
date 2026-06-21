<?php

namespace App\Http\Controllers;

use App\Models\AprioriResult;
use App\Models\Setting;
use App\Models\SystemProcess;
use App\Services\AprioriService;
use Illuminate\Http\Request;

class AprioriController extends Controller
{
    public function index()
    {
        $aprioriresult = AprioriResult::all();

        if ($aprioriresult->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Apriori Result Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Apriori Results",
            "data" => $aprioriresult
        ], 200);
    }

    public function show(string $id)
    {
        $aprioriresult = AprioriResult::find($id);

        if (!$aprioriresult) {
            return response()->json([
                'success' => false,
                'message' => 'Apriori Result Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get Detail Apriori Results",
            "data" => $aprioriresult
        ], 200);
    }
    public function analyze(
    AprioriService $service
) {
    $output = $service->process();

    return response()->json([
        'output' => $output
    ]);
}
}
