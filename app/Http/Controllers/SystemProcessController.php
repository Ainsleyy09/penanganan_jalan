<?php

namespace App\Http\Controllers;

use App\Models\SystemProcess;
use Illuminate\Http\Request;

class SystemProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $system = SystemProcess::all();

        if ($system->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'System Process Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get All System Processes",
            "data" => $system
        ], 200);
    }

    public function show(string $id)
    {
        $system = SystemProcess::find($id);

        if (!$system) {
            return response()->json([
                'success' => false,
                'message' => 'System Process Not Found!'
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Get Detail System Process",
            "data" => $system
        ], 200);
    }
}
