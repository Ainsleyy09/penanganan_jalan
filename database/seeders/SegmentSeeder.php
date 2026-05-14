<?php

namespace Database\Seeders;

use App\Services\SegmentService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new SegmentService();

        $service->generateSegments();
    }
}
