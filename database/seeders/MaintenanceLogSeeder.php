<?php

namespace Database\Seeders;

use App\Models\MaintenanceLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #1. Jalan Lingkar Masjid Agung - 2023
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '6',
        ]);

        #2. Jalan Lingkar Masjid Agung - 2023
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '6',
        ]);

        #3. Jalan Lingkar Masjid Agung - 2024
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '5',
        ]);

        #4. Jalan Lingkar Masjid Agung - 2024
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '5',
        ]);

        #5. Jalan Lingkar Masjid Agung - 2025
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '6',
        ]);

        #6. Jalan Lingkar Masjid Agung - 2025
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '6',
        ]);

        #7. Jalan Lingkar Masjid Agung - 2026
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '5',
        ]);

        #8. Jalan Lingkar Masjid Agung - 2026
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenancetype_id' => '5',
        ]);

        #9. Jalan Merdeka - 2023
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #10. Jalan Merdeka - 2023
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #11. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 235.6,
            'maintenancetype_id' => '6',
        ]);

        #12. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 235.6,
            'end_length' => 361,
            'maintenancetype_id' => '5',
        ]);

        #13. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 361,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #14. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 164,
            'maintenancetype_id' => '6',
        ]);

        #15. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 164,
            'end_length' => 378.5,
            'maintenancetype_id' => '5',
        ]);

        #16. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 378.5,
            'end_length' => 626,
            'maintenancetype_id' => '6',
        ]);

        #17. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 626,
            'end_length' => 711.8,
            'maintenancetype_id' => '5',
        ]);

        #18. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 711.8,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #19. Jalan Merdeka - 2025
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #20. Jalan Merdeka - 2025
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        #21. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 164,
            'maintenancetype_id' => '5',
        ]);

        #22. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 164,
            'end_length' => 1254,
            'maintenancetype_id' => '6',
        ]);

        #23. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1254,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        #24. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 164,
            'maintenancetype_id' => '5',
        ]);

        #25. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 164,
            'end_length' => 1254,
            'maintenancetype_id' => '6',
        ]);

        #26. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1254,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        #27. Jalan Kolonel Atmo - 2023
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #28. Jalan Kolonel Atmo - 2023
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #29. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 96,
            'maintenancetype_id' => '6',
        ]);

        #30. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 96,
            'end_length' => 165,
            'maintenancetype_id' => '5',
        ]);

        #31. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 165,
            'end_length' => 437.1,
            'maintenancetype_id' => '6',
        ]);

        #32. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 437.1,
            'end_length' => 512.49,
            'maintenancetype_id' => '5',
        ]);

        #33. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 512.49,
            'end_length' => 584,
            'maintenancetype_id' => '6',
        ]);

        #34. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 584,
            'end_length' => 1000,
            'maintenancetype_id' => '5',
        ]);

        #35. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 35,
            'maintenancetype_id' => '6',
        ]);

        #36. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 35,
            'end_length' => 150,
            'maintenancetype_id' => '5',
        ]);

        #37. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 150,
            'end_length' => 584,
            'maintenancetype_id' => '6',
        ]);

        #38. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 584,
            'end_length' => 1000,
            'maintenancetype_id' => '5',
        ]);

        #39. Jalan Kolonel Atmo - 2025
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #40. Jalan Kolonel Atmo - 2025
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #41. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 35,
            'maintenancetype_id' => '5',
        ]);

        #42. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 35,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #43. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 35,
            'maintenancetype_id' => '5',
        ]);

        #44. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 35,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #45. Jalan Brigjen HM Dhanny Effendy - 2023
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #46. Jalan Brigjen HM Dhanny Effendy - 2023
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #47. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 676,
            'maintenancetype_id' => '6',
        ]);

        #48. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 676,
            'end_length' => 1200,
            'maintenancetype_id' => '5',
        ]);

        #49. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 676,
            'maintenancetype_id' => '6',
        ]);

        #50. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 676,
            'end_length' => 1200,
            'maintenancetype_id' => '5',
        ]);

        #51. Jalan Brigjen HM Dhanny Effendy - 2025
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #52. Jalan Brigjen HM Dhanny Effendy - 2025
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #53. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 602,
            'maintenancetype_id' => '6',
        ]);

        #54. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 602,
            'end_length' => 802,
            'maintenancetype_id' => '5',
        ]);

        #55. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 802,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #56. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 602,
            'maintenancetype_id' => '6',
        ]);

        #57. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 602,
            'end_length' => 802,
            'maintenancetype_id' => '5',
        ]);

        #58. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 802,
            'end_length' => 1200,
            'maintenancetype_id' => '6',
        ]);

        #59. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2023
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #60. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2023
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #61. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 211,
            'maintenancetype_id' => '5',
        ]);

        #62. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 211,
            'end_length' => 470,
            'maintenancetype_id' => '6',
        ]);

        #63. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 470,
            'end_length' => 744,
            'maintenancetype_id' => '5',
        ]);

        #64. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 744,
            'end_length' => 878,
            'maintenancetype_id' => '6',
        ]);

        #65. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 878,
            'end_length' => 1230,
            'maintenancetype_id' => '5',
        ]);

        #66. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 211,
            'maintenancetype_id' => '5',
        ]);

        #67. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 211,
            'end_length' => 470,
            'maintenancetype_id' => '6',
        ]);

        #68. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 470,
            'end_length' => 744,
            'maintenancetype_id' => '5',
        ]);

        #69. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 744,
            'end_length' => 878,
            'maintenancetype_id' => '6',
        ]);

        #70. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 878,
            'end_length' => 1230,
            'maintenancetype_id' => '5',
        ]);

        #71. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2025
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #72. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2025
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #73. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2026
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #74. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2026
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenancetype_id' => '6',
        ]);

        #75. Jalan PSW Subekti - 2023
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #76. Jalan PSW Subekti - 2023
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #77. Jalan PSW Subekti - 2024
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #78. Jalan PSW Subekti - 2024
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #79. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 320,
            'maintenancetype_id' => '5',
        ]);

        #80. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 320,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #81. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 320,
            'maintenancetype_id' => '5',
        ]);

        #82. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 320,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #83. Jalan PSW Subekti - 2026
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #84. Jalan PSW Subekti - 2026
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenancetype_id' => '6',
        ]);

        #85. Jalan Diponegoro - 2023
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #86. Jalan Diponegoro - 2023
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #87. Jalan Diponegoro - 2024
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #88. Jalan Diponegoro - 2024
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #89. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 226,
            'maintenancetype_id' => '5',
        ]);

        #90. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 226,
            'end_length' => 251,
            'maintenancetype_id' => '6',
        ]);

        #91. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 251,
            'end_length' => 729,
            'maintenancetype_id' => '5',
        ]);

        #92. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 729,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #93. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 226,
            'maintenancetype_id' => '5',
        ]);

        #94. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 226,
            'end_length' => 251,
            'maintenancetype_id' => '6',
        ]);

        #95. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 251,
            'end_length' => 729,
            'maintenancetype_id' => '5',
        ]);

        #96. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 729,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        #97. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 720,
            'maintenancetype_id' => '6',
        ]);

        #98. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 720,
            'end_length' => 1000,
            'maintenancetype_id' => '5',
        ]);

        #99. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 720,
            'maintenancetype_id' => '6',
        ]);

        # 100. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 720,
            'end_length' => 1000,
            'maintenancetype_id' => '5',
        ]);

        # 101. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1544,
            'maintenancetype_id' => '6',
        ]);

        # 102. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1544,
            'end_length' => 1700,
            'maintenancetype_id' => '5',
        ]);

        # 103. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 220,
            'maintenancetype_id' => '6',
        ]);

        # 104. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 220,
            'end_length' => 432,
            'maintenancetype_id' => '5',
        ]);

        # 105 Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 432,
            'end_length' => 557,
            'maintenancetype_id' => '6',
        ]);

        # 106. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 557,
            'end_length' => 841,
            'maintenancetype_id' => '5',
        ]);

        # 107. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 841,
            'end_length' => 969,
            'maintenancetype_id' => '6',
        ]);

        # 108. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 969,
            'end_length' => 1070,
            'maintenancetype_id' => '5',
        ]);

        # 109. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1070,
            'end_length' => 1084,
            'maintenancetype_id' => '6',
        ]);

        # 110. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1084,
            'end_length' => 1700,
            'maintenancetype_id' => '5',
        ]);

        # 111. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 212,
            'maintenancetype_id' => '6',
        ]);

        # 112. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 212,
            'end_length' => 344,
            'maintenancetype_id' => '5',
        ]);

        # 113. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 344,
            'end_length' => 590,
            'maintenancetype_id' => '6',
        ]);

        # 114. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 590,
            'end_length' => 903,
            'maintenancetype_id' => '5',
        ]);

        # 115. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 903,
            'end_length' => 1040.4,
            'maintenancetype_id' => '6',
        ]);

        # 116. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1040.4,
            'end_length' => 1091,
            'maintenancetype_id' => '5',
        ]);

        # 117. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1091,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 118. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 445.6,
            'maintenancetype_id' => '6',
        ]);

        # 119. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 445.6,
            'end_length' => 570,
            'maintenancetype_id' => '5',
        ]);

        # 120. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 570,
            'end_length' => 883,
            'maintenancetype_id' => '6',
        ]);

        # 121. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 883,
            'end_length' => 921,
            'maintenancetype_id' => '5',
        ]);

        # 122. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 921,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 123. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 244,
            'maintenancetype_id' => '5',
        ]);

        # 124. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 244,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 125. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 385,
            'maintenancetype_id' => '5',
        ]);

        # 126. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 385,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 127. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 900,
            'maintenancetype_id' => '6',
        ]);

        # 128. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 900,
            'end_length' => 1171,
            'maintenancetype_id' => '5',
        ]);

        # 129. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1171,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 130. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 900,
            'maintenancetype_id' => '6',
        ]);

        # 131. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 900,
            'end_length' => 1171,
            'maintenancetype_id' => '5',
        ]);

        # 132. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1171,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 133. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 679,
            'maintenancetype_id' => '5',
        ]);

        # 134. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 679,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 135. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 679,
            'maintenancetype_id' => '5',
        ]);

        # 136. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 679,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 137. Jalan Walikota H Husni - 2024
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 138. Jalan Walikota H Husni - 2024
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 139. Jalan Walikota H Husni - 2025
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 140. Jalan Walikota H Husni - 2025
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 141. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 142. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenancetype_id' => '6',
        ]);

        # 143. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 396.2,
            'end_length' => 588,
            'maintenancetype_id' => '7',
        ]);

        # 144. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 487.3,
            'end_length' => 540,
            'maintenancetype_id' => '7',
        ]);

        # 145. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 630,
            'maintenancetype_id' => '8',
        ]);

        # 146. Jalan Jaksa Agung R Soeprapto - 2023
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 147. Jalan Jaksa Agung R Soeprapto - 2023
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 148. Jalan Jaksa Agung R Soeprapto - 2024
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 149. Jalan Jaksa Agung R Soeprapto - 2024
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 150. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1052,
            'maintenancetype_id' => '5',
        ]);

        # 151. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1052,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 152. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1052,
            'maintenancetype_id' => '5',
        ]);

        # 153. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1052,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 154. Jalan Jaksa Agung R Soeprapto - 2026
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 155. Jalan Jaksa Agung R Soeprapto - 2026
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenancetype_id' => '6',
        ]);

        # 156. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 16.68,
            'maintenancetype_id' => '5',
        ]);

        # 157. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 16.68,
            'end_length' => 625,
            'maintenancetype_id' => '6',
        ]);

        # 158. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 625,
            'end_length' => 757,
            'maintenancetype_id' => '5',
        ]);

        # 159. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 757,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 160. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 16.68,
            'maintenancetype_id' => '5',
        ]);

        # 161. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 16.68,
            'end_length' => 625,
            'maintenancetype_id' => '6',
        ]);

        # 162. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 625,
            'end_length' => 757,
            'maintenancetype_id' => '5',
        ]);

        # 163. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 757,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 164. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 58,
            'maintenancetype_id' => '6',
        ]);

        # 165. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 58,
            'end_length' => 600,
            'maintenancetype_id' => '5',
        ]);

        # 166. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 600,
            'end_length' => 741,
            'maintenancetype_id' => '6',
        ]);

        # 167. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 741,
            'end_length' => 951,
            'maintenancetype_id' => '5',
        ]);

        # 168. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 951,
            'end_length' => 1242,
            'maintenancetype_id' => '6',
        ]);

        # 169. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1242,
            'end_length' => 1326,
            'maintenancetype_id' => '5',
        ]);

        # 170. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1326,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 171. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 58,
            'maintenancetype_id' => '6',
        ]);

        # 172. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 58,
            'end_length' => 600,
            'maintenancetype_id' => '5',
        ]);

        # 173. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 600,
            'end_length' => 741,
            'maintenancetype_id' => '6',
        ]);

        # 174. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 741,
            'end_length' => 951,
            'maintenancetype_id' => '5',
        ]);

        # 175. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 951,
            'end_length' => 1242,
            'maintenancetype_id' => '6',
        ]);

        # 176. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1242,
            'end_length' => 1326,
            'maintenancetype_id' => '5',
        ]);

        # 177. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1326,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 178. Jalan M Isa - 2025
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 179. Jalan M Isa - 2025
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 180. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 951,
            'maintenancetype_id' => '6',
        ]);

        # 181. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 951,
            'end_length' => 1151,
            'maintenancetype_id' => '5',
        ]);

        # 182. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1151,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 183. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 951,
            'maintenancetype_id' => '6',
        ]);

        # 184. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 951,
            'end_length' => 1151,
            'maintenancetype_id' => '5',
        ]);

        # 185. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1151,
            'end_length' => 2180,
            'maintenancetype_id' => '6',
        ]);

        # 186. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 950,
            'maintenancetype_id' => '6',
        ]);

        # 187. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 950,
            'end_length' => 1630,
            'maintenancetype_id' => '5',
        ]);

        # 188. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 189. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 50,
            'maintenancetype_id' => '6',
        ]);

        # 190. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 50,
            'end_length' => 856,
            'maintenancetype_id' => '5',
        ]);

        # 191. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 856,
            'end_length' => 1138,
            'maintenancetype_id' => '6',
        ]);

        # 192. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1138,
            'end_length' => 1513,
            'maintenancetype_id' => '5',
        ]);

        # 193. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1513,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 194. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 570,
            'maintenancetype_id' => '6',
        ]);

        # 195. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 570,
            'end_length' => 629,
            'maintenancetype_id' => '5',
        ]);

        # 196. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 629,
            'end_length' => 709,
            'maintenancetype_id' => '6',
        ]);

        # 197. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 709,
            'end_length' => 992,
            'maintenancetype_id' => '5',
        ]);

        # 198. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 992,
            'end_length' => 1630,
            'maintenancetype_id' => '6',
        ]);

        # 199. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 1903,
            'maintenancetype_id' => '5',
        ]);

        # 200. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 659,
            'maintenancetype_id' => '6',
        ]);

        # 201. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 659,
            'end_length' => 1700,
            'maintenancetype_id' => '5',
        ]);

        # 202. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1887,
            'maintenancetype_id' => '6',
        ]);

        # 203. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1887,
            'end_length' => 1986,
            'maintenancetype_id' => '5',
        ]);

        # 204. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1986,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 205. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 122.5,
            'maintenancetype_id' => '5',
        ]);

        # 206. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 122.5,
            'end_length' => 1407,
            'maintenancetype_id' => '6',
        ]);

        # 207. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1407,
            'end_length' => 1505,
            'maintenancetype_id' => '5',
        ]);

        # 208. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1505,
            'end_length' => 1569,
            'maintenancetype_id' => '6',
        ]);

        # 209. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1569,
            'end_length' => 1574.7,
            'maintenancetype_id' => '5',
        ]);

        # 210. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1574.7,
            'end_length' => 1593,
            'maintenancetype_id' => '6',
        ]);

        # 211. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1593,
            'end_length' => 1630,
            'maintenancetype_id' => '5',
        ]);

        # 212. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 1903,
            'maintenancetype_id' => '6',
        ]);

        # 213. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1903,
            'end_length' => 1965,
            'maintenancetype_id' => '5',
        ]);

        # 214. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1965,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 215. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 392,
            'maintenancetype_id' => '6',
        ]);

        # 216. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 392,
            'end_length' => 550,
            'maintenancetype_id' => '5',
        ]);

        # 217. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 550,
            'end_length' => 862,
            'maintenancetype_id' => '6',
        ]);

        # 218. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 862,
            'end_length' => 989,
            'maintenancetype_id' => '5',
        ]);

        # 219. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 989,
            'end_length' => 1615,
            'maintenancetype_id' => '6',
        ]);

        # 220. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1615,
            'end_length' => 1659,
            'maintenancetype_id' => '5',
        ]);

        # 221. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1659,
            'end_length' => 1700,
            'maintenancetype_id' => '6',
        ]);

        # 222. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1798,
            'maintenancetype_id' => '5',
        ]);

        # 223. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1798,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 224. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 250,
            'maintenancetype_id' => '5',
        ]);

        # 225. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 250,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 226. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 250,
            'maintenancetype_id' => '5',
        ]);

        # 227. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 250,
            'end_length' => 2000,
            'maintenancetype_id' => '6',
        ]);

        # 228. Jalan Sultan M Mansyur - 2023
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 229. Jalan Sultan M Mansyur - 2023
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 230. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 60,
            'maintenancetype_id' => '5',
        ]);

        # 231. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 60,
            'end_length' => 1500,
            'maintenancetype_id' => '6',
        ]);

        # 232. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1500,
            'end_length' => 2000,
            'maintenancetype_id' => '5',
        ]);

        # 233. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2000,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 234. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 60,
            'maintenancetype_id' => '5',
        ]);

        # 235. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 60,
            'end_length' => 1500,
            'maintenancetype_id' => '6',
        ]);

        # 236. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1500,
            'end_length' => 2000,
            'maintenancetype_id' => '5',
        ]);

        # 237. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2000,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 238. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 126,
            'maintenancetype_id' => '7',
        ]);

        # 239. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 182,
            'end_length' => 205,
            'maintenancetype_id' => '7',
        ]);

        # 240. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 583,
            'maintenancetype_id' => '5',
        ]);

        # 241. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 583,
            'end_length' => 1902,
            'maintenancetype_id' => '6',
        ]);

        # 242. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1902,
            'end_length' => 2500,
            'maintenancetype_id' => '5',
        ]);

        # 243. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2500,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 244. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 583,
            'maintenancetype_id' => '5',
        ]);

        # 245. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 583,
            'end_length' => 1902,
            'maintenancetype_id' => '6',
        ]);

        # 246. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1902,
            'end_length' => 2500,
            'maintenancetype_id' => '5',
        ]);

        # 247. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2500,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 248. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2500,
            'maintenancetype_id' => '6',
        ]);

        # 249. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2500,
            'end_length' => 2750,
            'maintenancetype_id' => '5',
        ]);

        # 250. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2750,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 251. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2500,
            'maintenancetype_id' => '6',
        ]);

        # 252. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2500,
            'end_length' => 2750,
            'maintenancetype_id' => '5',
        ]);

        # 253. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2750,
            'end_length' => 4220,
            'maintenancetype_id' => '6',
        ]);

        # 254. Jalan Srijaya Negara - 2023
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 255. Jalan Srijaya Negara - 2023
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 256. Jalan Srijaya Negara - 2024
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 257. Jalan Srijaya Negara - 2024
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 258. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 259. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1279,
            'end_length' => 1279,
            'maintenancetype_id' => '7',
        ]);

        # 259. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1279,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 260. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 261. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1279,
            'end_length' => 1279,
            'maintenancetype_id' => '7',
        ]);

        # 261. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1279,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 262. Jalan Srijaya Negara - 2026
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 263. Jalan Srijaya Negara - 2026
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenancetype_id' => '6',
        ]);

        # 264. Jalan AKBP Cek Agus - 2023
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 265. Jalan AKBP Cek Agus - 2023
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 266. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 375,
            'maintenancetype_id' => '5',
        ]);

        # 267. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 375,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 268. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 375,
            'maintenancetype_id' => '5',
        ]);

        # 269. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 375,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 270. Jalan AKBP Cek Agus - 2025
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 271. Jalan AKBP Cek Agus - 2025
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 272. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 850,
            'maintenancetype_id' => '6',
        ]);

        # 273. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 850,
            'end_length' => 1050,
            'maintenancetype_id' => '5',
        ]);

        # 274. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1050,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 275. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 850,
            'maintenancetype_id' => '6',
        ]);

        # 276. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 850,
            'end_length' => 1050,
            'maintenancetype_id' => '5',
        ]);

        # 277. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1050,
            'end_length' => 1310,
            'maintenancetype_id' => '6',
        ]);

        # 278. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1667,
            'maintenancetype_id' => '6',
        ]);

        # 279. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1667,
            'end_length' => 1823,
            'maintenancetype_id' => '5',
        ]);

        # 280. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1823,
            'end_length' => 1915,
            'maintenancetype_id' => '6',
        ]);

        # 281. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1915,
            'end_length' => 2025,
            'maintenancetype_id' => '5',
        ]);

        # 282. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2025,
            'end_length' => 2387,
            'maintenancetype_id' => '6',
        ]);

        # 283. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2387,
            'end_length' => 2981,
            'maintenancetype_id' => '5',
        ]);

        # 284. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2981,
            'end_length' => 3027,
            'maintenancetype_id' => '6',
        ]);

        # 285. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3027,
            'end_length' => 3245,
            'maintenancetype_id' => '5',
        ]);

        # 286. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3245,
            'end_length' => 3607,
            'maintenancetype_id' => '6',
        ]);

        # 287. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3607,
            'end_length' => 3865,
            'maintenancetype_id' => '5',
        ]);

        # 288. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3865,
            'end_length' => 3915,
            'maintenancetype_id' => '6',
        ]);

        # 289. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3915,
            'end_length' => 3983,
            'maintenancetype_id' => '5',
        ]);

        # 290. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3983,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 291. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2387,
            'maintenancetype_id' => '6',
        ]);

        # 292. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2387,
            'end_length' => 2981,
            'maintenancetype_id' => '5',
        ]);

        # 293. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2981,
            'end_length' => 3027,
            'maintenancetype_id' => '6',
        ]);

        # 294. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3027,
            'end_length' => 3245,
            'maintenancetype_id' => '5',
        ]);

        # 295. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3245,
            'end_length' => 3607,
            'maintenancetype_id' => '6',
        ]);

        # 296. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3607,
            'end_length' => 3865,
            'maintenancetype_id' => '5',
        ]);

        # 297. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3865,
            'end_length' => 3915,
            'maintenancetype_id' => '6',
        ]);

        # 298. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3915,
            'end_length' => 3983,
            'maintenancetype_id' => '5',
        ]);

        # 299. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3983,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 300. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 100,
            'maintenancetype_id' => '5',
        ]);

        # 301. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 100,
            'end_length' => 140,
            'maintenancetype_id' => '6',
        ]);

        # 302. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 140,
            'end_length' => 218,
            'maintenancetype_id' => '5',
        ]);

        # 303. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 218,
            'end_length' => 347,
            'maintenancetype_id' => '6',
        ]);

        # 304. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 347,
            'end_length' => 387,
            'maintenancetype_id' => '5',
        ]);

        # 305. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 387,
            'end_length' => 433.5,
            'maintenancetype_id' => '6',
        ]);

        # 306. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 433.5,
            'end_length' => 477,
            'maintenancetype_id' => '5',
        ]);

        # 307. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 477,
            'end_length' => 926,
            'maintenancetype_id' => '6',
        ]);

        # 308. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 926,
            'end_length' => 1258,
            'maintenancetype_id' => '5',
        ]);

        # 309. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1258,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 310. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1690,
            'maintenancetype_id' => '5',
        ]);

        # 311. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1690,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 312. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 86,
            'maintenancetype_id' => '6',
        ]);

        # 313. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 86,
            'end_length' => 91,
            'maintenancetype_id' => '5',
        ]);

        # 314. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 91,
            'end_length' => 100,
            'maintenancetype_id' => '6',
        ]);

        # 315. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 100,
            'end_length' => 200,
            'maintenancetype_id' => '5',
        ]);

        # 316. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 200,
            'end_length' => 327,
            'maintenancetype_id' => '6',
        ]);

        # 317. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 327,
            'end_length' => 343,
            'maintenancetype_id' => '5',
        ]);

        # 318. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 343,
            'end_length' => 480,
            'maintenancetype_id' => '6',
        ]);

        # 319. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 480,
            'end_length' => 493.5,
            'maintenancetype_id' => '5',
        ]);

        # 320. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 493.5,
            'end_length' => 627,
            'maintenancetype_id' => '6',
        ]);

        # 321. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 627,
            'end_length' => 640,
            'maintenancetype_id' => '5',
        ]);

        # 322. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 640,
            'end_length' => 718,
            'maintenancetype_id' => '6',
        ]);

        # 323. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 718,
            'end_length' => 770,
            'maintenancetype_id' => '5',
        ]);

        # 324. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 770,
            'end_length' => 1171,
            'maintenancetype_id' => '6',
        ]);

        # 325. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1171,
            'end_length' => 1233,
            'maintenancetype_id' => '5',
        ]);

        # 326. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1233,
            'end_length' => 1262,
            'maintenancetype_id' => '6',
        ]);

        # 327. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1262,
            'end_length' => 1319,
            'maintenancetype_id' => '5',
        ]);

        # 328. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1319,
            'end_length' => 1389,
            'maintenancetype_id' => '6',
        ]);

        # 329. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1389,
            'end_length' => 1439,
            'maintenancetype_id' => '5',
        ]);

        # 330. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1439,
            'end_length' => 1497,
            'maintenancetype_id' => '6',
        ]);

        # 331. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1497,
            'end_length' => 1552,
            'maintenancetype_id' => '5',
        ]);

        # 332. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1552,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 333. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 98,
            'maintenancetype_id' => '6',
        ]);

        # 334. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 98,
            'end_length' => 129,
            'maintenancetype_id' => '5',
        ]);

        # 335. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 129,
            'end_length' => 207,
            'maintenancetype_id' => '6',
        ]);

        # 336. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 207,
            'end_length' => 244,
            'maintenancetype_id' => '5',
        ]);

        # 337. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 244,
            'end_length' => 301,
            'maintenancetype_id' => '6',
        ]);

        # 338. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 301,
            'end_length' => 410,
            'maintenancetype_id' => '5',
        ]);

        # 339. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 410,
            'end_length' => 452,
            'maintenancetype_id' => '6',
        ]);

        # 340. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 452,
            'end_length' => 485,
            'maintenancetype_id' => '5',
        ]);

        # 341. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 485,
            'end_length' => 635,
            'maintenancetype_id' => '6',
        ]);

        # 342. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 635,
            'end_length' => 907,
            'maintenancetype_id' => '5',
        ]);

        # 343. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 907,
            'end_length' => 3945,
            'maintenancetype_id' => '6',
        ]);

        # 344. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3945,
            'end_length' => 4129,
            'maintenancetype_id' => '5',
        ]);

        # 345. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4129,
            'end_length' => 4153,
            'maintenancetype_id' => '6',
        ]);

        # 346. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4153,
            'end_length' => 4160,
            'maintenancetype_id' => '5',
        ]);

        # 347. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4160,
            'end_length' => 4270,
            'maintenancetype_id' => '6',
        ]);

        # 348. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4270,
            'end_length' => 4300,
            'maintenancetype_id' => '5',
        ]);

        # 349. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4300,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 350. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 87,
            'maintenancetype_id' => '5',
        ]);

        # 351. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 87,
            'end_length' => 189,
            'maintenancetype_id' => '6',
        ]);

        # 352. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 189,
            'end_length' => 331,
            'maintenancetype_id' => '5',
        ]);

        # 353. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 331,
            'end_length' => 347,
            'maintenancetype_id' => '6',
        ]);

        # 354. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 347,
            'end_length' => 603,
            'maintenancetype_id' => '5',
        ]);

        # 355. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 603,
            'end_length' => 629,
            'maintenancetype_id' => '6',
        ]);

        # 356. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 629,
            'end_length' => 639,
            'maintenancetype_id' => '5',
        ]);

        # 357. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 639,
            'end_length' => 717,
            'maintenancetype_id' => '6',
        ]);

        # 358. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 717,
            'end_length' => 778,
            'maintenancetype_id' => '5',
        ]);

        # 359. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 778,
            'end_length' => 870,
            'maintenancetype_id' => '6',
        ]);

        # 360. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 870,
            'end_length' => 900,
            'maintenancetype_id' => '5',
        ]);

        # 361. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 900,
            'end_length' => 1108,
            'maintenancetype_id' => '6',
        ]);

        # 362. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1108,
            'end_length' => 1142,
            'maintenancetype_id' => '5',
        ]);

        # 363. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1142,
            'end_length' => 3945,
            'maintenancetype_id' => '6',
        ]);

        # 364. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3945,
            'end_length' => 4129,
            'maintenancetype_id' => '5',
        ]);

        # 365. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4129,
            'end_length' => 4153,
            'maintenancetype_id' => '6',
        ]);

        # 366. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4153,
            'end_length' => 4160,
            'maintenancetype_id' => '5',
        ]);

        # 367. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4160,
            'end_length' => 4270,
            'maintenancetype_id' => '6',
        ]);

        # 368. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4270,
            'end_length' => 4300,
            'maintenancetype_id' => '5',
        ]);

        # 369. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4300,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 370. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        # 371. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1000,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 372. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 373. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2400,
            'end_length' => 2670,
            'maintenancetype_id' => '5',
        ]);

        # 374. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2670,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 375. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenancetype_id' => '6',
        ]);

        # 376. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1000,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 377. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 378. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2400,
            'end_length' => 2670,
            'maintenancetype_id' => '5',
        ]);

        # 379. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2670,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 380. Jalan DI Panjaitan - 2023
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 381. Jalan DI Panjaitan - 2023
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 382. Jalan DI Panjaitan - 2024
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 383. Jalan DI Panjaitan - 2024
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 384. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 108,
            'maintenancetype_id' => '5',
        ]);

        # 385. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 108,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 386. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 108,
            'maintenancetype_id' => '5',
        ]);

        # 387. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 108,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 388. Jalan DI Panjaitan - 2026
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 389. Jalan DI Panjaitan - 2026
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenancetype_id' => '6',
        ]);

        # 390. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 19,
            'maintenancetype_id' => '6',
        ]);

        # 391. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 19,
            'end_length' => 145,
            'maintenancetype_id' => '5',
        ]);

        # 392. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 145,
            'end_length' => 195,
            'maintenancetype_id' => '6',
        ]);

        # 393. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 195,
            'end_length' => 300,
            'maintenancetype_id' => '5',
        ]);

        # 394. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 300,
            'end_length' => 665,
            'maintenancetype_id' => '6',
        ]);

        # 395. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 665,
            'end_length' => 730,
            'maintenancetype_id' => '5',
        ]);

        # 396. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 730,
            'end_length' => 807,
            'maintenancetype_id' => '6',
        ]);

        # 397. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 807,
            'end_length' => 970,
            'maintenancetype_id' => '5',
        ]);

        # 398. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 970,
            'end_length' => 1596,
            'maintenancetype_id' => '6',
        ]);

        # 399. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1596,
            'end_length' => 1672,
            'maintenancetype_id' => '5',
        ]);

        # 400. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1672,
            'end_length' => 1950,
            'maintenancetype_id' => '6',
        ]);

        # 401. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1950,
            'end_length' => 2135,
            'maintenancetype_id' => '5',
        ]);

        # 402. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2135,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 403. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 19,
            'maintenancetype_id' => '6',
        ]);

        # 404. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 19,
            'end_length' => 145,
            'maintenancetype_id' => '5',
        ]);

        # 405. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 145,
            'end_length' => 195,
            'maintenancetype_id' => '6',
        ]);

        # 406. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 195,
            'end_length' => 300,
            'maintenancetype_id' => '5',
        ]);

        # 407. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 300,
            'end_length' => 665,
            'maintenancetype_id' => '6',
        ]);

        # 408. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 665,
            'end_length' => 730,
            'maintenancetype_id' => '5',
        ]);

        # 409. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 730,
            'end_length' => 807,
            'maintenancetype_id' => '6',
        ]);

        # 410. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 807,
            'end_length' => 970,
            'maintenancetype_id' => '5',
        ]);

        # 411. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 970,
            'end_length' => 1596,
            'maintenancetype_id' => '6',
        ]);

        # 412. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1596,
            'end_length' => 1672,
            'maintenancetype_id' => '5',
        ]);

        # 413. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1672,
            'end_length' => 1950,
            'maintenancetype_id' => '6',
        ]);

        # 414. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1950,
            'end_length' => 2135,
            'maintenancetype_id' => '5',
        ]);

        # 415. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2135,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 416. Jalan MP Mangkunegara - 2024
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 417. Jalan MP Mangkunegara - 2024
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 418. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 140,
            'maintenancetype_id' => '6',
        ]);

        # 419. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 140,
            'end_length' => 485,
            'maintenancetype_id' => '5',
        ]);

        # 420. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 485,
            'end_length' => 537,
            'maintenancetype_id' => '6',
        ]);

        # 421. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 537,
            'end_length' => 588,
            'maintenancetype_id' => '5',
        ]);

        # 422. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 588,
            'end_length' => 740,
            'maintenancetype_id' => '5',
        ]);

        # 423. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 740,
            'end_length' => 1221,
            'maintenancetype_id' => '6',
        ]);

        # 424. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1221,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 425. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1350,
            'maintenancetype_id' => '5',
        ]);

        # 426. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1350,
            'end_length' => 1500,
            'maintenancetype_id' => '6',
        ]);

        # 427. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1500,
            'end_length' => 1628,
            'maintenancetype_id' => '5',
        ]);

        # 428. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenancetype_id' => '6',
        ]);

        # 429. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenancetype_id' => '5',
        ]);

        # 430. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenancetype_id' => '6',
        ]);

        # 431. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2119,
            'end_length' => 2300,
            'maintenancetype_id' => '5',
        ]);

        # 432. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2300,
            'end_length' => 2439,
            'maintenancetype_id' => '5',
        ]);

        # 433. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2439,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 434. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1109,
            'end_length' => 1121,
            'maintenancetype_id' => '7',
        ]);

        # 435. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2139,
            'end_length' => 2141.1,
            'maintenancetype_id' => '7',
        ]);

        # 436. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 140,
            'maintenancetype_id' => '6',
        ]);

        # 437. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 140,
            'end_length' => 485,
            'maintenancetype_id' => '5',
        ]);

        # 438. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 485,
            'end_length' => 537,
            'maintenancetype_id' => '6',
        ]);

        # 439. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 537,
            'end_length' => 588,
            'maintenancetype_id' => '5',
        ]);

        # 440. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 588,
            'end_length' => 740,
            'maintenancetype_id' => '5',
        ]);

        # 441. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 740,
            'end_length' => 1221,
            'maintenancetype_id' => '6',
        ]);

        # 442. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1221,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 443. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1350,
            'maintenancetype_id' => '5',
        ]);

        # 444. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1350,
            'end_length' => 1500,
            'maintenancetype_id' => '6',
        ]);

        # 445. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1500,
            'end_length' => 1628,
            'maintenancetype_id' => '5',
        ]);

        # 446. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenancetype_id' => '6',
        ]);

        # 447. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenancetype_id' => '5',
        ]);

        # 448. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenancetype_id' => '6',
        ]);

        # 449. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2119,
            'end_length' => 2300,
            'maintenancetype_id' => '5',
        ]);

        # 450. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2300,
            'end_length' => 2439,
            'maintenancetype_id' => '5',
        ]);

        # 451. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2439,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 452. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 588,
            'end_length' => 624,
            'maintenancetype_id' => '7',
        ]);

        # 453. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1744,
            'end_length' => 1788,
            'maintenancetype_id' => '7',
        ]);

        # 454. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1164,
            'maintenancetype_id' => '6',
        ]);

        # 455. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1164,
            'end_length' => 1221,
            'maintenancetype_id' => '5',
        ]);

        # 456. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1221,
            'end_length' => 1628,
            'maintenancetype_id' => '6',
        ]);

        # 457. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenancetype_id' => '5',
        ]);

        # 458. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenancetype_id' => '6',
        ]);

        # 459. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenancetype_id' => '5',
        ]);

        # 460. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2119,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 461. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1164,
            'maintenancetype_id' => '6',
        ]);

        # 462. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1164,
            'end_length' => 1221,
            'maintenancetype_id' => '5',
        ]);

        # 463. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1221,
            'end_length' => 1628,
            'maintenancetype_id' => '6',
        ]);

        # 464. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenancetype_id' => '5',
        ]);

        # 465. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenancetype_id' => '6',
        ]);

        # 466. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenancetype_id' => '5',
        ]);

        # 467. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2119,
            'end_length' => 2580,
            'maintenancetype_id' => '6',
        ]);

        # 468. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 156,
            'maintenancetype_id' => '5',
        ]);

        # 469. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 156,
            'end_length' => 1127,
            'maintenancetype_id' => '6',
        ]);

        # 470. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1127,
            'end_length' => 1555,
            'maintenancetype_id' => '5',
        ]);

        # 471. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1555,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 472. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 156,
            'maintenancetype_id' => '5',
        ]);

        # 473. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 156,
            'end_length' => 1127,
            'maintenancetype_id' => '6',
        ]);

        # 474. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1127,
            'end_length' => 1555,
            'maintenancetype_id' => '5',
        ]);

        # 475. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1555,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 476. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 239,
            'maintenancetype_id' => '6',
        ]);

        # 477. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 239,
            'end_length' => 518,
            'maintenancetype_id' => '5',
        ]);

        # 478. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 518,
            'end_length' => 532,
            'maintenancetype_id' => '6',
        ]);

        # 479. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 532,
            'end_length' => 945,
            'maintenancetype_id' => '5',
        ]);

        # 480. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 945,
            'end_length' => 970,
            'maintenancetype_id' => '6',
        ]);

        # 481. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 970,
            'end_length' => 1130,
            'maintenancetype_id' => '5',
        ]);

        # 482. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1130,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 483. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 239,
            'maintenancetype_id' => '6',
        ]);

        # 484. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 239,
            'end_length' => 518,
            'maintenancetype_id' => '5',
        ]);

        # 485. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 518,
            'end_length' => 532,
            'maintenancetype_id' => '6',
        ]);

        # 486. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 532,
            'end_length' => 945,
            'maintenancetype_id' => '5',
        ]);

        # 487. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 945,
            'end_length' => 970,
            'maintenancetype_id' => '6',
        ]);

        # 488. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 970,
            'end_length' => 1130,
            'maintenancetype_id' => '5',
        ]);

        # 489. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1130,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 490. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 160,
            'maintenancetype_id' => '6',
        ]);

        # 491. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 160,
            'end_length' => 237,
            'maintenancetype_id' => '5',
        ]);

        # 492. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 237,
            'end_length' => 519,
            'maintenancetype_id' => '6',
        ]);

        # 493. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 519,
            'end_length' => 531,
            'maintenancetype_id' => '5',
        ]);

        # 494. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 531,
            'end_length' => 1551,
            'maintenancetype_id' => '6',
        ]);

        # 495. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1551,
            'end_length' => 2234,
            'maintenancetype_id' => '5',
        ]);

        # 496. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2234,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 497. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 160,
            'maintenancetype_id' => '6',
        ]);

        # 498. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 160,
            'end_length' => 237,
            'maintenancetype_id' => '5',
        ]);

        # 499. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 237,
            'end_length' => 519,
            'maintenancetype_id' => '6',
        ]);

        # 500. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 519,
            'end_length' => 531,
            'maintenancetype_id' => '5',
        ]);

        # 501. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 531,
            'end_length' => 1551,
            'maintenancetype_id' => '6',
        ]);

        # 502. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1551,
            'end_length' => 2234,
            'maintenancetype_id' => '5',
        ]);

        # 503. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2234,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 504. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2234,
            'maintenancetype_id' => '6',
        ]);

        # 505. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2234,
            'end_length' => 2384,
            'maintenancetype_id' => '5',
        ]);

        # 506. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2384,
            'end_length' => 2600,
            'maintenancetype_id' => '6',
        ]);

        # 507. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2600,
            'end_length' => 2780,
            'maintenancetype_id' => '5',
        ]);

        # 508. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2780,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 509. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2234,
            'maintenancetype_id' => '6',
        ]);

        # 510. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2234,
            'end_length' => 2384,
            'maintenancetype_id' => '5',
        ]);

        # 511. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2384,
            'end_length' => 2600,
            'maintenancetype_id' => '6',
        ]);

        # 512. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2600,
            'end_length' => 2780,
            'maintenancetype_id' => '5',
        ]);

        # 513. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2780,
            'end_length' => 5000,
            'maintenancetype_id' => '6',
        ]);

        # 514. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 75,
            'maintenancetype_id' => '5',
        ]);

        # 515. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 75,
            'end_length' => 415,
            'maintenancetype_id' => '6',
        ]);

        # 516. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 415,
            'end_length' => 467,
            'maintenancetype_id' => '5',
        ]);

        # 517. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 467,
            'end_length' => 481,
            'maintenancetype_id' => '6',
        ]);

        # 518. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 481,
            'end_length' => 722.9,
            'maintenancetype_id' => '5',
        ]);

        # 519. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 722.9,
            'end_length' => 770,
            'maintenancetype_id' => '6',
        ]);

        # 520. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 770,
            'end_length' => 1100,
            'maintenancetype_id' => '5',
        ]);

        # 521. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1100,
            'end_length' => 1136,
            'maintenancetype_id' => '5',
        ]);

        # 522. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1136,
            'end_length' => 1170,
            'maintenancetype_id' => '5',
        ]);

        # 523. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1170,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 524. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 75,
            'maintenancetype_id' => '5',
        ]);

        # 525. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 75,
            'end_length' => 415,
            'maintenancetype_id' => '6',
        ]);

        # 526. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 415,
            'end_length' => 467,
            'maintenancetype_id' => '5',
        ]);

        # 527. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 467,
            'end_length' => 481,
            'maintenancetype_id' => '6',
        ]);

        # 528. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 481,
            'end_length' => 722.9,
            'maintenancetype_id' => '5',
        ]);

        # 529. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 722.9,
            'end_length' => 770,
            'maintenancetype_id' => '6',
        ]);

        # 530. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 770,
            'end_length' => 1170,
            'maintenancetype_id' => '5',
        ]);

        # 531. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1170,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 532. Jalan Pangeran Ayin – Batas Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 533. Jalan Pangeran Ayin – Batas Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 534. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 77,
            'maintenancetype_id' => '6',
        ]);

        # 535. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 77,
            'end_length' => 415,
            'maintenancetype_id' => '5',
        ]);

        # 536. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 415,
            'end_length' => 728,
            'maintenancetype_id' => '6',
        ]);

        # 537. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 728,
            'end_length' => 1030,
            'maintenancetype_id' => '5',
        ]);

        # 538. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1030,
            'end_length' => 1176,
            'maintenancetype_id' => '6',
        ]);

        # 539. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1176,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        # 540. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 77,
            'maintenancetype_id' => '6',
        ]);

        # 541. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 77,
            'end_length' => 415,
            'maintenancetype_id' => '5',
        ]);

        # 542. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 415,
            'end_length' => 728,
            'maintenancetype_id' => '6',
        ]);

        # 543. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 728,
            'end_length' => 1030,
            'maintenancetype_id' => '5',
        ]);

        # 544. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1030,
            'end_length' => 1176,
            'maintenancetype_id' => '6',
        ]);

        # 545. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1176,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        # 546. Jalan Pangeran Ayin – Batas Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 547. Jalan Pangeran Ayin – Batas Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenancetype_id' => '6',
        ]);

        # 548. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 14,
            'maintenancetype_id' => '5',
        ]);

        # 549. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 14,
            'end_length' => 509,
            'maintenancetype_id' => '6',
        ]);

        # 550. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 509,
            'end_length' => 1336,
            'maintenancetype_id' => '5',
        ]);

        # 551. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1336,
            'end_length' => 1637,
            'maintenancetype_id' => '6',
        ]);

        # 552. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1637,
            'end_length' => 1677,
            'maintenancetype_id' => '5',
        ]);

        # 553. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1677,
            'end_length' => 1773.26,
            'maintenancetype_id' => '6',
        ]);

        # 554. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1773.26,
            'end_length' => 2392,
            'maintenancetype_id' => '6',
        ]);

        # 555. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2392,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 556. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 14,
            'maintenancetype_id' => '5',
        ]);

        # 557. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 14,
            'end_length' => 509,
            'maintenancetype_id' => '6',
        ]);

        # 558. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 509,
            'end_length' => 1336,
            'maintenancetype_id' => '5',
        ]);

        # 559. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1336,
            'end_length' => 1637,
            'maintenancetype_id' => '6',
        ]);

        # 560. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1637,
            'end_length' => 1677,
            'maintenancetype_id' => '5',
        ]);

        # 561. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1677,
            'end_length' => 1773.26,
            'maintenancetype_id' => '6',
        ]);

        # 562. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1773.26,
            'end_length' => 2392,
            'maintenancetype_id' => '6',
        ]);

        # 563. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2392,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 564. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 514,
            'maintenancetype_id' => '5',
        ]);

        # 565. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 514,
            'end_length' => 1351,
            'maintenancetype_id' => '6',
        ]);

        # 566. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1351,
            'end_length' => 2398,
            'maintenancetype_id' => '5',
        ]);

        # 567. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2398,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 568. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 514,
            'maintenancetype_id' => '5',
        ]);

        # 569. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 514,
            'end_length' => 1351,
            'maintenancetype_id' => '6',
        ]);

        # 570. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1351,
            'end_length' => 2398,
            'maintenancetype_id' => '5',
        ]);

        # 571. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2398,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 572. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1773.26,
            'maintenancetype_id' => '5',
        ]);

        # 573. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1773.26,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 574. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1773.26,
            'maintenancetype_id' => '5',
        ]);

        # 575. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1773.26,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 576. Jalan Pendidikan – Jalan Lingkar Selatan - 2026
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 577. Jalan Pendidikan – Jalan Lingkar Selatan - 2026
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 578. Jalan Kapt Abdullah – Jalan Robani Kadir - 2023
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 579. Jalan Kapt Abdullah – Jalan Robani Kadir - 2023
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 580. Jalan Kapt Abdullah – Jalan Robani Kadir - 2024
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 581. Jalan Kapt Abdullah – Jalan Robani Kadir - 2024
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 582. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 665,
            'maintenancetype_id' => '6',
        ]);

        # 583. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 665,
            'end_length' => 879,
            'maintenancetype_id' => '5',
        ]);

        # 584. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 879,
            'end_length' => 1759,
            'maintenancetype_id' => '6',
        ]);

        # 585. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1759,
            'end_length' => 2586,
            'maintenancetype_id' => '5',
        ]);

        # 586. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2586,
            'end_length' => 2606,
            'maintenancetype_id' => '6',
        ]);

        # 587. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2606,
            'end_length' => 2755,
            'maintenancetype_id' => '5',
        ]);

        # 588. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2755,
            'end_length' => 2800,
            'maintenancetype_id' => '6',
        ]);

        # 589. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2800,
            'end_length' => 3446,
            'maintenancetype_id' => '5',
        ]);

        # 590. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3446,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 591. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 665,
            'maintenancetype_id' => '6',
        ]);

        # 592. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 665,
            'end_length' => 879,
            'maintenancetype_id' => '5',
        ]);

        # 593. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 879,
            'end_length' => 1759,
            'maintenancetype_id' => '6',
        ]);

        # 594. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1759,
            'end_length' => 2586,
            'maintenancetype_id' => '5',
        ]);

        # 595. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2586,
            'end_length' => 2606,
            'maintenancetype_id' => '6',
        ]);

        # 596. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2606,
            'end_length' => 2755,
            'maintenancetype_id' => '5',
        ]);

        # 597. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2755,
            'end_length' => 2800,
            'maintenancetype_id' => '6',
        ]);

        # 598. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2800,
            'end_length' => 3446,
            'maintenancetype_id' => '5',
        ]);

        # 599. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3446,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 600. Jalan Kapt Abdullah – Jalan Robani Kadir - 2026
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 601. Jalan Kapt Abdullah – Jalan Robani Kadir - 2026
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 602. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1040,
            'maintenancetype_id' => '6',
        ]);

        # 603. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1040,
            'end_length' => 1205,
            'maintenancetype_id' => '1',
        ]);

        # 604. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1205,
            'end_length' => 9585,
            'maintenancetype_id' => '6',
        ]);

        # 605. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 9585,
            'end_length' => 10510.8,
            'maintenancetype_id' => '1',
        ]);

        # 606. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 10510.8,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 607. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1040,
            'maintenancetype_id' => '6',
        ]);

        # 608. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1040,
            'end_length' => 1205,
            'maintenancetype_id' => '1',
        ]);

        # 609. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1205,
            'end_length' => 9585,
            'maintenancetype_id' => '6',
        ]);

        # 610. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 9585,
            'end_length' => 10510.8,
            'maintenancetype_id' => '1',
        ]);

        # 611. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 10510.8,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 612. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 332,
            'maintenancetype_id' => '5',
        ]);

        # 613. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 332,
            'end_length' => 1258,
            'maintenancetype_id' => '6',
        ]);

        # 614. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1258,
            'end_length' => 1284,
            'maintenancetype_id' => '5',
        ]);

        # 615. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1284,
            'end_length' => 1815,
            'maintenancetype_id' => '6',
        ]);

        # 616. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1815,
            'end_length' => 1830,
            'maintenancetype_id' => '5',
        ]);

        # 617. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1830,
            'end_length' => 2927,
            'maintenancetype_id' => '6',
        ]);

        # 618. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2927,
            'end_length' => 2931,
            'maintenancetype_id' => '5',
        ]);

        # 619. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2931,
            'end_length' => 2949,
            'maintenancetype_id' => '6',
        ]);

        # 620. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2949,
            'end_length' => 2953,
            'maintenancetype_id' => '5',
        ]);

        # 621. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2953,
            'end_length' => 3450,
            'maintenancetype_id' => '6',
        ]);

        # 622. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3450,
            'end_length' => 3779,
            'maintenancetype_id' => '5',
        ]);

        # 623. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3779,
            'end_length' => 4850,
            'maintenancetype_id' => '6',
        ]);

        # 624. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 4850,
            'end_length' => 4950,
            'maintenancetype_id' => '5',
        ]);

        # 625. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 4950,
            'end_length' => 5172,
            'maintenancetype_id' => '6',
        ]);

        # 626. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 5172,
            'end_length' => 5224,
            'maintenancetype_id' => '5',
        ]);

        # 627. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 5224,
            'end_length' => 6132,
            'maintenancetype_id' => '6',
        ]);

        # 628. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6132,
            'end_length' => 6146,
            'maintenancetype_id' => '5',
        ]);

        # 629. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6146,
            'end_length' => 6181,
            'maintenancetype_id' => '6',
        ]);

        # 630. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6181,
            'end_length' => 6185,
            'maintenancetype_id' => '5',
        ]);

        # 631. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6185,
            'end_length' => 10938,
            'maintenancetype_id' => '6',
        ]);

        # 632. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 10938,
            'end_length' => 11080,
            'maintenancetype_id' => '5',
        ]);

        # 633. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11080,
            'end_length' => 11130,
            'maintenancetype_id' => '6',
        ]);

        # 634. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11130,
            'end_length' => 11171,
            'maintenancetype_id' => '5',
        ]);

        # 635. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11171,
            'end_length' => 11285,
            'maintenancetype_id' => '6',
        ]);

        # 636. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11285,
            'end_length' => 11303,
            'maintenancetype_id' => '5',
        ]);

        # 637. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11303,
            'end_length' => 11372,
            'maintenancetype_id' => '6',
        ]);

        # 638. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11372,
            'end_length' => 11385,
            'maintenancetype_id' => '5',
        ]);

        # 639. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11385,
            'end_length' => 11587,
            'maintenancetype_id' => '6',
        ]);

        # 640. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11587,
            'end_length' => 11750,
            'maintenancetype_id' => '5',
        ]);

        # 641. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11750,
            'end_length' => 11785,
            'maintenancetype_id' => '6',
        ]);

        # 642. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11785,
            'end_length' => 11939,
            'maintenancetype_id' => '5',
        ]);

        # 643. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11939,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 644. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 332,
            'maintenancetype_id' => '5',
        ]);

        # 645. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 332,
            'end_length' => 1258,
            'maintenancetype_id' => '6',
        ]);

        # 646. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1258,
            'end_length' => 1284,
            'maintenancetype_id' => '5',
        ]);

        # 647. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1284,
            'end_length' => 1815,
            'maintenancetype_id' => '6',
        ]);

        # 648. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1815,
            'end_length' => 1830,
            'maintenancetype_id' => '5',
        ]);

        # 649. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1830,
            'end_length' => 2927,
            'maintenancetype_id' => '6',
        ]);

        # 650. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2927,
            'end_length' => 2931,
            'maintenancetype_id' => '5',
        ]);

        # 651. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2931,
            'end_length' => 2949,
            'maintenancetype_id' => '6',
        ]);

        # 652. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2949,
            'end_length' => 2953,
            'maintenancetype_id' => '5',
        ]);

        # 653. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2953,
            'end_length' => 3450,
            'maintenancetype_id' => '6',
        ]);

        # 654. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3450,
            'end_length' => 3779,
            'maintenancetype_id' => '5',
        ]);

        # 655. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3779,
            'end_length' => 4850,
            'maintenancetype_id' => '6',
        ]);

        # 656. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 4850,
            'end_length' => 4950,
            'maintenancetype_id' => '5',
        ]);

        # 657. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 4950,
            'end_length' => 5172,
            'maintenancetype_id' => '6',
        ]);

        # 658. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 5172,
            'end_length' => 5224,
            'maintenancetype_id' => '5',
        ]);

        # 659. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 5224,
            'end_length' => 6132,
            'maintenancetype_id' => '6',
        ]);

        # 660. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6132,
            'end_length' => 6146,
            'maintenancetype_id' => '5',
        ]);

        # 661. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6146,
            'end_length' => 6181,
            'maintenancetype_id' => '6',
        ]);

        # 662. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6181,
            'end_length' => 6185,
            'maintenancetype_id' => '5',
        ]);

        # 663. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6185,
            'end_length' => 10938,
            'maintenancetype_id' => '6',
        ]);

        # 664. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 10938,
            'end_length' => 11080,
            'maintenancetype_id' => '5',
        ]);

        # 665. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11080,
            'end_length' => 11130,
            'maintenancetype_id' => '6',
        ]);

        # 666. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11130,
            'end_length' => 11171,
            'maintenancetype_id' => '5',
        ]);

        # 667. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11171,
            'end_length' => 11285,
            'maintenancetype_id' => '6',
        ]);

        # 668. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11285,
            'end_length' => 11303,
            'maintenancetype_id' => '5',
        ]);

        # 669. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11303,
            'end_length' => 11372,
            'maintenancetype_id' => '6',
        ]);

        # 670. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11372,
            'end_length' => 11385,
            'maintenancetype_id' => '5',
        ]);

        # 671. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11385,
            'end_length' => 11587,
            'maintenancetype_id' => '6',
        ]);

        # 672. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11587,
            'end_length' => 11750,
            'maintenancetype_id' => '5',
        ]);

        # 673. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11750,
            'end_length' => 11785,
            'maintenancetype_id' => '6',
        ]);

        # 674. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11785,
            'end_length' => 11939,
            'maintenancetype_id' => '5',
        ]);

        # 675. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11939,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 676. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3749,
            'maintenancetype_id' => '6',
        ]);

        # 677. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3749,
            'end_length' => 3762,
            'maintenancetype_id' => '5',
        ]);

        # 678. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3762,
            'end_length' => 7115,
            'maintenancetype_id' => '6',
        ]);

        # 679. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7115,
            'end_length' => 7323,
            'maintenancetype_id' => '5',
        ]);

        # 680. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7323,
            'end_length' => 7534,
            'maintenancetype_id' => '6',
        ]);

        # 681. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7534,
            'end_length' => 7688,
            'maintenancetype_id' => '5',
        ]);

        # 682. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7688,
            'end_length' => 8650,
            'maintenancetype_id' => '6',
        ]);

        # 683. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8650,
            'end_length' => 8797,
            'maintenancetype_id' => '5',
        ]);

        # 684. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8797,
            'end_length' => 8856,
            'maintenancetype_id' => '6',
        ]);

        # 685. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8856,
            'end_length' => 8864,
            'maintenancetype_id' => '5',
        ]);

        # 686. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8864,
            'end_length' => 9442,
            'maintenancetype_id' => '6',
        ]);

        # 687. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 9442,
            'end_length' => 9502,
            'maintenancetype_id' => '5',
        ]);

        # 688. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 9502,
            'end_length' => 10400,
            'maintenancetype_id' => '6',
        ]);

        # 689. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10400,
            'end_length' => 10499,
            'maintenancetype_id' => '5',
        ]);

        # 690. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10499,
            'end_length' => 10809,
            'maintenancetype_id' => '6',
        ]);

        # 691. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10809,
            'end_length' => 10858,
            'maintenancetype_id' => '5',
        ]);

        # 692. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10858,
            'end_length' => 11031,
            'maintenancetype_id' => '6',
        ]);

        # 693. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11031,
            'end_length' => 11102,
            'maintenancetype_id' => '5',
        ]);

        # 694. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11102,
            'end_length' => 11113,
            'maintenancetype_id' => '6',
        ]);

        # 695. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11113,
            'end_length' => 11157,
            'maintenancetype_id' => '5',
        ]);

        # 696. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11157,
            'end_length' => 11179,
            'maintenancetype_id' => '6',
        ]);

        # 697. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11179,
            'end_length' => 11315,
            'maintenancetype_id' => '5',
        ]);

        # 698. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11315,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 699. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3749,
            'maintenancetype_id' => '6',
        ]);

        # 700. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3749,
            'end_length' => 3762,
            'maintenancetype_id' => '5',
        ]);

        # 701. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3762,
            'end_length' => 7115,
            'maintenancetype_id' => '6',
        ]);

        # 702. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7115,
            'end_length' => 7323,
            'maintenancetype_id' => '5',
        ]);

        # 703. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7323,
            'end_length' => 7534,
            'maintenancetype_id' => '6',
        ]);

        # 704. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7534,
            'end_length' => 7688,
            'maintenancetype_id' => '5',
        ]);

        # 705. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7688,
            'end_length' => 8650,
            'maintenancetype_id' => '6',
        ]);

        # 706. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8650,
            'end_length' => 8797,
            'maintenancetype_id' => '5',
        ]);

        # 707. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8797,
            'end_length' => 8856,
            'maintenancetype_id' => '6',
        ]);

        # 708. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8856,
            'end_length' => 8864,
            'maintenancetype_id' => '5',
        ]);

        # 709. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8864,
            'end_length' => 9442,
            'maintenancetype_id' => '6',
        ]);

        # 710. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 9442,
            'end_length' => 9502,
            'maintenancetype_id' => '5',
        ]);

        # 711. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 9502,
            'end_length' => 10400,
            'maintenancetype_id' => '6',
        ]);

        # 712. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10400,
            'end_length' => 10499,
            'maintenancetype_id' => '5',
        ]);

        # 713. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10499,
            'end_length' => 10809,
            'maintenancetype_id' => '6',
        ]);

        # 714. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10809,
            'end_length' => 10858,
            'maintenancetype_id' => '5',
        ]);

        # 715. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10858,
            'end_length' => 11031,
            'maintenancetype_id' => '6',
        ]);

        # 716. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11031,
            'end_length' => 11102,
            'maintenancetype_id' => '5',
        ]);

        # 717. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11102,
            'end_length' => 11113,
            'maintenancetype_id' => '6',
        ]);

        # 718. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11113,
            'end_length' => 11157,
            'maintenancetype_id' => '5',
        ]);

        # 719. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11157,
            'end_length' => 11179,
            'maintenancetype_id' => '6',
        ]);

        # 720. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11179,
            'end_length' => 11315,
            'maintenancetype_id' => '5',
        ]);

        # 721. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11315,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 722. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 9502,
            'maintenancetype_id' => '6',
        ]);

        # 723. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 9502,
            'end_length' => 9852,
            'maintenancetype_id' => '5',
        ]);

        # 724. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 9852,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 725. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 9502,
            'maintenancetype_id' => '6',
        ]);

        # 726. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 9502,
            'end_length' => 9852,
            'maintenancetype_id' => '5',
        ]);

        # 727. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 9852,
            'end_length' => 12000,
            'maintenancetype_id' => '6',
        ]);

        # 728. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 200,
            'maintenancetype_id' => '4',
        ]);

        # 729. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 200,
            'end_length' => 4088,
            'maintenancetype_id' => '6',
        ]);

        # 730. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 4088,
            'end_length' => 5250,
            'maintenancetype_id' => '4',
        ]);

        # 731. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 4125,
            'maintenancetype_id' => '6',
        ]);

        # 732. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 4125,
            'end_length' => 4262,
            'maintenancetype_id' => '4',
        ]);

        # 733. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 4262,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 734. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 600,
            'maintenancetype_id' => '6',
        ]);

        # 735. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 600,
            'end_length' => 700,
            'maintenancetype_id' => '5',
        ]);

        # 736. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 1008,
            'maintenancetype_id' => '6',
        ]);

        # 737. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1008,
            'end_length' => 1340,
            'maintenancetype_id' => '5',
        ]);

        # 738. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1340,
            'end_length' => 1440,
            'maintenancetype_id' => '5',
        ]);

        # 739. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1440,
            'end_length' => 1650,
            'maintenancetype_id' => '6',
        ]);

        # 740. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1650,
            'end_length' => 1850,
            'maintenancetype_id' => '5',
        ]);

        # 741. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1850,
            'end_length' => 2018,
            'maintenancetype_id' => '6',
        ]);

        # 742. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2018,
            'end_length' => 2168,
            'maintenancetype_id' => '5',
        ]);

        # 743. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2168,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 744. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2400,
            'end_length' => 2710,
            'maintenancetype_id' => '5',
        ]);

        # 745. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2710,
            'end_length' => 2910,
            'maintenancetype_id' => '5',
        ]);

        # 746. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2910,
            'end_length' => 3610,
            'maintenancetype_id' => '6',
        ]);

        # 747. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3610,
            'end_length' => 3860,
            'maintenancetype_id' => '5',
        ]);

        # 748. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3860,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 749. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 600,
            'maintenancetype_id' => '6',
        ]);

        # 750. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 600,
            'end_length' => 700,
            'maintenancetype_id' => '5',
        ]);

        # 751. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 1008,
            'maintenancetype_id' => '6',
        ]);

        # 752. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1008,
            'end_length' => 1340,
            'maintenancetype_id' => '5',
        ]);

        # 753. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1340,
            'end_length' => 1440,
            'maintenancetype_id' => '5',
        ]);

        # 754. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1440,
            'end_length' => 1650,
            'maintenancetype_id' => '6',
        ]);

        # 755. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1650,
            'end_length' => 1850,
            'maintenancetype_id' => '5',
        ]);

        # 756. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1850,
            'end_length' => 2018,
            'maintenancetype_id' => '6',
        ]);

        # 757. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2018,
            'end_length' => 2168,
            'maintenancetype_id' => '5',
        ]);

        # 758. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2168,
            'end_length' => 2400,
            'maintenancetype_id' => '6',
        ]);

        # 759. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2400,
            'end_length' => 2710,
            'maintenancetype_id' => '5',
        ]);

        # 760. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2710,
            'end_length' => 2910,
            'maintenancetype_id' => '5',
        ]);

        # 761. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2910,
            'end_length' => 3610,
            'maintenancetype_id' => '6',
        ]);

        # 762. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3610,
            'end_length' => 3860,
            'maintenancetype_id' => '5',
        ]);

        # 763. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3860,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 764. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 700,
            'maintenancetype_id' => '6',
        ]);

        # 765. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 2750,
            'maintenancetype_id' => '5',
        ]);

        # 766. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2750,
            'end_length' => 2855,
            'maintenancetype_id' => '6',
        ]);

        # 767. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2855,
            'end_length' => 3612,
            'maintenancetype_id' => '5',
        ]);

        # 768. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3612,
            'end_length' => 3860,
            'maintenancetype_id' => '6',
        ]);

        # 769. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3860,
            'end_length' => 5248,
            'maintenancetype_id' => '5',
        ]);

        # 770. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 5248,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 771. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 700,
            'maintenancetype_id' => '6',
        ]);

        # 772. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 2750,
            'maintenancetype_id' => '5',
        ]);

        # 773. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2750,
            'end_length' => 2855,
            'maintenancetype_id' => '6',
        ]);

        # 774. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2855,
            'end_length' => 3612,
            'maintenancetype_id' => '5',
        ]);

        # 775. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3612,
            'end_length' => 3860,
            'maintenancetype_id' => '6',
        ]);

        # 776. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3860,
            'end_length' => 5248,
            'maintenancetype_id' => '5',
        ]);

        # 777. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 5248,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 778. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2910,
            'maintenancetype_id' => '6',
        ]);

        # 779. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2910,
            'end_length' => 3490,
            'maintenancetype_id' => '5',
        ]);

        # 780. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 3490,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 781. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2910,
            'maintenancetype_id' => '6',
        ]);

        # 782. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2910,
            'end_length' => 3490,
            'maintenancetype_id' => '5',
        ]);

        # 783. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 3490,
            'end_length' => 5250,
            'maintenancetype_id' => '6',
        ]);

        # 784. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 300,
            'maintenancetype_id' => '6',
        ]);

        # 785. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 300,
            'end_length' => 1315,
            'maintenancetype_id' => '1',
        ]);

        # 786. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1315,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 787. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 300,
            'maintenancetype_id' => '6',
        ]);

        # 788. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 300,
            'end_length' => 1315,
            'maintenancetype_id' => '1',
        ]);

        # 789. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1315,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 790. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 284,
            'maintenancetype_id' => '5',
        ]);

        # 791. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 284,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 792. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1779,
            'maintenancetype_id' => '5',
        ]);

        # 793. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1779,
            'end_length' => 1785,
            'maintenancetype_id' => '6',
        ]);

        # 794. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1785,
            'end_length' => 2573,
            'maintenancetype_id' => '5',
        ]);

        # 795. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2573,
            'end_length' => 3157,
            'maintenancetype_id' => '6',
        ]);

        # 796. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3157,
            'end_length' => 3322,
            'maintenancetype_id' => '5',
        ]);

        # 797. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3322,
            'end_length' => 3451,
            'maintenancetype_id' => '6',
        ]);

        # 798. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3451,
            'end_length' => 3665,
            'maintenancetype_id' => '5',
        ]);

        # 799. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3665,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 800. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 284,
            'maintenancetype_id' => '5',
        ]);

        # 801. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 284,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 802. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1779,
            'maintenancetype_id' => '5',
        ]);

        # 803. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1779,
            'end_length' => 1785,
            'maintenancetype_id' => '6',
        ]);

        # 804. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1785,
            'end_length' => 2573,
            'maintenancetype_id' => '5',
        ]);

        # 805. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2573,
            'end_length' => 3157,
            'maintenancetype_id' => '6',
        ]);

        # 806. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3157,
            'end_length' => 3322,
            'maintenancetype_id' => '5',
        ]);

        # 807. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3322,
            'end_length' => 3451,
            'maintenancetype_id' => '6',
        ]);

        # 808. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3451,
            'end_length' => 3665,
            'maintenancetype_id' => '5',
        ]);

        # 809. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3665,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 810. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3063,
            'maintenancetype_id' => '6',
        ]);

        # 811. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3063,
            'end_length' => 3113,
            'maintenancetype_id' => '5',
        ]);

        # 812. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3113,
            'end_length' => 3285,
            'maintenancetype_id' => '6',
        ]);

        # 813. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3285,
            'end_length' => 3415,
            'maintenancetype_id' => '5',
        ]);

        # 814. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3415,
            'end_length' => 3631,
            'maintenancetype_id' => '6',
        ]);

        # 815. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3631,
            'end_length' => 4005,
            'maintenancetype_id' => '5',
        ]);

        # 816. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4005,
            'end_length' => 6300,
            'maintenancetype_id' => '6',
        ]);

        # 817. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 6300,
            'end_length' => 7145,
            'maintenancetype_id' => '5',
        ]);

        # 818. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7145,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 819. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3063,
            'maintenancetype_id' => '6',
        ]);

        # 820. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3063,
            'end_length' => 3113,
            'maintenancetype_id' => '5',
        ]);

        # 821. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3113,
            'end_length' => 3285,
            'maintenancetype_id' => '6',
        ]);

        # 822. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3285,
            'end_length' => 3415,
            'maintenancetype_id' => '5',
        ]);

        # 823. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3415,
            'end_length' => 3631,
            'maintenancetype_id' => '6',
        ]);

        # 824. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3631,
            'end_length' => 4005,
            'maintenancetype_id' => '5',
        ]);

        # 825. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4005,
            'end_length' => 6300,
            'maintenancetype_id' => '6',
        ]);

        # 826. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 6300,
            'end_length' => 7145,
            'maintenancetype_id' => '5',
        ]);

        # 827. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7145,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 828. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1100,
            'maintenancetype_id' => '6',
        ]);

        # 829. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1100,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 830. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 2100,
            'maintenancetype_id' => '6',
        ]);

        # 831. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2100,
            'end_length' => 2200,
            'maintenancetype_id' => '5',
        ]);

        # 832. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2200,
            'end_length' => 4500,
            'maintenancetype_id' => '6',
        ]);

        # 833. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 4500,
            'end_length' => 4800,
            'maintenancetype_id' => '5',
        ]);

        # 834. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 4800,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 835. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5100,
            'end_length' => 5200,
            'maintenancetype_id' => '5',
        ]);

        # 836. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5200,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 837. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5400,
            'end_length' => 5600,
            'maintenancetype_id' => '5',
        ]);

        # 838. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5600,
            'end_length' => 6200,
            'maintenancetype_id' => '6',
        ]);

        # 839. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 6200,
            'end_length' => 6300,
            'maintenancetype_id' => '5',
        ]);

        # 840. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 6300,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 841. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1100,
            'maintenancetype_id' => '6',
        ]);

        # 842. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1100,
            'end_length' => 1300,
            'maintenancetype_id' => '5',
        ]);

        # 843. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 2100,
            'maintenancetype_id' => '6',
        ]);

        # 844. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2100,
            'end_length' => 2200,
            'maintenancetype_id' => '5',
        ]);

        # 845. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2200,
            'end_length' => 4500,
            'maintenancetype_id' => '6',
        ]);

        # 846. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 4500,
            'end_length' => 4800,
            'maintenancetype_id' => '5',
        ]);

        # 847. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 4800,
            'end_length' => 5100,
            'maintenancetype_id' => '6',
        ]);

        # 848. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5100,
            'end_length' => 5200,
            'maintenancetype_id' => '5',
        ]);

        # 849. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5200,
            'end_length' => 5400,
            'maintenancetype_id' => '6',
        ]);

        # 850. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5400,
            'end_length' => 5600,
            'maintenancetype_id' => '5',
        ]);

        # 851. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5600,
            'end_length' => 6200,
            'maintenancetype_id' => '6',
        ]);

        # 852. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 6200,
            'end_length' => 6300,
            'maintenancetype_id' => '5',
        ]);

        # 853. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 6300,
            'end_length' => 7700,
            'maintenancetype_id' => '6',
        ]);

        # 854. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 855. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 856. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 857. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 858. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 859. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 860. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 861. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        # 862. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1400,
            'end_length' => 1600,
            'maintenancetype_id' => '6',
        ]);

        # 863. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1600,
            'end_length' => 1700,
            'maintenancetype_id' => '5',
        ]);

        # 864. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1700,
            'end_length' => 1900,
            'maintenancetype_id' => '6',
        ]);

        # 865. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1900,
            'end_length' => 2000,
            'maintenancetype_id' => '5',
        ]);

        # 866. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2000,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);

        # 867. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenancetype_id' => '6',
        ]);

        # 868. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1400,
            'maintenancetype_id' => '5',
        ]);

        # 869. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1400,
            'end_length' => 1600,
            'maintenancetype_id' => '6',
        ]);

        # 870. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1600,
            'end_length' => 1700,
            'maintenancetype_id' => '5',
        ]);

        # 871. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1900,
            'maintenancetype_id' => '6',
        ]);

        # 872. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1900,
            'end_length' => 2000,
            'maintenancetype_id' => '5',
        ]);

        # 873. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2000,
            'end_length' => 2230,
            'maintenancetype_id' => '6',
        ]);
    }
}
