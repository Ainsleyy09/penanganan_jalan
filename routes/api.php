<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AprioriController;
use App\Http\Controllers\AprioriResultController;
use App\Http\Controllers\CoordinateController;
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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaintenanceAnalysisController;
use App\Http\Controllers\MaintenanceAnalysisRuleController;
use App\Http\Controllers\MaintenanceProposalController;
use App\Http\Controllers\MaintenanceTypeController;
use App\Http\Controllers\PublicRoadController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SystemProcessController;
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

    //MAINTENANCE TYPE
    Route::apiResource('/maintenancetypes', MaintenanceTypeController::class)->only(['index', 'show']);

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
    Route::apiResource('/coordinates', CoordinateController::class)->only(['index', 'show', 'store', 'destroy']);
    Route::post('/coordinates/{id}', [CoordinateController::class, 'update']);

    //USER
    Route::apiResource('/users', UserController::class)->only(['index', 'show', 'store']);
    Route::post('/users/{id}', [UserController::class, 'update']);

    //APRIORI RESULT
    Route::apiResource('/aprioriresults', AprioriResultController::class)->only(['index', 'show']);

    //MAINTENANCE PROPOSAL
    Route::post('/maintenanceproposals/update', [MaintenanceProposalController::class, 'update']);
    Route::post('/maintenanceproposals/{id}/final', [MaintenanceProposalController::class, 'saveFinal']);
    Route::get('/maintenanceproposals/status/{roadId}', [MaintenanceProposalController::class, 'checkRoadStatus']);
    Route::post('/maintenanceproposals/closeyear', [MaintenanceProposalController::class, 'closeYear']);
    Route::get('/maintenanceproposals/closeyear-status', [MaintenanceProposalController::class, 'getCloseYearStatus']);
    Route::get('/maintenanceproposals/years',[MaintenanceProposalController::class, 'getAvailableYears']);
    Route::get('/maintenancereport/{year}',[MaintenanceProposalController::class, 'getMaintenanceReport']);
    Route::apiResource('/maintenanceproposals', MaintenanceProposalController::class)->only(['index', 'show', 'store', 'destroy']);

    //MAINTENANCE ANALYSIS
    Route::apiResource('/maintenanceanalysis', MaintenanceAnalysisController::class)->only(['index', 'show']);

     //MAINTENANCE ANALYSIS RULE
     Route::apiResource('/maintenanceanalysisrule', MaintenanceAnalysisRuleController::class)->only(['index', 'show']);

    //PUBLIC ROAD
    Route::get('/publicroad/report', [PublicRoadController::class, 'report']);
    Route::get('/publicroad/map', [PublicRoadController::class, 'map']);
    Route::apiResource('/publicroad', PublicRoadController::class)->only(['index', 'show']);

    //SETTING YEAR
    Route::apiResource('/settings', SettingController::class)->only(['index']);

    //SYSTEM PROCESS
    Route::apiResource('/systemprocess', SystemProcessController::class)->only(['index', 'show']);

    //DASHBOARD
    Route::apiResource('/dashboard', DashboardController::class)->only(['index']);

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
        Route::apiResource('/segments', SegmentController::class)->only(['index', 'show']);
        Route::post('/segments/generate', [SegmentController::class, 'generate']);

        //COORDINATE LOG
        Route::apiResource('/coordinatelogs', CoordinateController::class)->only(['store', 'destroy']);
        Route::post('/coordinatelogs/{id}', [CoordinateController::class, 'update']);

        //MAINTENANCE LOG
        Route::apiResource('/maintenancelogs', MaintenanceLogController::class)->only(['store', 'destroy']);
        Route::post('/maintenancelogs/{id}', [MaintenanceLogController::class, 'update']);

        //MAINTENANCE TYPE
        Route::apiResource('/maintenancetypes', MaintenanceTypeController::class)->only(['store', 'destroy']);
        Route::post('/maintenancetypes/{id}', [MaintenanceTypeController::class, 'update']);

        //SURFACE LOG
        Route::apiResource('/surfacelogs', SurfaceLogController::class)->only(['store', 'destroy']);
        Route::post('/surfacelogs/{id}', [SurfaceLogController::class, 'update']);

        //WIDTH LOG
        Route::apiResource('/widthlogs', WidthLogController::class)->only(['store', 'destroy']);
        Route::post('/widthlogs/{id}', [WidthLogController::class, 'update']);

        //USER
        Route::apiResource('/users', UserController::class)->only(['destroy']);

        //APRIORI GENERATE
        Route::post('/aprioris', [AprioriController::class, 'analyze']);

        //SETTING YEAR
        Route::post('/settings/{id}', [SettingController::class, 'update']);
    });
});


//LOGIN, REGISTER, LOGOUT
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
