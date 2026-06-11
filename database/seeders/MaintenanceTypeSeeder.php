<?php

namespace Database\Seeders;

use App\Models\MaintenanceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #ID 1
        MaintenanceType::create([
            'name' => 'Rehabilitasi'
        ]);

        #ID 2
        MaintenanceType::create([
            'name' => 'Rekonstruksi'
        ]);

        #ID 3
        MaintenanceType::create([
            'name' => 'Pelebaran'
        ]);

        #ID 4
        MaintenanceType::create([
            'name' => 'Pembangunan'
        ]);

        #ID 5
        MaintenanceType::create([
            'name' => 'Berkala'
        ]);

        #ID 6
        MaintenanceType::create([
            'name' => 'Rutin'
        ]);

        #ID 7
        MaintenanceType::create([
            'name' => 'Drainase'
        ]);

        #ID 8
        MaintenanceType::create([
            'name' => 'DPT Longsoran'
        ]);
    }
}
