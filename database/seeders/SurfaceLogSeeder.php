<?php

namespace Database\Seeders;

use App\Models\SurfaceLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurfaceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #1. Jalan Lingkar Masjid Agung Jalur Kanan
        SurfaceLog::create([
            'road_id' => 1,
            'start_length' => 0,
            'end_length' => 360,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #2. Jalan Lingkar Masjid Agung Jalur Kiri
        SurfaceLog::create([
            'road_id' => 1,
            'start_length' => 0,
            'end_length' => 360,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #3. Jalan Merdeka Jalur Kanan
        SurfaceLog::create([
            'road_id' => 2,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #4. Jalan Merdeka Jalur Kiri
        SurfaceLog::create([
            'road_id' => 2,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #5. Jalan Kolonel Atmo Jalur Kanan
        SurfaceLog::create([
            'road_id' => 3,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #6. Jalan Kolonel Atmo Jalur Kiri
        SurfaceLog::create([
            'road_id' => 3,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #7. Jalan Brigjen HM Dhanny Effendy Jalur Kanan
        SurfaceLog::create([
            'road_id' => 4,
            'start_length' => 0,
            'end_length' => 1200,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #8. Jalan Brigjen HM Dhanny Effendy Jalur Kiri
        SurfaceLog::create([
            'road_id' => 4,
            'start_length' => 0,
            'end_length' => 1200,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #9. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar Jalur Kanan
        SurfaceLog::create([
            'road_id' => 5,
            'start_length' => 0,
            'end_length' => 1230,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #10. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar Jalur Kiri
        SurfaceLog::create([
            'road_id' => 5,
            'start_length' => 0,
            'end_length' => 1230,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #11. Jalan PSW Subekti Jalur Kanan
        SurfaceLog::create([
            'road_id' => 6,
            'start_length' => 0,
            'end_length' => 400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #12. Jalan PSW Subekti Jalur Kiri
        SurfaceLog::create([
            'road_id' => 6,
            'start_length' => 0,
            'end_length' => 400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #13. Jalan Diponegoro Jalur Kanan
        SurfaceLog::create([
            'road_id' => 7,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #14. Jalan Diponegoro Jalur Kiri
        SurfaceLog::create([
            'road_id' => 7,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #15. Jalan Kapten A Rivai Jalur Kanan
        SurfaceLog::create([
            'road_id' => 8,
            'start_length' => 0,
            'end_length' => 1700,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #16. Jalan Kapten A Rivai Jalur Kiri
        SurfaceLog::create([
            'road_id' => 8,
            'start_length' => 0,
            'end_length' => 1700,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #17. Jalan Walikota H Husni Jalur Kanan
        SurfaceLog::create([
            'road_id' => 9,
            'start_length' => 0,
            'end_length' => 800,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #18. Jalan Walikota H Husni Jalur Kiri
        SurfaceLog::create([
            'road_id' => 9,
            'start_length' => 0,
            'end_length' => 800,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #19. Jalan Jaksa Agung R Soeprapto Jalur Kanan
        SurfaceLog::create([
            'road_id' => 10,
            'start_length' => 0,
            'end_length' => 1140,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #20. Jalan Jaksa Agung R Soeprapto Jalur Kiri
        SurfaceLog::create([
            'road_id' => 10,
            'start_length' => 0,
            'end_length' => 1140,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #21. Jalan M Isa Jalur Kanan
        SurfaceLog::create([
            'road_id' => 11,
            'start_length' => 0,
            'end_length' => 2180,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #22. Jalan M Isa Jalur Kanan
        SurfaceLog::create([
            'road_id' => 11,
            'start_length' => 0,
            'end_length' => 2180,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #23. Jalan Angkatan 45 Jalur Kanan
        SurfaceLog::create([
            'road_id' => 12,
            'start_length' => 0,
            'end_length' => 2000,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #24. Jalan Angkatan 45 Jalur Kiri
        SurfaceLog::create([
            'road_id' => 12,
            'start_length' => 0,
            'end_length' => 2000,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #25. Jalan Sultan Mansyur Jalur Kanan
        SurfaceLog::create([
            'road_id' => 13,
            'start_length' => 0,
            'end_length' => 4216,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #26. Jalan Sultan Mansyur Jalur Kiri
        SurfaceLog::create([
            'road_id' => 13,
            'start_length' => 0,
            'end_length' => 4216,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #27. Jalan Srijaya Negara Jalur Kanan
        SurfaceLog::create([
            'road_id' => 14,
            'start_length' => 0,
            'end_length' => 1690,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #28. Jalan Srijaya Negara Jalur Kiri
        SurfaceLog::create([
            'road_id' => 14,
            'start_length' => 0,
            'end_length' => 1690,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #29. Jalan Akbp Cek Agus Jalur Kanan
        SurfaceLog::create([
            'road_id' => 15,
            'start_length' => 0,
            'end_length' => 1310,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #30. Jalan Akbp Cek Agus Jalur Kiri
        SurfaceLog::create([
            'road_id' => 15,
            'start_length' => 0,
            'end_length' => 1310,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #31. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 0,
            'end_length' => 3945,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #32. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 3945,
            'end_length' => 4129,
            'side' => 'right',
            'surface_subtype_id' => 3,
        ]);

        #33. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4129,
            'end_length' => 4153,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #34. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4153,
            'end_length' => 4160,
            'side' => 'right',
            'surface_subtype_id' => 3,
        ]);

        #35. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4160,
            'end_length' => 4270,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #36. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4270,
            'end_length' => 4300,
            'side' => 'right',
            'surface_subtype_id' => 3,
        ]);

        #37. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4300,
            'end_length' => 5100,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #38. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 0,
            'end_length' => 3945,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #39. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 3945,
            'end_length' => 4129,
            'side' => 'left',
            'surface_subtype_id' => 3,
        ]);

        #40. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4129,
            'end_length' => 4153,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #41. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4153,
            'end_length' => 4160,
            'side' => 'left',
            'surface_subtype_id' => 3,
        ]);

        #42. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4160,
            'end_length' => 4270,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #43. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4270,
            'end_length' => 4300,
            'side' => 'left',
            'surface_subtype_id' => 3,
        ]);

        #44. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 16,
            'start_length' => 4300,
            'end_length' => 5100,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #45. Jalan DI Panjaitan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 17,
            'start_length' => 0,
            'end_length' => 3400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #46. Jalan DI Panjaitan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 17,
            'start_length' => 0,
            'end_length' => 3400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #47. Jalan MP Mangkunegara Jalur Kanan
        SurfaceLog::create([
            'road_id' => 18,
            'start_length' => 0,
            'end_length' => 2580,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #48. Jalan MP Mangkunegara Jalur Kiri
        SurfaceLog::create([
            'road_id' => 18,
            'start_length' => 0,
            'end_length' => 2580,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #49. Jalan Mayor Zen Jalur Kanan
        SurfaceLog::create([
            'road_id' => 19,
            'start_length' => 0,
            'end_length' => 5000,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #50. Jalan Mayor Zen Jalur Kiri
        SurfaceLog::create([
            'road_id' => 19,
            'start_length' => 0,
            'end_length' => 5000,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #51. Jalan Pangeran Ayin – Batas Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 20,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #52. Jalan Pangeran Ayin – Batas Banyuasin Jalur Kiri
        SurfaceLog::create([
            'road_id' => 20,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #53. Jalan Pendidikan – Jalan Lingkar Selatan Jalur Kanan
        SurfaceLog::create([
            'road_id' => 21,
            'start_length' => 0,
            'end_length' => 2400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #54. Jalan Pendidikan – Jalan Lingkar Selatan Jalur Kiri
        SurfaceLog::create([
            'road_id' => 21,
            'start_length' => 0,
            'end_length' => 2400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #55. Jalan Kapt Abdullah – Jalan Robani Kadir Jalur Kanan
        SurfaceLog::create([
            'road_id' => 22,
            'start_length' => 0,
            'end_length' => 5400,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #56. Jalan Kapt Abdullah – Jalan Robani Kadir Jalur Kiri
        SurfaceLog::create([
            'road_id' => 22,
            'start_length' => 0,
            'end_length' => 5400,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #57. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 0,
            'end_length' => 7170,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #58. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 7170,
            'end_length' => 7300,
            'side' => 'right',
            'surface_subtype_id' => 3,
        ]);

        #59. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 7300,
            'end_length' => 12000,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #60. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 0,
            'end_length' => 7170,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #61. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kiri
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 7170,
            'end_length' => 7300,
            'side' => 'left',
            'surface_subtype_id' => 3,
        ]);

        #62. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kiri
        SurfaceLog::create([
            'road_id' => 23,
            'start_length' => 7300,
            'end_length' => 12000,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #63. Jalan Noerdin Pandji Jalur Kanan
        SurfaceLog::create([
            'road_id' => 24,
            'start_length' => 0,
            'end_length' => 5246,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #64. Jalan Noerdin Pandji Jalur Kiri
        SurfaceLog::create([
            'road_id' => 24,
            'start_length' => 0,
            'end_length' => 5246,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #65. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 25,
            'start_length' => 0,
            'end_length' => 7700,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #66. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin Jalur Kiri
        SurfaceLog::create([
            'road_id' => 25,
            'start_length' => 0,
            'end_length' => 7700,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);

        #67. Jalan Adi Sucipto – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 26,
            'start_length' => 0,
            'end_length' => 2230,
            'side' => 'right',
            'surface_subtype_id' => 2,
        ]);

        #68. Jalan Adi Sucipto – Batas Kabupaten Banyuasin Jalur Kanan
        SurfaceLog::create([
            'road_id' => 26,
            'start_length' => 0,
            'end_length' => 2230,
            'side' => 'left',
            'surface_subtype_id' => 2,
        ]);
    }
}
