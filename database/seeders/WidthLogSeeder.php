<?php

namespace Database\Seeders;

use App\Models\WidthLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WidthLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #1. Jalan Lingkar Masjid Agung Jalur Kanan
        WidthLog::create([
            'road_id' => 1,
            'start_length' => 0,
            'end_length' => 360,
            'side' => 'right',
            'width' => 16,
        ]);

        #2. Jalan Lingkar Masjid Agung Jalur Kiri
        WidthLog::create([
            'road_id' => 1,
            'start_length' => 0,
            'end_length' => 360,
            'side' => 'left',
            'width' => 16,
        ]);

        #3. Jalan Merdeka Jalur Kanan
        WidthLog::create([
            'road_id' => 2,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'right',
            'width' => 13,
        ]);

        #4. Jalan Merdeka Jalur Kiri
        WidthLog::create([
            'road_id' => 2,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'left',
            'width' => 13,
        ]);

        #5. Jalan Kolonel Atmo Jalur Kanan
        WidthLog::create([
            'road_id' => 3,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'right',
            'width' => 12.8,
        ]);

        #6. Jalan Kolonel Atmo Jalur Kiri
        WidthLog::create([
            'road_id' => 3,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'left',
            'width' => 12.8,
        ]);

        #7. Jalan Brigjen HM Dhanny Effendy Jalur Kanan
        WidthLog::create([
            'road_id' => 4,
            'start_length' => 0,
            'end_length' => 1200,
            'side' => 'right',
            'width' => 9,
        ]);

        #8. Jalan Brigjen HM Dhanny Effendy Jalur Kiri
        WidthLog::create([
            'road_id' => 4,
            'start_length' => 0,
            'end_length' => 1200,
            'side' => 'left',
            'width' => 9,
        ]);

        #9. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar Jalur Kanan
        WidthLog::create([
            'road_id' => 5,
            'start_length' => 0,
            'end_length' => 1230,
            'side' => 'right',
            'width' => 14,
        ]);

        #10. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar Jalur Kiri
        WidthLog::create([
            'road_id' => 5,
            'start_length' => 0,
            'end_length' => 1230,
            'side' => 'left',
            'width' => 14,
        ]);

        #11. Jalan Psw Subekti Jalur Kanan
        WidthLog::create([
            'road_id' => 6,
            'start_length' => 0,
            'end_length' => 400,
            'side' => 'right',
            'width' => 18,
        ]);

        #12. Jalan Psw Subekti Jalur Kiri
        WidthLog::create([
            'road_id' => 6,
            'start_length' => 0,
            'end_length' => 400,
            'side' => 'left',
            'width' => 18,
        ]);

        #13. Jalan Diponegoro Jalur Kanan
        WidthLog::create([
            'road_id' => 7,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'right',
            'width' => 8.5,
        ]);

        #14. Jalan Diponegoro Jalur Kiri
        WidthLog::create([
            'road_id' => 7,
            'start_length' => 0,
            'end_length' => 1000,
            'side' => 'left',
            'width' => 8.5,
        ]);

        #15. Jalan Kapten A Rivai Jalur Kanan
        WidthLog::create([
            'road_id' => 8,
            'start_length' => 0,
            'end_length' => 17001,
            'side' => 'right',
            'width' => 8.5,
        ]);

        #16. Jalan Kapten A Rivai Jalur Kiri
        WidthLog::create([
            'road_id' => 8,
            'start_length' => 0,
            'end_length' => 17001,
            'side' => 'left',
            'width' => 8.5,
        ]);

        #17. Jalan Walikota H Husni Jalur Kanan
        WidthLog::create([
            'road_id' => 9,
            'start_length' => 0,
            'end_length' => 800,
            'side' => 'right',
            'width' => 14,
        ]);

        #18. Jalan Walikota H Husni Jalur Kiri
        WidthLog::create([
            'road_id' => 9,
            'start_length' => 0,
            'end_length' => 800,
            'side' => 'left',
            'width' => 14,
        ]);

        #19. Jalan Jaksa Agung R Soeprapto Jalur Kanan
        WidthLog::create([
            'road_id' => 10,
            'start_length' => 0,
            'end_length' => 1140,
            'side' => 'right',
            'width' => 9,
        ]);

        #20. Jalan Jaksa Agung R Soeprapto Jalur Kiri
        WidthLog::create([
            'road_id' => 10,
            'start_length' => 0,
            'end_length' => 1140,
            'side' => 'left',
            'width' => 9,
        ]);

        #21. Jalan M Isa Jalur Kanan
        WidthLog::create([
            'road_id' => 11,
            'start_length' => 0,
            'end_length' => 2180,
            'side' => 'right',
            'width' => 8.7,
        ]);

        #22. Jalan M Isa Jalur Kiri
        WidthLog::create([
            'road_id' => 11,
            'start_length' => 0,
            'end_length' => 2180,
            'side' => 'left',
            'width' => 8.7,
        ]);

        #23. Jalan Angkatan 45 Jalur Kanan
        WidthLog::create([
            'road_id' => 12,
            'start_length' => 0,
            'end_length' => 2000,
            'side' => 'right',
            'width' => 12.8,
        ]);

        #24. Jalan Angkatan 45 Jalur Kiri
        WidthLog::create([
            'road_id' => 12,
            'start_length' => 0,
            'end_length' => 2000,
            'side' => 'left',
            'width' => 12.8,
        ]);

        #25. Jalan Sultan M Mansyur Jalur Kanan
        WidthLog::create([
            'road_id' => 13,
            'start_length' => 0,
            'end_length' => 4216,
            'side' => 'right',
            'width' => 7,
        ]);

        #26. Jalan Sultan M Mansyur Jalur Kiri
        WidthLog::create([
            'road_id' => 13,
            'start_length' => 0,
            'end_length' => 4216,
            'side' => 'left',
            'width' => 7,
        ]);

        #27. Jalan Srijaya Negara Jalur Kanan
        WidthLog::create([
            'road_id' => 14,
            'start_length' => 0,
            'end_length' => 1690,
            'side' => 'right',
            'width' => 9,
        ]);

        #28. Jalan Srijaya Negara Jalur Kiri
        WidthLog::create([
            'road_id' => 14,
            'start_length' => 0,
            'end_length' => 1690,
            'side' => 'left',
            'width' => 9,
        ]);

        #29. Jalan Akbp Cek Agus Jalur Kanan
        WidthLog::create([
            'road_id' => 15,
            'start_length' => 0,
            'end_length' => 1310,
            'side' => 'right',
            'width' => 8.7,
        ]);

        #30. Jalan Akbp Cek Agus Jalur Kiri
        WidthLog::create([
            'road_id' => 15,
            'start_length' => 0,
            'end_length' => 1310,
            'side' => 'right',
            'width' => 8.7,
        ]);

        #31. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kanan
        WidthLog::create([
            'road_id' => 16,
            'start_length' => 0,
            'end_length' => 5100,
            'side' => 'right',
            'width' => 9.37,
        ]);

        #32. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan Jalur Kiri
        WidthLog::create([
            'road_id' => 16,
            'start_length' => 0,
            'end_length' => 5100,
            'side' => 'left',
            'width' => 9.37,
        ]);

        #33. Jalan DI Panjaitan Jalur Kanan
        WidthLog::create([
            'road_id' => 17,
            'start_length' => 0,
            'end_length' => 3400,
            'side' => 'right',
            'width' => 13,
        ]);

        #34. Jalan DI Panjaitan Jalur Kiri
        WidthLog::create([
            'road_id' => 17,
            'start_length' => 0,
            'end_length' => 3400,
            'side' => 'left',
            'width' => 13,
        ]);

        #35. Jalan MP Mangkunegara Jalur Kanan
        WidthLog::create([
            'road_id' => 18,
            'start_length' => 0,
            'end_length' => 2580,
            'side' => 'right',
            'width' => 13,
        ]);

        #36. Jalan MP Mangkunegara Jalur Kiri
        WidthLog::create([
            'road_id' => 18,
            'start_length' => 0,
            'end_length' => 2580,
            'side' => 'left',
            'width' => 13,
        ]);

        #37. Jalan Mayor Zen Jalur Kanan
        WidthLog::create([
            'road_id' => 19,
            'start_length' => 0,
            'end_length' => 5000,
            'side' => 'right',
            'width' => 8.66,
        ]);

        #38. Jalan Mayor Zen Jalur Kiri
        WidthLog::create([
            'road_id' => 19,
            'start_length' => 0,
            'end_length' => 5000,
            'side' => 'left',
            'width' => 8.66,
        ]);

        #39. Jalan Pangeran Ayin – Batas Banyuasin Jalur Kanan
        WidthLog::create([
            'road_id' => 20,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'right',
            'width' => 8.1,
        ]);

        #40. Jalan Pangeran Ayin – Batas Banyuasin Jalur Kiri
        WidthLog::create([
            'road_id' => 20,
            'start_length' => 0,
            'end_length' => 1400,
            'side' => 'left',
            'width' => 8.1,
        ]);

        #41. Jalan Pendidikan – Jalan Lingkar Selatan Jalur Kanan
        WidthLog::create([
            'road_id' => 21,
            'start_length' => 0,
            'end_length' => 2400,
            'side' => 'right',
            'width' => 5.62,
        ]);

        #42. Jalan Pendidikan – Jalan Lingkar Selatan Jalur Kiri
        WidthLog::create([
            'road_id' => 21,
            'start_length' => 0,
            'end_length' => 2400,
            'side' => 'left',
            'width' => 5.62,
        ]);

        #43. Jalan Kapt Abdullah – Jalan Robani Kadir Jalur Kanan
        WidthLog::create([
            'road_id' => 22,
            'start_length' => 0,
            'end_length' => 5400,
            'side' => 'right',
            'width' => 6.56,
        ]);

        #44. Jalan Kapt Abdullah – Jalan Robani Kadir Jalur Kanan
        WidthLog::create([
            'road_id' => 22,
            'start_length' => 0,
            'end_length' => 5400,
            'side' => 'left',
            'width' => 6.56,
        ]);

        #45. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kanan
        WidthLog::create([
            'road_id' => 23,
            'start_length' => 0,
            'end_length' => 12000,
            'side' => 'right',
            'width' => 5.49,
        ]);

        #46. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin Jalur Kiri
        WidthLog::create([
            'road_id' => 23,
            'start_length' => 0,
            'end_length' => 12000,
            'side' => 'left',
            'width' => 5.49,
        ]);

        #47. Jalan Noerdin Pandji Jalur Kanan
        WidthLog::create([
            'road_id' => 24,
            'start_length' => 0,
            'end_length' => 5246,
            'side' => 'right',
            'width' => 14,
        ]);

        #48. Jalan Noerdin Pandji Jalur Kiri
        WidthLog::create([
            'road_id' => 24,
            'start_length' => 0,
            'end_length' => 5246,
            'side' => 'left',
            'width' => 14,
        ]);

        #49. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin Jalur Kanan
        WidthLog::create([
            'road_id' => 25,
            'start_length' => 0,
            'end_length' => 7700,
            'side' => 'right',
            'width' => 5.31,
        ]);

        #50. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin Jalur Kiri
        WidthLog::create([
            'road_id' => 25,
            'start_length' => 0,
            'end_length' => 7700,
            'side' => 'left',
            'width' => 5.31,
        ]);

        #51. Jalan Adi Sucipto – Batas Kabupaten Banyuasin Jalur Kanan
        WidthLog::create([
            'road_id' => 26,
            'start_length' => 0,
            'end_length' => 2230,
            'side' => 'right',
            'width' => 7,
        ]);

        #52. Jalan Adi Sucipto – Batas Kabupaten Banyuasin Jalur Kiri
        WidthLog::create([
            'road_id' => 26,
            'start_length' => 0,
            'end_length' => 2230,
            'side' => 'left',
            'width' => 7,
        ]);



    }
}
