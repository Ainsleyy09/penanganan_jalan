<?php

namespace App\Http\Controllers;

use App\Models\AprioriResult;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class AprioriResultController extends Controller
{
    public function index()
    {
        $aprioriresult = AprioriResult::all();

        if ($aprioriresult->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Apriori Results Not Found!'
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Apriori Results Logs",
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
            "message" => "Get Detail Apriori Result",
            "data" => $aprioriresult
        ], 200);
    }
}
