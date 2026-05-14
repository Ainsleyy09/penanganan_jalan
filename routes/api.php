<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AprioriController;
use App\Http\Controllers\CoordinateController;
use App\Http\Controllers\CoordinateLogController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MaintenanceLogController;
use App\Http\Controllers\RoadController;
use App\Http\Controllers\SegmentController;
use App\Http\Controllers\SurfaceController;
use App\Http\Controllers\SurfaceLogController;
use App\Http\Controllers\SurfaceSubtypeController;
use App\Http\Controllers\SurfaceTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WidthController;
use App\Http\Controllers\WidthLogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaintenanceAnalysisController;
use App\Http\Controllers\MaintenanceProposalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth:api'])->group(function () {
    //ROADS
    Route::apiResource('/roads', RoadController::class)->only(['index', 'show']);

    //MAINTENANCE
    Route::apiResource('/maintenances', MaintenanceController::class)->only(['index', 'show']);

    //MAINTENANCE LOG
    Route::apiResource('/maintenancelogs', MaintenanceLogController::class)->only(['index', 'show']);

    //SURFACE
    Route::apiResource('/surfaces', SurfaceController::class)->only(['index', 'show']);

    //SURFACE LOG
    Route::apiResource('/surfacelogs', SurfaceLogController::class)->only(['index', 'show']);

    //WIDTH
    Route::apiResource('/widths', WidthController::class)->only(['index', 'show']);

    //WIDTH LOG
    Route::apiResource('/widthlogs', WidthLogController::class)->only(['index', 'show']);

    //COORDINATE
    Route::apiResource('/coordinates', CoordinateController::class)->only(['index', 'show']);

    //COORDINATE LOG
    Route::apiResource('/coordinateslogs', CoordinateLogController::class)->only(['index', 'show']);

    //USER
    Route::apiResource('/users', UserController::class)->only(['index', 'show']);

    //APRIORI
    Route::apiResource('/aprioris', AprioriController::class)->only(['index', 'show']);
    Route::post('/aprioris', [AprioriController::class, 'analyze']);


    Route::middleware(['role:admin'])->group(function () {
        //ROADS
        Route::apiResource('/roads', RoadController::class)->only(['store', 'destroy']);
        Route::post('/roads/{id}', [RoadController::class, 'update']);

        //ACITIVITY
        Route::apiResource('/activities', ActivityController::class)->only(['index', 'show', 'store']);

        //SURFACE TYPE
        Route::apiResource('/surfacetypes', SurfaceTypeController::class)->only(['index', 'show', 'store', 'destroy']);
        Route::post('/surfacetypes/{id}', [SurfaceTypeController::class, 'update']);

        //SURFACE SUBTYPE
        Route::apiResource('/surfacesubtypes', SurfaceSubtypeController::class)->only(['index', 'show', 'store', 'destroy']);
        Route::post('/surfacesubtypes/{id}', [SurfaceSubtypeController::class, 'update']);

        //SEGMENT
        Route::apiResource('/segments', SegmentController::class)->only(['index', 'show', 'store', 'destroy']);
        Route::post('/segments/{id}', [SegmentController::class, 'update']);

        //COORDINATE LOG
        Route::apiResource('/coordinatelogs', CoordinateController::class)->only(['store', 'destroy']);
        Route::post('/coordinatelogs/{id}', [CoordinateController::class, 'update']);

        //MAINTENANCE LOG
        Route::apiResource('/maintenancelogs', MaintenanceLogController::class)->only(['store', 'destroy']);
        Route::post('/maintenancelogs/{id}', [MaintenanceLogController::class, 'update']);

        //SURFACE LOG
        Route::apiResource('/surfacelogs', SurfaceLogController::class)->only(['store', 'destroy']);
        Route::post('/surfacelogs/{id}', [SurfaceLogController::class, 'update']);

        //WIDTH LOG
        Route::apiResource('/widthlogs', WidthLogController::class)->only(['store', 'destroy']);
        Route::post('/widthlogs/{id}', [WidthLogController::class, 'update']);

        //USER
        Route::apiResource('/users', UserController::class)->only(['store', 'destroy']);
        Route::post('/users/{id}', [UserController::class, 'update']);
    });
});

//MAINTENANCE PROPOSAL
Route::apiResource('/maintenance-proposals', MaintenanceProposalController::class)->only(['index', 'show', 'store', 'destroy']);
Route::post('/maintenance-proposals/{id}', [MaintenanceProposalController::class, 'update']);

//MAINTENANCE ANALYSIS
Route::apiResource('/maintenance-analysis', MaintenanceAnalysisController::class)->only(['index', 'show']);

//LOGIN, REGISTER, LOGOUT
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
