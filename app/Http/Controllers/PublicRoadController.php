<?php

namespace App\Http\Controllers;

use App\Models\Road;
use App\Models\Segment;
use Illuminate\Http\Request;

class PublicRoadController extends Controller
{
    public function index()
    {
        $roads = Road::withCount('segments')
            ->get();

        return response()->json([
            'data' => $roads
        ]);
    }

    public function show($id)
    {
        $road = Road::with([
            'segments.surfaces.surfaceSubtype',
            'segments.widths',
            'segments.maintenances.maintenanceType'
        ])->findOrFail($id);

        $segments = $road->segments->map(function ($segment) {

            $leftSurface = $segment->surfaces
                ->where('side', 'left')
                ->first();

            $rightSurface = $segment->surfaces
                ->where('side', 'right')
                ->first();

            $leftWidth = $segment->widths
                ->where('side', 'left')
                ->first();

            $rightWidth = $segment->widths
                ->where('side', 'right')
                ->first();

            $leftMaintenance = $segment->maintenances
                ->where('side', 'left')
                ->sortByDesc('year')
                ->first();

            $rightMaintenance = $segment->maintenances
                ->where('side', 'right')
                ->sortByDesc('year')
                ->first();

            return [
                'id' => $segment->id,
                'start_length' => $segment->start_length,
                'end_length' => $segment->end_length,
                'segment_length' => $segment->end_length - $segment->start_length,

                'left' => [
                    'surface' => $leftSurface?->surfaceSubtype?->name,
                    'width' => $leftWidth?->width,

                    'maintenances' => $segment->maintenances
                        ->where('side', 'left')
                        ->sortByDesc('year')
                        ->values()
                        ->map(function ($item) {
                            return [
                                'year' => $item->year,
                                'maintenance' => $item->maintenanceType?->name,
                            ];
                        }),
                ],

                'right' => [
                    'surface' => $rightSurface?->surfaceSubtype?->name,
                    'width' => $rightWidth?->width,

                    'maintenances' => $segment->maintenances
                        ->where('side', 'right')
                        ->sortByDesc('year')
                        ->values()
                        ->map(function ($item) {
                            return [
                                'year' => $item->year,
                                'maintenance' => $item->maintenanceType?->name,
                            ];
                        }),
                ]
            ];
        });

        return response()->json([
            'road' => [
                'id' => $road->id,
                'road_code' => $road->road_code,
                'name' => $road->name,
                'road_length' => $road->road_length,
                'total_segments' => $road->segments->count(),
            ],
            'segments' => $segments
        ]);
    }

    public function report()
    {
        $roads = Road::with([
            'segments.surfaces.surfaceSubtype',
            'segments.widths',
            'segments.maintenances.maintenanceType'
        ])->get();

        $data = $roads->map(function ($road) {

            return [
                'road_code' => $road->road_code,
                'name' => $road->name,
                'road_length' => $road->road_length,

                'segments' => $road->segments->map(function ($segment) {

                    $leftSurface = $segment->surfaces
                        ->where('side', 'left')
                        ->first();

                    $rightSurface = $segment->surfaces
                        ->where('side', 'right')
                        ->first();

                    $leftWidth = $segment->widths
                        ->where('side', 'left')
                        ->first();

                    $rightWidth = $segment->widths
                        ->where('side', 'right')
                        ->first();

                    $years = [];

                    foreach ([2023, 2024, 2025, 2026] as $year) {

                        $leftMaintenance = $segment->maintenances
                            ->where('side', 'left')
                            ->where('year', $year)
                            ->first();

                        $rightMaintenance = $segment->maintenances
                            ->where('side', 'right')
                            ->where('year', $year)
                            ->first();

                        $years[$year] = [
                            'left' => $leftMaintenance?->maintenanceType?->name ?? '-',
                            'right' => $rightMaintenance?->maintenanceType?->name ?? '-',
                        ];
                    }

                    return [
                        'start_length' => $segment->start_length,
                        'end_length' => $segment->end_length,

                        'left' => [
                            'width' => $leftWidth?->width,
                            'surface' => $leftSurface?->surfaceSubtype?->name,
                        ],

                        'right' => [
                            'width' => $rightWidth?->width,
                            'surface' => $rightSurface?->surfaceSubtype?->name,
                        ],

                        'years' => $years
                    ];
                })
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function map()
    {
        $roads = Road::with('coordinate')
            ->withCount('segments')
            ->get();

        return response()->json([
            'data' => $roads->map(function ($road) {
                return [
                    'id' => $road->id,
                    'road_code' => $road->road_code,
                    'name' => $road->name,
                    'road_length' => $road->road_length,
                    'segments_count' => $road->segments_count,
                    'latitude' => $road->coordinate?->latitude,
                    'longitude' => $road->coordinate?->longitude,
                ];
            })
        ]);
    }
}
