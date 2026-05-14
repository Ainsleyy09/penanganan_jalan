<?php

namespace Database\Seeders;

use App\Models\SurfaceSubtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurfaceSubtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #ID 1
        SurfaceSubtype::create([
            'surface_type_id' => 1,
            'name' => 'Beton'
        ]);

        #ID 2
        SurfaceSubtype::create([
            'surface_type_id' => 2,
            'name' => 'AC-WC'
        ]);

        #ID 3
        SurfaceSubtype::create([
            'surface_type_id' => 2,
            'name' => 'AC-BC'
        ]);

        #ID 4
        SurfaceSubtype::create([
            'surface_type_id' => 2,
            'name' => 'AC-BASE'
        ]);

        #ID 5
        SurfaceSubtype::create([
            'surface_type_id' => 3,
            'name' => 'Aggregat A & B'
        ]);

        #ID 6
        SurfaceSubtype::create([
            'surface_type_id' => 3,
            'name' => 'Timbunan'
        ]);

        #ID 7
        SurfaceSubtype::create([
            'surface_type_id' => 4,
            'name' => 'Rigid Flexible'
        ]);
    }
}
