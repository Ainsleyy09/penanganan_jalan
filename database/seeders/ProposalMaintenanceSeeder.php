<?php

namespace Database\Seeders;

use App\Models\ProposalMaintenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProposalMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 90; $i++) {

            ProposalMaintenance::create([
                'maintenance_proposal_id' => $i,
                'maintenancetype_id' => (($i - 1) % 8) + 1,
            ]);
        }
    }
}
