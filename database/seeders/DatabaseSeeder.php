<?php

namespace Database\Seeders;

use App\Models\MaintenanceProposal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoadsSeeder::class,
            UserSeeder::class,
            ActivitySeeder::class,
            SurfaceSeeder::class,
            MaintenanceSeeder::class,
            CoordinateLogSeeder::class,
            CoordinateSeeder::class,
            WidthSeeder::class,
            SurfaceTypeSeeder::class,
            SurfaceSubtypeSeeder::class,
            SurfaceLogSeeder::class,
            WidthLogSeeder::class,
            MaintenanceLogSeeder::class,
            SegmentSeeder::class,
            AprioriResultSeeder::class,
            MaintenanceProposalSeeder::class,
            MaintenanceAnalysisSeeder::class,
        ]);
    }
}
