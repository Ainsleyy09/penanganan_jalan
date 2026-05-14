<?php

namespace App\Services;

use App\Models\MaintenanceLog;
use App\Models\Road;
use App\Models\Segment;

use App\Models\Maintenance;
use App\Models\Surface;
use App\Models\SurfaceLog;

use App\Models\Width;
use App\Models\WidthLog;

class SegmentService
{
    public function generateSegments()
    {
        // hapus data lama
        Segment::query()->delete();
        Maintenance::query()->delete();
        Surface::query()->delete();
        Width::query()->delete();

        $roads = Road::all();

        foreach ($roads as $road) {

            $logs = MaintenanceLog::where('road_id', $road->id)
                ->whereColumn('start_length', '<', 'end_length')
                ->get();

            $points = [];

            foreach ($logs as $log) {

                $points[] = (float) $log->start_length;
                $points[] = (float) $log->end_length;
            }

            // normalisasi float
            $points = array_map(function ($point) {
                return round($point, 2);
            }, $points);

            // hapus duplicate
            $points = array_unique($points);

            // urutkan
            sort($points);

            for ($i = 0; $i < count($points) - 1; $i++) {

                // skip segment aneh / terlalu kecil
                if (abs($points[$i] - $points[$i + 1]) < 0.01) {
                    continue;
                }

                // buat segment
                $segment = Segment::create([
                    'road_id' => $road->id,
                    'start_length' => $points[$i],
                    'end_length' => $points[$i + 1],
                ]);

                // generate data turunan
                $this->generateMaintenance($segment);

                $this->generateSurface($segment);

                $this->generateWidth($segment);
            }
        }
    }

    private function generateSurface($segment)
    {
        $surfaceLogs = SurfaceLog::where('road_id', $segment->road_id)
            ->where('start_length', '<=', $segment->start_length)
            ->where('end_length', '>=', $segment->end_length)
            ->get();

        foreach ($surfaceLogs as $log) {

            Surface::create([
                'road_id' => $segment->road_id,
                'segment_id' => $segment->id,
                'side' => $log->side,
                'surface_subtype_id' => $log->surface_subtype_id,
            ]);
        }
    }

    private function generateWidth($segment)
    {
        $widthLogs = WidthLog::where('road_id', $segment->road_id)

            ->whereColumn('start_length', '<', 'end_length')

            ->where('start_length', '<=', $segment->start_length)

            ->where('end_length', '>=', $segment->end_length)

            ->get();

        foreach ($widthLogs as $log) {

            Width::create([
                'road_id' => $segment->road_id,
                'segment_id' => $segment->id,
                'side' => $log->side,
                'width' => $log->width,
            ]);
        }
    }

    private function generateMaintenance($segment)
    {
        $maintenanceLogs = MaintenanceLog::where('road_id', $segment->road_id)

            ->whereColumn('start_length', '<', 'end_length')

            ->where('start_length', '<=', $segment->start_length)

            ->where('end_length', '>=', $segment->end_length)

            ->get();

        // group per tahun + side
        $grouped = $maintenanceLogs->groupBy(function ($item) {
            return $item->year . '-' . $item->side;
        });

        foreach ($grouped as $group) {

            $first = $group->first();

            // gabungkan maintenance type unik
            $maintenanceTypes = $group
                ->pluck('maintenance_type')
                ->unique()
                ->implode(', ');

            Maintenance::create([
                'road_id' => $segment->road_id,
                'segment_id' => $segment->id,
                'year' => $first->year,
                'side' => $first->side,
                'maintenance_type' => $maintenanceTypes,
            ]);
        }
    }
}
