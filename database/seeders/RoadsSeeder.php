<?php

namespace Database\Seeders;

use App\Models\Road;
use App\Models\Roads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoadsSeeder extends Seeder
{
    public function run(): void
    {
        #ID 1
        Road::create([
            'road_code'   => '11K',
            'name'        => 'Jalan Lingkar Masjid Agung',
            'road_length' => 360
        ]);

        #ID 2
        Road::create([
            'road_code'   => '12K',
            'name'        => 'Jalan Merdeka',
            'road_length' => 1400
        ]);

        #ID 3
        Road::create([
            'road_code'   => '13K',
            'name'        => 'Jalan Kolonel Atmo',
            'road_length' => 1000
        ]);

        #ID 4
        Road::create([
            'road_code'   => '14K',
            'name'        => 'Jalan Brigjen HM Dhanny Effendy',
            'road_length' => 1200
        ]);

        #ID 5
        Road::create([
            'road_code'   => '15K',
            'name'        => 'Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar',
            'road_length' => 1230
        ]);

        #ID 6
        Road::create([
            'road_code'   => '16K',
            'name'        => 'Jalan Psw Subekti',
            'road_length' => 400
        ]);

        #ID 7
        Road::create([
            'road_code'   => '17K',
            'name'        => 'Jalan Diponegoro',
            'road_length' => 1000
        ]);

        #ID 8
        Road::create([
            'road_code'   => '18K',
            'name'        => 'Jalan Kapten A Rivai',
            'road_length' => 1700
        ]);

        #ID 9
        Road::create([
            'road_code'   => '19K',
            'name'        => 'Jalan Walikota H Husni',
            'road_length' => 800
        ]);

        #ID 10
        Road::create([
            'road_code'   => '110K',
            'name'        => 'Jalan Jaksa Agung R Soeprapto',
            'road_length' => 1140
        ]);

        #ID 11
        Road::create([
            'road_code'   => '111K',
            'name'        => 'Jalan M Isa',
            'road_length' => 2180
        ]);

        #ID 12
        Road::create([
            'road_code'   => '112K',
            'name'        => 'Jalan Angkatan 45',
            'road_length' => 2000
        ]);

        #ID 13
        Road::create([
            'road_code'   => '113K',
            'name'        => 'Jalan Sultan M Mansyur',
            'road_length' => 4220
        ]);

        #ID 14
        Road::create([
            'road_code'   => '114K',
            'name'        => 'Jalan Srijaya Negara',
            'road_length' => 1690
        ]);

        #ID 15
        Road::create([
            'road_code'   => '115K',
            'name'        => 'Jalan AKBP Cek Agus',
            'road_length' => 1310
        ]);

        #ID 16
        Road::create([
            'road_code'   => '116K',
            'name'        => 'Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan',
            'road_length' => 5100
        ]);

        #ID 17
        Road::create([
            'road_code'   => '117K',
            'name'        => 'Jalan DI Panjaitan',
            'road_length' => 3400
        ]);

        #ID 18
        Road::create([
            'road_code'   => '118K',
            'name'        => 'Jalan MP Mangkunegara',
            'road_length' => 2580
        ]);

        #ID 19
        Road::create([
            'road_code'   => '119K',
            'name'        => 'Jalan Mayor Zen',
            'road_length' => 5000
        ]);

        #ID 20
        Road::create([
            'road_code'   => '120K',
            'name'        => 'Jalan Pangeran Ayin – Batas Banyuasin',
            'road_length' => 1400
        ]);

        #ID 21
        Road::create([
            'road_code'   => '121K',
            'name'        => 'Jalan Pendidikan – Jalan Lingkar Selatan',
            'road_length' => 2400
        ]);

        #ID 22
        Road::create([
            'road_code'   => '122K',
            'name'        => 'Jalan Kapt Abdullah – Jalan Robani Kadir',
            'road_length' => 5400
        ]);

        #ID 23
        Road::create([
            'road_code'   => '123K',
            'name'        => 'Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin',
            'road_length' => 12000
        ]);

        #ID 24
        Road::create([
            'road_code'   => '124K',
            'name'        => 'Jalan Noerdin Pandji',
            'road_length' => 5250
        ]);

        #ID 25
        Road::create([
            'road_code'   => '125K',
            'name'        => 'Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin',
            'road_length' => 7700
        ]);

        #ID 26
        Road::create([
            'road_code'   => '126K',
            'name'        => 'Jalan Adi Sucipto – Batas Kabupaten Banyuasin',
            'road_length' => 2230
        ]);
    }
}
