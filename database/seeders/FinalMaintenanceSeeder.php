<?php

namespace Database\Seeders;

use App\Models\FinalMaintenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 90; $i++) {

            FinalMaintenance::create([
                'maintenance_proposal_id' => $i,
                'maintenancetype_id' => ($i % 8) + 1,
            ]);
        }
    }
}
