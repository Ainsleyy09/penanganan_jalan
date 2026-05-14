<?php

namespace Database\Seeders;

use App\Models\SurfaceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurfaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SurfaceType::create([
            'name'=> 'Rigid'
        ]);

        SurfaceType::create([
            'name'=> 'Flexible'
        ]);

        SurfaceType::create([
            'name'=> 'Lapis Pondasi'
        ]);

        SurfaceType::create([
            'name'=> 'Pelebaran'
        ]);
    }
}
