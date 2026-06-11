<?php

namespace Database\Seeders;

use App\Models\Coordinate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordinate::create([
            'road_id' => 1,
            'latitude' => -2.9874613489553745,
            'longitude' => 104.75954344517757,
        ]);

        Coordinate::create([
            'road_id' => 2,
            'latitude' => -2.9911178813519883,
            'longitude' => 104.7539757950057,
        ]);

        Coordinate::create([
            'road_id' => 3,
            'latitude' => -2.9824718625311686,
            'longitude' => 104.75930035842673,
        ]);

        Coordinate::create([
            'road_id' => 4,
            'latitude' => -2.98245785071034,
            'longitude' => 104.74913036547073,
        ]);

        Coordinate::create([
            'road_id' => 5,
            'latitude' => -2.9849910365395687,
            'longitude' => 104.75524556463311,
        ]);

        Coordinate::create([
            'road_id' => 6,
            'latitude' => -2.986292955431221,
            'longitude' => 104.7505859976901,
        ]);

        Coordinate::create([
            'road_id' => 7,
            'latitude' => -2.9918607661974734,
            'longitude' => 104.74958392227464,
        ]);

        Coordinate::create([
            'road_id' => 8,
            'latitude' => -2.9793487672857615,
            'longitude' => 104.74765504789646,
        ]);

        Coordinate::create([
            'road_id' => 9,
            'latitude' => -3.008448662285921,
            'longitude' => 104.75662786485404,
        ]);

        Coordinate::create([
            'road_id' => 10,
            'latitude' => -2.988344196184255,
            'longitude' => 104.73929251548826,
        ]);

        Coordinate::create([
            'road_id' => 11,
            'latitude' => -2.971413090568618,
            'longitude' => 104.76980926371333,
        ]);

        Coordinate::create([
            'road_id' => 12,
            'latitude' => -2.974031024041956,
            'longitude' => 104.74072825616322,
        ]);

        Coordinate::create([
            'road_id' => 13,
            'latitude' => -3.002520260754449,
            'longitude' => 104.73736928535239,
        ]);

        Coordinate::create([
            'road_id' => 14,
            'latitude' => -2.990126747322587,
            'longitude' => 104.72907698604524,
        ]);

        Coordinate::create([
            'road_id' => 15,
            'latitude' => -2.955692134817143,
            'longitude' => 104.76974631027072,
        ]);

        Coordinate::create([
            'road_id' => 16,
            'latitude' => -3.0213213745373584,
            'longitude' => 104.77449253430892,
        ]);

        Coordinate::create([
            'road_id' => 17,
            'latitude' => -2.9901,
            'longitude' => 104.7561,
        ]);

        Coordinate::create([
            'road_id' => 18,
            'latitude' => -2.9389391398816964,
            'longitude' => 104.76738231325386,
        ]);

        Coordinate::create([
            'road_id' => 19,
            'latitude' => -2.9683601062052443,
            'longitude' => 104.81661589853533,
        ]);

        Coordinate::create([
            'road_id' => 20,
            'latitude' => -2.9002614476927393,
            'longitude' => 104.77783405847342,
        ]);

        Coordinate::create([
            'road_id' => 21,
            'latitude' => -3.0464016538993914,
            'longitude' => 104.79218363905011,
        ]);

        Coordinate::create([
            'road_id' => 22,
            'latitude' => -3.0038044164198032,
            'longitude' => 104.8175922560742,
        ]);

        Coordinate::create([
            'road_id' => 23,
            'latitude' => -3.0125599190083316,
            'longitude' => 104.70630099158363,
        ]);

        Coordinate::create([
            'road_id' => 24,
            'latitude' => -2.942315193815803,
            'longitude' => 104.71859042848406,
        ]);

        Coordinate::create([
            'road_id' => 25,
            'latitude' => -2.954308596868101,
            'longitude' => 104.83907542394141,
        ]);

        Coordinate::create([
            'road_id' => 26,
            'latitude' => -2.910802502436511,
            'longitude' => 104.70135383547066,
        ]);
    }
}
