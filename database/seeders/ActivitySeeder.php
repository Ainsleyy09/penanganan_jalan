<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'user_id' => 1,
            'activity' => 'insert',
            'description' => 'Menambahkan data jalan baru',
        ]);
        
        Activity::create([
            'user_id' => 2,
            'activity' => 'delete',
            'description' => 'Menghapus data jalan rusak',
        ]);

        Activity::create([
            'user_id' => 2,
            'activity' => 'analyze',
            'description' => 'Melakukan analisis kondisi jalan',
        ]);

    }
}
