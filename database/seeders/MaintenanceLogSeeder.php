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
            'maintenance_type' => 'Rutin',
        ]);

        #2. Jalan Lingkar Masjid Agung - 2023
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Rutin',
        ]);

        #3. Jalan Lingkar Masjid Agung - 2024
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Berkala',
        ]);

        #4. Jalan Lingkar Masjid Agung - 2024
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Berkala',
        ]);

        #5. Jalan Lingkar Masjid Agung - 2025
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Rutin',
        ]);

        #6. Jalan Lingkar Masjid Agung - 2025
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Rutin',
        ]);

        #7. Jalan Lingkar Masjid Agung - 2026
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Berkala',
        ]);

        #8. Jalan Lingkar Masjid Agung - 2026
        MaintenanceLog::create([
            'road_id' => 1,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'maintenance_type' => 'Berkala',
        ]);

        #9. Jalan Merdeka - 2023
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #10. Jalan Merdeka - 2023
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #11. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 235.6,
            'maintenance_type' => 'Rutin',
        ]);

        #12. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 235.6,
            'end_length' => 361,
            'maintenance_type' => 'Berkala',
        ]);

        #13. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 361,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #14. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 164,
            'maintenance_type' => 'Rutin',
        ]);

        #15. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 164,
            'end_length' => 378.5,
            'maintenance_type' => 'Berkala',
        ]);

        #16. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 378.5,
            'end_length' => 626,
            'maintenance_type' => 'Rutin',
        ]);

        #17. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 626,
            'end_length' => 711.8,
            'maintenance_type' => 'Berkala',
        ]);

        #18. Jalan Merdeka - 2024
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 711.8,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #19. Jalan Merdeka - 2025
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #20. Jalan Merdeka - 2025
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        #21. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 164,
            'maintenance_type' => 'Berkala',
        ]);

        #22. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 164,
            'end_length' => 1254,
            'maintenance_type' => 'Rutin',
        ]);

        #23. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1254,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        #24. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 164,
            'maintenance_type' => 'Berkala',
        ]);

        #25. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 164,
            'end_length' => 1254,
            'maintenance_type' => 'Rutin',
        ]);

        #26. Jalan Merdeka - 2026
        MaintenanceLog::create([
            'road_id' => 2,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1254,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        #27. Jalan Kolonel Atmo - 2023
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #28. Jalan Kolonel Atmo - 2023
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #29. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 96,
            'maintenance_type' => 'Rutin',
        ]);

        #30. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 96,
            'end_length' => 165,
            'maintenance_type' => 'Berkala',
        ]);

        #31. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 165,
            'end_length' => 437.1,
            'maintenance_type' => 'Rutin',
        ]);

        #32. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 437.1,
            'end_length' => 512.49,
            'maintenance_type' => 'Berkala',
        ]);

        #33. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 512.49,
            'end_length' => 584,
            'maintenance_type' => 'Rutin',
        ]);

        #34. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 584,
            'end_length' => 1000,
            'maintenance_type' => 'Berkala',
        ]);

        #35. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 35,
            'maintenance_type' => 'Rutin',
        ]);

        #36. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 35,
            'end_length' => 150,
            'maintenance_type' => 'Berkala',
        ]);

        #37. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 150,
            'end_length' => 584,
            'maintenance_type' => 'Rutin',
        ]);

        #38. Jalan Kolonel Atmo - 2024
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 584,
            'end_length' => 1000,
            'maintenance_type' => 'Berkala',
        ]);

        #39. Jalan Kolonel Atmo - 2025
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #40. Jalan Kolonel Atmo - 2025
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #41. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 35,
            'maintenance_type' => 'Berkala',
        ]);

        #42. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 35,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #43. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 35,
            'maintenance_type' => 'Berkala',
        ]);

        #44. Jalan Kolonel Atmo - 2026
        MaintenanceLog::create([
            'road_id' => 3,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 35,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #45. Jalan Brigjen HM Dhanny Effendy - 2023
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #46. Jalan Brigjen HM Dhanny Effendy - 2023
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #47. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 676,
            'maintenance_type' => 'Rutin',
        ]);

        #48. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 676,
            'end_length' => 1200,
            'maintenance_type' => 'Berkala',
        ]);

        #49. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 676,
            'maintenance_type' => 'Rutin',
        ]);

        #50. Jalan Brigjen HM Dhanny Effendy - 2024
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 676,
            'end_length' => 1200,
            'maintenance_type' => 'Berkala',
        ]);

        #51. Jalan Brigjen HM Dhanny Effendy - 2025
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #52. Jalan Brigjen HM Dhanny Effendy - 2025
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #53. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 602,
            'maintenance_type' => 'Rutin',
        ]);

        #54. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 602,
            'end_length' => 802,
            'maintenance_type' => 'Berkala',
        ]);

        #55. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 802,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #56. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 602,
            'maintenance_type' => 'Rutin',
        ]);

        #57. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 602,
            'end_length' => 802,
            'maintenance_type' => 'Berkala',
        ]);

        #58. Jalan Brigjen HM Dhanny Effendy - 2026
        MaintenanceLog::create([
            'road_id' => 4,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 802,
            'end_length' => 1200,
            'maintenance_type' => 'Rutin',
        ]);

        #59. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2023
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #60. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2023
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #61. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 211,
            'maintenance_type' => 'Berkala',
        ]);

        #62. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 211,
            'end_length' => 470,
            'maintenance_type' => 'Rutin',
        ]);

        #63. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 470,
            'end_length' => 744,
            'maintenance_type' => 'Berkala',
        ]);

        #64. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 744,
            'end_length' => 878,
            'maintenance_type' => 'Rutin',
        ]);

        #65. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 878,
            'end_length' => 1230,
            'maintenance_type' => 'Berkala',
        ]);

        #66. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 211,
            'maintenance_type' => 'Berkala',
        ]);

        #67. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 211,
            'end_length' => 470,
            'maintenance_type' => 'Rutin',
        ]);

        #68. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 470,
            'end_length' => 744,
            'maintenance_type' => 'Berkala',
        ]);

        #69. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 744,
            'end_length' => 878,
            'maintenance_type' => 'Rutin',
        ]);

        #70. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2024
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 878,
            'end_length' => 1230,
            'maintenance_type' => 'Berkala',
        ]);

        #71. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2025
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #72. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2025
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #73. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2026
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #74. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2026
        MaintenanceLog::create([
            'road_id' => 5,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1230,
            'maintenance_type' => 'Rutin',
        ]);

        #75. Jalan PSW Subekti - 2023
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #76. Jalan PSW Subekti - 2023
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #77. Jalan PSW Subekti - 2024
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #78. Jalan PSW Subekti - 2024
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #79. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 320,
            'maintenance_type' => 'Berkala',
        ]);

        #80. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 320,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #81. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 320,
            'maintenance_type' => 'Berkala',
        ]);

        #82. Jalan PSW Subekti - 2025
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 320,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #83. Jalan PSW Subekti - 2026
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #84. Jalan PSW Subekti - 2026
        MaintenanceLog::create([
            'road_id' => 6,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'maintenance_type' => 'Rutin',
        ]);

        #85. Jalan Diponegoro - 2023
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #86. Jalan Diponegoro - 2023
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #87. Jalan Diponegoro - 2024
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #88. Jalan Diponegoro - 2024
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #89. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 226,
            'maintenance_type' => 'Berkala',
        ]);

        #90. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 226,
            'end_length' => 251,
            'maintenance_type' => 'Rutin',
        ]);

        #91. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 251,
            'end_length' => 729,
            'maintenance_type' => 'Berkala',
        ]);

        #92. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 729,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #93. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 226,
            'maintenance_type' => 'Berkala',
        ]);

        #94. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 226,
            'end_length' => 251,
            'maintenance_type' => 'Rutin',
        ]);

        #95. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 251,
            'end_length' => 729,
            'maintenance_type' => 'Berkala',
        ]);

        #96. Jalan Diponegoro - 2025
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 729,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        #97. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 720,
            'maintenance_type' => 'Rutin',
        ]);

        #98. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 720,
            'end_length' => 1000,
            'maintenance_type' => 'Berkala',
        ]);

        #99. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 720,
            'maintenance_type' => 'Rutin',
        ]);

        # 100. Jalan Diponegoro - 2026
        MaintenanceLog::create([
            'road_id' => 7,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 720,
            'end_length' => 1000,
            'maintenance_type' => 'Berkala',
        ]);

        # 101. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1544,
            'maintenance_type' => 'Rutin',
        ]);

        # 102. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1544,
            'end_length' => 1700,
            'maintenance_type' => 'Berkala',
        ]);

        # 103. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 220,
            'maintenance_type' => 'Rutin',
        ]);

        # 104. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 220,
            'end_length' => 432,
            'maintenance_type' => 'Berkala',
        ]);

        # 105 Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 432,
            'end_length' => 557,
            'maintenance_type' => 'Rutin',
        ]);

        # 106. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 557,
            'end_length' => 841,
            'maintenance_type' => 'Berkala',
        ]);

        # 107. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 841,
            'end_length' => 969,
            'maintenance_type' => 'Rutin',
        ]);

        # 108. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 969,
            'end_length' => 1070,
            'maintenance_type' => 'Berkala',
        ]);

        # 109. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1070,
            'end_length' => 1084,
            'maintenance_type' => 'Rutin',
        ]);

        # 110. Jalan Kapten A Rivai - 2023
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1084,
            'end_length' => 1700,
            'maintenance_type' => 'Berkala',
        ]);

        # 111. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 212,
            'maintenance_type' => 'Rutin',
        ]);

        # 112. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 212,
            'end_length' => 344,
            'maintenance_type' => 'Berkala',
        ]);

        # 113. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 344,
            'end_length' => 590,
            'maintenance_type' => 'Rutin',
        ]);

        # 114. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 590,
            'end_length' => 903,
            'maintenance_type' => 'Berkala',
        ]);

        # 115. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 903,
            'end_length' => 1040.4,
            'maintenance_type' => 'Rutin',
        ]);

        # 116. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1040.4,
            'end_length' => 1091,
            'maintenance_type' => 'Berkala',
        ]);

        # 117. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1091,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 118. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 445.6,
            'maintenance_type' => 'Rutin',
        ]);

        # 119. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 445.6,
            'end_length' => 570,
            'maintenance_type' => 'Berkala',
        ]);

        # 120. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 570,
            'end_length' => 883,
            'maintenance_type' => 'Rutin',
        ]);

        # 121. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 883,
            'end_length' => 921,
            'maintenance_type' => 'Berkala',
        ]);

        # 122. Jalan Kapten A Rivai - 2024
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 921,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 123. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 244,
            'maintenance_type' => 'Berkala',
        ]);

        # 124. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 244,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 125. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 385,
            'maintenance_type' => 'Berkala',
        ]);

        # 126. Jalan Kapten A Rivai - 2025
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 385,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 127. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 900,
            'maintenance_type' => 'Rutin',
        ]);

        # 128. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 900,
            'end_length' => 1171,
            'maintenance_type' => 'Berkala',
        ]);

        # 129. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1171,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 130. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 900,
            'maintenance_type' => 'Rutin',
        ]);

        # 131. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 900,
            'end_length' => 1171,
            'maintenance_type' => 'Berkala',
        ]);

        # 132. Jalan Kapten A Rivai - 2026
        MaintenanceLog::create([
            'road_id' => 8,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1171,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 133. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 679,
            'maintenance_type' => 'Berkala',
        ]);

        # 134. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 679,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 135. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 679,
            'maintenance_type' => 'Berkala',
        ]);

        # 136. Jalan Walikota H Husni - 2023
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 679,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 137. Jalan Walikota H Husni - 2024
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 138. Jalan Walikota H Husni - 2024
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 139. Jalan Walikota H Husni - 2025
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 140. Jalan Walikota H Husni - 2025
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 141. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 142. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'maintenance_type' => 'Rutin',
        ]);

        # 143. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 396.2,
            'end_length' => 588,
            'maintenance_type' => 'Drainase',
        ]);

        # 144. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 487.3,
            'end_length' => 540,
            'maintenance_type' => 'Drainase',
        ]);

        # 145. Jalan Walikota H Husni - 2026
        MaintenanceLog::create([
            'road_id' => 9,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 630,
            'maintenance_type' => 'DPT Longsoran',
        ]);

        # 146. Jalan Jaksa Agung R Soeprapto - 2023
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 147. Jalan Jaksa Agung R Soeprapto - 2023
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 148. Jalan Jaksa Agung R Soeprapto - 2024
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 149. Jalan Jaksa Agung R Soeprapto - 2024
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 150. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1052,
            'maintenance_type' => 'Berkala',
        ]);

        # 151. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1052,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 152. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1052,
            'maintenance_type' => 'Berkala',
        ]);

        # 153. Jalan Jaksa Agung R Soeprapto - 2025
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1052,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 154. Jalan Jaksa Agung R Soeprapto - 2026
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 155. Jalan Jaksa Agung R Soeprapto - 2026
        MaintenanceLog::create([
            'road_id' => 10,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'maintenance_type' => 'Rutin',
        ]);

        # 156. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 16.68,
            'maintenance_type' => 'Berkala',
        ]);

        # 157. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 16.68,
            'end_length' => 625,
            'maintenance_type' => 'Rutin',
        ]);

        # 158. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 625,
            'end_length' => 757,
            'maintenance_type' => 'Berkala',
        ]);

        # 159. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 757,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 160. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 16.68,
            'maintenance_type' => 'Berkala',
        ]);

        # 161. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 16.68,
            'end_length' => 625,
            'maintenance_type' => 'Rutin',
        ]);

        # 162. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 625,
            'end_length' => 757,
            'maintenance_type' => 'Berkala',
        ]);

        # 163. Jalan M Isa - 2023
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 757,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 164. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 58,
            'maintenance_type' => 'Rutin',
        ]);

        # 165. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 58,
            'end_length' => 600,
            'maintenance_type' => 'Berkala',
        ]);

        # 166. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 600,
            'end_length' => 741,
            'maintenance_type' => 'Rutin',
        ]);

        # 167. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 741,
            'end_length' => 951,
            'maintenance_type' => 'Berkala',
        ]);

        # 168. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 951,
            'end_length' => 1242,
            'maintenance_type' => 'Rutin',
        ]);

        # 169. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1242,
            'end_length' => 1326,
            'maintenance_type' => 'Berkala',
        ]);

        # 170. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1326,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 171. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 58,
            'maintenance_type' => 'Rutin',
        ]);

        # 172. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 58,
            'end_length' => 600,
            'maintenance_type' => 'Berkala',
        ]);

        # 173. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 600,
            'end_length' => 741,
            'maintenance_type' => 'Rutin',
        ]);

        # 174. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 741,
            'end_length' => 951,
            'maintenance_type' => 'Berkala',
        ]);

        # 175. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 951,
            'end_length' => 1242,
            'maintenance_type' => 'Rutin',
        ]);

        # 176. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1242,
            'end_length' => 1326,
            'maintenance_type' => 'Berkala',
        ]);

        # 177. Jalan M Isa - 2024
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1326,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 178. Jalan M Isa - 2025
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 179. Jalan M Isa - 2025
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 180. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 951,
            'maintenance_type' => 'Rutin',
        ]);

        # 181. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 951,
            'end_length' => 1151,
            'maintenance_type' => 'Berkala',
        ]);

        # 182. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1151,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 183. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 951,
            'maintenance_type' => 'Rutin',
        ]);

        # 184. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 951,
            'end_length' => 1151,
            'maintenance_type' => 'Berkala',
        ]);

        # 185. Jalan M Isa - 2026
        MaintenanceLog::create([
            'road_id' => 11,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1151,
            'end_length' => 2180,
            'maintenance_type' => 'Rutin',
        ]);

        # 186. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 950,
            'maintenance_type' => 'Rutin',
        ]);

        # 187. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 950,
            'end_length' => 1630,
            'maintenance_type' => 'Berkala',
        ]);

        # 188. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 189. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 50,
            'maintenance_type' => 'Rutin',
        ]);

        # 190. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 50,
            'end_length' => 856,
            'maintenance_type' => 'Berkala',
        ]);

        # 191. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 856,
            'end_length' => 1138,
            'maintenance_type' => 'Rutin',
        ]);

        # 192. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1138,
            'end_length' => 1513,
            'maintenance_type' => 'Berkala',
        ]);

        # 193. Jalan Angkatan 45 - 2023
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1513,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 194. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 570,
            'maintenance_type' => 'Rutin',
        ]);

        # 195. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 570,
            'end_length' => 629,
            'maintenance_type' => 'Berkala',
        ]);

        # 196. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 629,
            'end_length' => 709,
            'maintenance_type' => 'Rutin',
        ]);

        # 197. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 709,
            'end_length' => 992,
            'maintenance_type' => 'Berkala',
        ]);

        # 198. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 992,
            'end_length' => 1630,
            'maintenance_type' => 'Rutin',
        ]);

        # 199. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 1903,
            'maintenance_type' => 'Berkala',
        ]);

        # 200. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 659,
            'maintenance_type' => 'Rutin',
        ]);

        # 201. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 659,
            'end_length' => 1700,
            'maintenance_type' => 'Berkala',
        ]);

        # 202. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1887,
            'maintenance_type' => 'Rutin',
        ]);

        # 203. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1887,
            'end_length' => 1986,
            'maintenance_type' => 'Berkala',
        ]);

        # 204. Jalan Angkatan 45 - 2024
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1986,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 205. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 122.5,
            'maintenance_type' => 'Berkala',
        ]);

        # 206. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 122.5,
            'end_length' => 1407,
            'maintenance_type' => 'Rutin',
        ]);

        # 207. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1407,
            'end_length' => 1505,
            'maintenance_type' => 'Berkala',
        ]);

        # 208. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1505,
            'end_length' => 1569,
            'maintenance_type' => 'Rutin',
        ]);

        # 209. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1569,
            'end_length' => 1574.7,
            'maintenance_type' => 'Berkala',
        ]);

        # 210. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1574.7,
            'end_length' => 1593,
            'maintenance_type' => 'Rutin',
        ]);

        # 211. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1593,
            'end_length' => 1630,
            'maintenance_type' => 'Berkala',
        ]);

        # 212. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1630,
            'end_length' => 1903,
            'maintenance_type' => 'Rutin',
        ]);

        # 213. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1903,
            'end_length' => 1965,
            'maintenance_type' => 'Berkala',
        ]);

        # 214. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1965,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 215. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 392,
            'maintenance_type' => 'Rutin',
        ]);

        # 216. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 392,
            'end_length' => 550,
            'maintenance_type' => 'Berkala',
        ]);

        # 217. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 550,
            'end_length' => 862,
            'maintenance_type' => 'Rutin',
        ]);

        # 218. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 862,
            'end_length' => 989,
            'maintenance_type' => 'Berkala',
        ]);

        # 219. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 989,
            'end_length' => 1615,
            'maintenance_type' => 'Rutin',
        ]);

        # 220. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1615,
            'end_length' => 1659,
            'maintenance_type' => 'Berkala',
        ]);

        # 221. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1659,
            'end_length' => 1700,
            'maintenance_type' => 'Rutin',
        ]);

        # 222. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1798,
            'maintenance_type' => 'Berkala',
        ]);

        # 223. Jalan Angkatan 45 - 2025
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1798,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 224. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 250,
            'maintenance_type' => 'Berkala',
        ]);

        # 225. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 250,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 226. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 250,
            'maintenance_type' => 'Berkala',
        ]);

        # 227. Jalan Angkatan 45 - 2026
        MaintenanceLog::create([
            'road_id' => 12,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 250,
            'end_length' => 2000,
            'maintenance_type' => 'Rutin',
        ]);

        # 228. Jalan Sultan M Mansyur - 2023
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 229. Jalan Sultan M Mansyur - 2023
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 230. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 60,
            'maintenance_type' => 'Berkala',
        ]);

        # 231. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 60,
            'end_length' => 1500,
            'maintenance_type' => 'Rutin',
        ]);

        # 232. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1500,
            'end_length' => 2000,
            'maintenance_type' => 'Berkala',
        ]);

        # 233. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2000,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 234. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 60,
            'maintenance_type' => 'Berkala',
        ]);

        # 235. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 60,
            'end_length' => 1500,
            'maintenance_type' => 'Rutin',
        ]);

        # 236. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1500,
            'end_length' => 2000,
            'maintenance_type' => 'Berkala',
        ]);

        # 237. Jalan Sultan M Mansyur - 2024
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2000,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 238. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 126,
            'maintenance_type' => 'Drainase',
        ]);

        # 239. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 182,
            'end_length' => 205,
            'maintenance_type' => 'Drainase',
        ]);

        # 240. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 583,
            'maintenance_type' => 'Berkala',
        ]);

        # 241. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 583,
            'end_length' => 1902,
            'maintenance_type' => 'Rutin',
        ]);

        # 242. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1902,
            'end_length' => 2500,
            'maintenance_type' => 'Berkala',
        ]);

        # 243. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2500,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 244. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 583,
            'maintenance_type' => 'Berkala',
        ]);

        # 245. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 583,
            'end_length' => 1902,
            'maintenance_type' => 'Rutin',
        ]);

        # 246. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1902,
            'end_length' => 2500,
            'maintenance_type' => 'Berkala',
        ]);

        # 247. Jalan Sultan M Mansyur - 2025
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2500,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 248. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2500,
            'maintenance_type' => 'Rutin',
        ]);

        # 249. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2500,
            'end_length' => 2750,
            'maintenance_type' => 'Berkala',
        ]);

        # 250. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2750,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 251. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2500,
            'maintenance_type' => 'Rutin',
        ]);

        # 252. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2500,
            'end_length' => 2750,
            'maintenance_type' => 'Berkala',
        ]);

        # 253. Jalan Sultan M Mansyur - 2026
        MaintenanceLog::create([
            'road_id' => 13,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2750,
            'end_length' => 4220,
            'maintenance_type' => 'Rutin',
        ]);

        # 254. Jalan Srijaya Negara - 2023
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 255. Jalan Srijaya Negara - 2023
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 256. Jalan Srijaya Negara - 2024
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 257. Jalan Srijaya Negara - 2024
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 258. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 259. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1279,
            'end_length' => 1279,
            'maintenance_type' => 'Drainase',
        ]);

        # 259. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1279,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 260. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 261. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1279,
            'end_length' => 1279,
            'maintenance_type' => 'Drainase',
        ]);

        # 261. Jalan Srijaya Negara - 2025
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1279,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 262. Jalan Srijaya Negara - 2026
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 263. Jalan Srijaya Negara - 2026
        MaintenanceLog::create([
            'road_id' => 14,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1690,
            'maintenance_type' => 'Rutin',
        ]);

        # 264. Jalan AKBP Cek Agus - 2023
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 265. Jalan AKBP Cek Agus - 2023
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 266. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 375,
            'maintenance_type' => 'Berkala',
        ]);

        # 267. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 375,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 268. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 375,
            'maintenance_type' => 'Berkala',
        ]);

        # 269. Jalan AKBP Cek Agus - 2024
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 375,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 270. Jalan AKBP Cek Agus - 2025
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 271. Jalan AKBP Cek Agus - 2025
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 272. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 850,
            'maintenance_type' => 'Rutin',
        ]);

        # 273. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 850,
            'end_length' => 1050,
            'maintenance_type' => 'Berkala',
        ]);

        # 274. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1050,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 275. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 850,
            'maintenance_type' => 'Rutin',
        ]);

        # 276. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 850,
            'end_length' => 1050,
            'maintenance_type' => 'Berkala',
        ]);

        # 277. Jalan AKBP Cek Agus - 2026
        MaintenanceLog::create([
            'road_id' => 15,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1050,
            'end_length' => 1310,
            'maintenance_type' => 'Rutin',
        ]);

        # 278. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1667,
            'maintenance_type' => 'Rutin',
        ]);

        # 279. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1667,
            'end_length' => 1823,
            'maintenance_type' => 'Berkala',
        ]);

        # 280. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1823,
            'end_length' => 1915,
            'maintenance_type' => 'Rutin',
        ]);

        # 281. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1915,
            'end_length' => 2025,
            'maintenance_type' => 'Berkala',
        ]);

        # 282. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2025,
            'end_length' => 2387,
            'maintenance_type' => 'Rutin',
        ]);

        # 283. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2387,
            'end_length' => 2981,
            'maintenance_type' => 'Berkala',
        ]);

        # 284. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2981,
            'end_length' => 3027,
            'maintenance_type' => 'Rutin',
        ]);

        # 285. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3027,
            'end_length' => 3245,
            'maintenance_type' => 'Berkala',
        ]);

        # 286. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3245,
            'end_length' => 3607,
            'maintenance_type' => 'Rutin',
        ]);

        # 287. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3607,
            'end_length' => 3865,
            'maintenance_type' => 'Berkala',
        ]);

        # 288. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3865,
            'end_length' => 3915,
            'maintenance_type' => 'Rutin',
        ]);

        # 289. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3915,
            'end_length' => 3983,
            'maintenance_type' => 'Berkala',
        ]);

        # 290. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 3983,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 291. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2387,
            'maintenance_type' => 'Rutin',
        ]);

        # 292. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2387,
            'end_length' => 2981,
            'maintenance_type' => 'Berkala',
        ]);

        # 293. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2981,
            'end_length' => 3027,
            'maintenance_type' => 'Rutin',
        ]);

        # 294. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3027,
            'end_length' => 3245,
            'maintenance_type' => 'Berkala',
        ]);

        # 295. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3245,
            'end_length' => 3607,
            'maintenance_type' => 'Rutin',
        ]);

        # 296. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3607,
            'end_length' => 3865,
            'maintenance_type' => 'Berkala',
        ]);

        # 297. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3865,
            'end_length' => 3915,
            'maintenance_type' => 'Rutin',
        ]);

        # 298. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3915,
            'end_length' => 3983,
            'maintenance_type' => 'Berkala',
        ]);

        # 299. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2023
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 3983,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 300. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 100,
            'maintenance_type' => 'Berkala',
        ]);

        # 301. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 100,
            'end_length' => 140,
            'maintenance_type' => 'Rutin',
        ]);

        # 302. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 140,
            'end_length' => 218,
            'maintenance_type' => 'Berkala',
        ]);

        # 303. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 218,
            'end_length' => 347,
            'maintenance_type' => 'Rutin',
        ]);

        # 304. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 347,
            'end_length' => 387,
            'maintenance_type' => 'Berkala',
        ]);

        # 305. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 387,
            'end_length' => 433.5,
            'maintenance_type' => 'Rutin',
        ]);

        # 306. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 433.5,
            'end_length' => 477,
            'maintenance_type' => 'Berkala',
        ]);

        # 307. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 477,
            'end_length' => 926,
            'maintenance_type' => 'Rutin',
        ]);

        # 308. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 926,
            'end_length' => 1258,
            'maintenance_type' => 'Berkala',
        ]);

        # 309. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1258,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 310. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1690,
            'maintenance_type' => 'Berkala',
        ]);

        # 311. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1690,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 312. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 86,
            'maintenance_type' => 'Rutin',
        ]);

        # 313. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 86,
            'end_length' => 91,
            'maintenance_type' => 'Berkala',
        ]);

        # 314. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 91,
            'end_length' => 100,
            'maintenance_type' => 'Rutin',
        ]);

        # 315. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 100,
            'end_length' => 200,
            'maintenance_type' => 'Berkala',
        ]);

        # 316. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 200,
            'end_length' => 327,
            'maintenance_type' => 'Rutin',
        ]);

        # 317. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 327,
            'end_length' => 343,
            'maintenance_type' => 'Berkala',
        ]);

        # 318. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 343,
            'end_length' => 480,
            'maintenance_type' => 'Rutin',
        ]);

        # 319. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 480,
            'end_length' => 493.5,
            'maintenance_type' => 'Berkala',
        ]);

        # 320. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 493.5,
            'end_length' => 627,
            'maintenance_type' => 'Rutin',
        ]);

        # 321. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 627,
            'end_length' => 640,
            'maintenance_type' => 'Berkala',
        ]);

        # 322. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 640,
            'end_length' => 718,
            'maintenance_type' => 'Rutin',
        ]);

        # 323. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 718,
            'end_length' => 770,
            'maintenance_type' => 'Berkala',
        ]);

        # 324. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 770,
            'end_length' => 1171,
            'maintenance_type' => 'Rutin',
        ]);

        # 325. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1171,
            'end_length' => 1233,
            'maintenance_type' => 'Berkala',
        ]);

        # 326. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1233,
            'end_length' => 1262,
            'maintenance_type' => 'Rutin',
        ]);

        # 327. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1262,
            'end_length' => 1319,
            'maintenance_type' => 'Berkala',
        ]);

        # 328. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1319,
            'end_length' => 1389,
            'maintenance_type' => 'Rutin',
        ]);

        # 329. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1389,
            'end_length' => 1439,
            'maintenance_type' => 'Berkala',
        ]);

        # 330. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1439,
            'end_length' => 1497,
            'maintenance_type' => 'Rutin',
        ]);

        # 331. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1497,
            'end_length' => 1552,
            'maintenance_type' => 'Berkala',
        ]);

        # 332. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2024
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1552,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 333. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 98,
            'maintenance_type' => 'Rutin',
        ]);

        # 334. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 98,
            'end_length' => 129,
            'maintenance_type' => 'Berkala',
        ]);

        # 335. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 129,
            'end_length' => 207,
            'maintenance_type' => 'Rutin',
        ]);

        # 336. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 207,
            'end_length' => 244,
            'maintenance_type' => 'Berkala',
        ]);

        # 337. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 244,
            'end_length' => 301,
            'maintenance_type' => 'Rutin',
        ]);

        # 338. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 301,
            'end_length' => 410,
            'maintenance_type' => 'Berkala',
        ]);

        # 339. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 410,
            'end_length' => 452,
            'maintenance_type' => 'Rutin',
        ]);

        # 340. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 452,
            'end_length' => 485,
            'maintenance_type' => 'Berkala',
        ]);

        # 341. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 485,
            'end_length' => 635,
            'maintenance_type' => 'Rutin',
        ]);

        # 342. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 635,
            'end_length' => 907,
            'maintenance_type' => 'Berkala',
        ]);

        # 343. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 907,
            'end_length' => 3945,
            'maintenance_type' => 'Rutin',
        ]);

        # 344. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3945,
            'end_length' => 4129,
            'maintenance_type' => 'Berkala',
        ]);

        # 345. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4129,
            'end_length' => 4153,
            'maintenance_type' => 'Rutin',
        ]);

        # 346. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4153,
            'end_length' => 4160,
            'maintenance_type' => 'Berkala',
        ]);

        # 347. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4160,
            'end_length' => 4270,
            'maintenance_type' => 'Rutin',
        ]);

        # 348. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4270,
            'end_length' => 4300,
            'maintenance_type' => 'Berkala',
        ]);

        # 349. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4300,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 350. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 87,
            'maintenance_type' => 'Berkala',
        ]);

        # 351. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 87,
            'end_length' => 189,
            'maintenance_type' => 'Rutin',
        ]);

        # 352. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 189,
            'end_length' => 331,
            'maintenance_type' => 'Berkala',
        ]);

        # 353. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 331,
            'end_length' => 347,
            'maintenance_type' => 'Rutin',
        ]);

        # 354. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 347,
            'end_length' => 603,
            'maintenance_type' => 'Berkala',
        ]);

        # 355. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 603,
            'end_length' => 629,
            'maintenance_type' => 'Rutin',
        ]);

        # 356. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 629,
            'end_length' => 639,
            'maintenance_type' => 'Berkala',
        ]);

        # 357. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 639,
            'end_length' => 717,
            'maintenance_type' => 'Rutin',
        ]);

        # 358. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 717,
            'end_length' => 778,
            'maintenance_type' => 'Berkala',
        ]);

        # 359. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 778,
            'end_length' => 870,
            'maintenance_type' => 'Rutin',
        ]);

        # 360. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 870,
            'end_length' => 900,
            'maintenance_type' => 'Berkala',
        ]);

        # 361. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 900,
            'end_length' => 1108,
            'maintenance_type' => 'Rutin',
        ]);

        # 362. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1108,
            'end_length' => 1142,
            'maintenance_type' => 'Berkala',
        ]);

        # 363. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1142,
            'end_length' => 3945,
            'maintenance_type' => 'Rutin',
        ]);

        # 364. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3945,
            'end_length' => 4129,
            'maintenance_type' => 'Berkala',
        ]);

        # 365. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4129,
            'end_length' => 4153,
            'maintenance_type' => 'Rutin',
        ]);

        # 366. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4153,
            'end_length' => 4160,
            'maintenance_type' => 'Berkala',
        ]);

        # 367. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4160,
            'end_length' => 4270,
            'maintenance_type' => 'Rutin',
        ]);

        # 368. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4270,
            'end_length' => 4300,
            'maintenance_type' => 'Berkala',
        ]);

        # 369. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2025
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4300,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 370. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        # 371. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1000,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 372. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 373. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2400,
            'end_length' => 2670,
            'maintenance_type' => 'Berkala',
        ]);

        # 374. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2670,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 375. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'maintenance_type' => 'Rutin',
        ]);

        # 376. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1000,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 377. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 378. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2400,
            'end_length' => 2670,
            'maintenance_type' => 'Berkala',
        ]);

        # 379. Jalan Pangeran Ratu – Pasar Induk – Simpang Jalan Pendidikan - 2026
        MaintenanceLog::create([
            'road_id' => 16,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2670,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 380. Jalan DI Panjaitan - 2023
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 381. Jalan DI Panjaitan - 2023
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 382. Jalan DI Panjaitan - 2024
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 383. Jalan DI Panjaitan - 2024
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 384. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 108,
            'maintenance_type' => 'Berkala',
        ]);

        # 385. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 108,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 386. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 108,
            'maintenance_type' => 'Berkala',
        ]);

        # 387. Jalan DI Panjaitan - 2025
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 108,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 388. Jalan DI Panjaitan - 2026
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 389. Jalan DI Panjaitan - 2026
        MaintenanceLog::create([
            'road_id' => 17,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3400,
            'maintenance_type' => 'Rutin',
        ]);

        # 390. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 19,
            'maintenance_type' => 'Rutin',
        ]);

        # 391. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 19,
            'end_length' => 145,
            'maintenance_type' => 'Berkala',
        ]);

        # 392. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 145,
            'end_length' => 195,
            'maintenance_type' => 'Rutin',
        ]);

        # 393. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 195,
            'end_length' => 300,
            'maintenance_type' => 'Berkala',
        ]);

        # 394. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 300,
            'end_length' => 665,
            'maintenance_type' => 'Rutin',
        ]);

        # 395. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 665,
            'end_length' => 730,
            'maintenance_type' => 'Berkala',
        ]);

        # 396. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 730,
            'end_length' => 807,
            'maintenance_type' => 'Rutin',
        ]);

        # 397. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 807,
            'end_length' => 970,
            'maintenance_type' => 'Berkala',
        ]);

        # 398. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 970,
            'end_length' => 1596,
            'maintenance_type' => 'Rutin',
        ]);

        # 399. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1596,
            'end_length' => 1672,
            'maintenance_type' => 'Berkala',
        ]);

        # 400. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1672,
            'end_length' => 1950,
            'maintenance_type' => 'Rutin',
        ]);

        # 401. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1950,
            'end_length' => 2135,
            'maintenance_type' => 'Berkala',
        ]);

        # 402. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2135,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 403. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 19,
            'maintenance_type' => 'Rutin',
        ]);

        # 404. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 19,
            'end_length' => 145,
            'maintenance_type' => 'Berkala',
        ]);

        # 405. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 145,
            'end_length' => 195,
            'maintenance_type' => 'Rutin',
        ]);

        # 406. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 195,
            'end_length' => 300,
            'maintenance_type' => 'Berkala',
        ]);

        # 407. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 300,
            'end_length' => 665,
            'maintenance_type' => 'Rutin',
        ]);

        # 408. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 665,
            'end_length' => 730,
            'maintenance_type' => 'Berkala',
        ]);

        # 409. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 730,
            'end_length' => 807,
            'maintenance_type' => 'Rutin',
        ]);

        # 410. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 807,
            'end_length' => 970,
            'maintenance_type' => 'Berkala',
        ]);

        # 411. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 970,
            'end_length' => 1596,
            'maintenance_type' => 'Rutin',
        ]);

        # 412. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1596,
            'end_length' => 1672,
            'maintenance_type' => 'Berkala',
        ]);

        # 413. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1672,
            'end_length' => 1950,
            'maintenance_type' => 'Rutin',
        ]);

        # 414. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1950,
            'end_length' => 2135,
            'maintenance_type' => 'Berkala',
        ]);

        # 415. Jalan MP Mangkunegara - 2023
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2135,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 416. Jalan MP Mangkunegara - 2024
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 417. Jalan MP Mangkunegara - 2024
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 418. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 140,
            'maintenance_type' => 'Rutin',
        ]);

        # 419. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 140,
            'end_length' => 485,
            'maintenance_type' => 'Berkala',
        ]);

        # 420. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 485,
            'end_length' => 537,
            'maintenance_type' => 'Rutin',
        ]);

        # 421. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 537,
            'end_length' => 588,
            'maintenance_type' => 'Berkala',
        ]);

        # 422. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 588,
            'end_length' => 740,
            'maintenance_type' => 'Berkala',
        ]);

        # 423. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 740,
            'end_length' => 1221,
            'maintenance_type' => 'Rutin',
        ]);

        # 424. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1221,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 425. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1350,
            'maintenance_type' => 'Berkala',
        ]);

        # 426. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1350,
            'end_length' => 1500,
            'maintenance_type' => 'Rutin',
        ]);

        # 427. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1500,
            'end_length' => 1628,
            'maintenance_type' => 'Berkala',
        ]);

        # 428. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenance_type' => 'Rutin',
        ]);

        # 429. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenance_type' => 'Berkala',
        ]);

        # 430. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenance_type' => 'Rutin',
        ]);

        # 431. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2119,
            'end_length' => 2300,
            'maintenance_type' => 'Berkala',
        ]);

        # 432. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2300,
            'end_length' => 2439,
            'maintenance_type' => 'Berkala',
        ]);

        # 433. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2439,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 434. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1109,
            'end_length' => 1121,
            'maintenance_type' => 'Drainase',
        ]);

        # 435. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2139,
            'end_length' => 2141.1,
            'maintenance_type' => 'Drainase',
        ]);

        # 436. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 140,
            'maintenance_type' => 'Rutin',
        ]);

        # 437. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 140,
            'end_length' => 485,
            'maintenance_type' => 'Berkala',
        ]);

        # 438. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 485,
            'end_length' => 537,
            'maintenance_type' => 'Rutin',
        ]);

        # 439. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 537,
            'end_length' => 588,
            'maintenance_type' => 'Berkala',
        ]);

        # 440. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 588,
            'end_length' => 740,
            'maintenance_type' => 'Berkala',
        ]);

        # 441. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 740,
            'end_length' => 1221,
            'maintenance_type' => 'Rutin',
        ]);

        # 442. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1221,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 443. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1350,
            'maintenance_type' => 'Berkala',
        ]);

        # 444. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1350,
            'end_length' => 1500,
            'maintenance_type' => 'Rutin',
        ]);

        # 445. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1500,
            'end_length' => 1628,
            'maintenance_type' => 'Berkala',
        ]);

        # 446. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenance_type' => 'Rutin',
        ]);

        # 447. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenance_type' => 'Berkala',
        ]);

        # 448. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenance_type' => 'Rutin',
        ]);

        # 449. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2119,
            'end_length' => 2300,
            'maintenance_type' => 'Berkala',
        ]);

        # 450. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2300,
            'end_length' => 2439,
            'maintenance_type' => 'Berkala',
        ]);

        # 451. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2439,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 452. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 588,
            'end_length' => 624,
            'maintenance_type' => 'Drainase',
        ]);

        # 453. Jalan MP Mangkunegara - 2025
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1744,
            'end_length' => 1788,
            'maintenance_type' => 'Drainase',
        ]);

        # 454. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1164,
            'maintenance_type' => 'Rutin',
        ]);

        # 455. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1164,
            'end_length' => 1221,
            'maintenance_type' => 'Berkala',
        ]);

        # 456. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1221,
            'end_length' => 1628,
            'maintenance_type' => 'Rutin',
        ]);

        # 457. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenance_type' => 'Berkala',
        ]);

        # 458. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenance_type' => 'Rutin',
        ]);

        # 459. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenance_type' => 'Berkala',
        ]);

        # 460. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2119,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 461. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1164,
            'maintenance_type' => 'Rutin',
        ]);

        # 462. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1164,
            'end_length' => 1221,
            'maintenance_type' => 'Berkala',
        ]);

        # 463. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1221,
            'end_length' => 1628,
            'maintenance_type' => 'Rutin',
        ]);

        # 464. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1628,
            'end_length' => 1718,
            'maintenance_type' => 'Berkala',
        ]);

        # 465. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1718,
            'end_length' => 1936,
            'maintenance_type' => 'Rutin',
        ]);

        # 466. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1936,
            'end_length' => 2119,
            'maintenance_type' => 'Berkala',
        ]);

        # 467. Jalan MP Mangkunegara - 2026
        MaintenanceLog::create([
            'road_id' => 18,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2119,
            'end_length' => 2580,
            'maintenance_type' => 'Rutin',
        ]);

        # 468. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 156,
            'maintenance_type' => 'Berkala',
        ]);

        # 469. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 156,
            'end_length' => 1127,
            'maintenance_type' => 'Rutin',
        ]);

        # 470. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1127,
            'end_length' => 1555,
            'maintenance_type' => 'Berkala',
        ]);

        # 471. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1555,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 472. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 156,
            'maintenance_type' => 'Berkala',
        ]);

        # 473. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 156,
            'end_length' => 1127,
            'maintenance_type' => 'Rutin',
        ]);

        # 474. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1127,
            'end_length' => 1555,
            'maintenance_type' => 'Berkala',
        ]);

        # 475. Jalan Mayor Zen - 2023
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1555,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 476. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 239,
            'maintenance_type' => 'Rutin',
        ]);

        # 477. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 239,
            'end_length' => 518,
            'maintenance_type' => 'Berkala',
        ]);

        # 478. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 518,
            'end_length' => 532,
            'maintenance_type' => 'Rutin',
        ]);

        # 479. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 532,
            'end_length' => 945,
            'maintenance_type' => 'Berkala',
        ]);

        # 480. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 945,
            'end_length' => 970,
            'maintenance_type' => 'Rutin',
        ]);

        # 481. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 970,
            'end_length' => 1130,
            'maintenance_type' => 'Berkala',
        ]);

        # 482. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1130,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 483. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 239,
            'maintenance_type' => 'Rutin',
        ]);

        # 484. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 239,
            'end_length' => 518,
            'maintenance_type' => 'Berkala',
        ]);

        # 485. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 518,
            'end_length' => 532,
            'maintenance_type' => 'Rutin',
        ]);

        # 486. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 532,
            'end_length' => 945,
            'maintenance_type' => 'Berkala',
        ]);

        # 487. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 945,
            'end_length' => 970,
            'maintenance_type' => 'Rutin',
        ]);

        # 488. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 970,
            'end_length' => 1130,
            'maintenance_type' => 'Berkala',
        ]);

        # 489. Jalan Mayor Zen - 2024
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1130,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 490. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 160,
            'maintenance_type' => 'Rutin',
        ]);

        # 491. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 160,
            'end_length' => 237,
            'maintenance_type' => 'Berkala',
        ]);

        # 492. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 237,
            'end_length' => 519,
            'maintenance_type' => 'Rutin',
        ]);

        # 493. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 519,
            'end_length' => 531,
            'maintenance_type' => 'Berkala',
        ]);

        # 494. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 531,
            'end_length' => 1551,
            'maintenance_type' => 'Rutin',
        ]);

        # 495. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1551,
            'end_length' => 2234,
            'maintenance_type' => 'Berkala',
        ]);

        # 496. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2234,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 497. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 160,
            'maintenance_type' => 'Rutin',
        ]);

        # 498. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 160,
            'end_length' => 237,
            'maintenance_type' => 'Berkala',
        ]);

        # 499. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 237,
            'end_length' => 519,
            'maintenance_type' => 'Rutin',
        ]);

        # 500. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 519,
            'end_length' => 531,
            'maintenance_type' => 'Berkala',
        ]);

        # 501. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 531,
            'end_length' => 1551,
            'maintenance_type' => 'Rutin',
        ]);

        # 502. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1551,
            'end_length' => 2234,
            'maintenance_type' => 'Berkala',
        ]);

        # 503. Jalan Mayor Zen - 2025
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2234,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 504. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2234,
            'maintenance_type' => 'Rutin',
        ]);

        # 505. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2234,
            'end_length' => 2384,
            'maintenance_type' => 'Berkala',
        ]);

        # 506. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2384,
            'end_length' => 2600,
            'maintenance_type' => 'Rutin',
        ]);

        # 507. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2600,
            'end_length' => 2780,
            'maintenance_type' => 'Berkala',
        ]);

        # 508. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2780,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 509. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2234,
            'maintenance_type' => 'Rutin',
        ]);

        # 510. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2234,
            'end_length' => 2384,
            'maintenance_type' => 'Berkala',
        ]);

        # 511. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2384,
            'end_length' => 2600,
            'maintenance_type' => 'Rutin',
        ]);

        # 512. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2600,
            'end_length' => 2780,
            'maintenance_type' => 'Berkala',
        ]);

        # 513. Jalan Mayor Zen - 2026
        MaintenanceLog::create([
            'road_id' => 19,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2780,
            'end_length' => 5000,
            'maintenance_type' => 'Rutin',
        ]);

        # 514. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 75,
            'maintenance_type' => 'Berkala',
        ]);

        # 515. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 75,
            'end_length' => 415,
            'maintenance_type' => 'Rutin',
        ]);

        # 516. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 415,
            'end_length' => 467,
            'maintenance_type' => 'Berkala',
        ]);

        # 517. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 467,
            'end_length' => 481,
            'maintenance_type' => 'Rutin',
        ]);

        # 518. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 481,
            'end_length' => 722.9,
            'maintenance_type' => 'Berkala',
        ]);

        # 519. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 722.9,
            'end_length' => 770,
            'maintenance_type' => 'Rutin',
        ]);

        # 520. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 770,
            'end_length' => 1100,
            'maintenance_type' => 'Berkala',
        ]);

        # 521. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1100,
            'end_length' => 1136,
            'maintenance_type' => 'Berkala',
        ]);

        # 522. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1136,
            'end_length' => 1170,
            'maintenance_type' => 'Berkala',
        ]);

        # 523. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1170,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 524. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 75,
            'maintenance_type' => 'Berkala',
        ]);

        # 525. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 75,
            'end_length' => 415,
            'maintenance_type' => 'Rutin',
        ]);

        # 526. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 415,
            'end_length' => 467,
            'maintenance_type' => 'Berkala',
        ]);

        # 527. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 467,
            'end_length' => 481,
            'maintenance_type' => 'Rutin',
        ]);

        # 528. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 481,
            'end_length' => 722.9,
            'maintenance_type' => 'Berkala',
        ]);

        # 529. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 722.9,
            'end_length' => 770,
            'maintenance_type' => 'Rutin',
        ]);

        # 530. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 770,
            'end_length' => 1170,
            'maintenance_type' => 'Berkala',
        ]);

        # 531. Jalan Pangeran Ayin – Batas Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1170,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 532. Jalan Pangeran Ayin – Batas Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 533. Jalan Pangeran Ayin – Batas Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 534. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 77,
            'maintenance_type' => 'Rutin',
        ]);

        # 535. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 77,
            'end_length' => 415,
            'maintenance_type' => 'Berkala',
        ]);

        # 536. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 415,
            'end_length' => 728,
            'maintenance_type' => 'Rutin',
        ]);

        # 537. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 728,
            'end_length' => 1030,
            'maintenance_type' => 'Berkala',
        ]);

        # 538. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1030,
            'end_length' => 1176,
            'maintenance_type' => 'Rutin',
        ]);

        # 539. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1176,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        # 540. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 77,
            'maintenance_type' => 'Rutin',
        ]);

        # 541. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 77,
            'end_length' => 415,
            'maintenance_type' => 'Berkala',
        ]);

        # 542. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 415,
            'end_length' => 728,
            'maintenance_type' => 'Rutin',
        ]);

        # 543. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 728,
            'end_length' => 1030,
            'maintenance_type' => 'Berkala',
        ]);

        # 544. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1030,
            'end_length' => 1176,
            'maintenance_type' => 'Rutin',
        ]);

        # 545. Jalan Pangeran Ayin – Batas Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1176,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        # 546. Jalan Pangeran Ayin – Batas Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 547. Jalan Pangeran Ayin – Batas Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 20,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1400,
            'maintenance_type' => 'Rutin',
        ]);

        # 548. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 14,
            'maintenance_type' => 'Berkala',
        ]);

        # 549. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 14,
            'end_length' => 509,
            'maintenance_type' => 'Rutin',
        ]);

        # 550. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 509,
            'end_length' => 1336,
            'maintenance_type' => 'Berkala',
        ]);

        # 551. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1336,
            'end_length' => 1637,
            'maintenance_type' => 'Rutin',
        ]);

        # 552. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1637,
            'end_length' => 1677,
            'maintenance_type' => 'Berkala',
        ]);

        # 553. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1677,
            'end_length' => 1773.26,
            'maintenance_type' => 'Rutin',
        ]);

        # 554. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1773.26,
            'end_length' => 2392,
            'maintenance_type' => 'Rutin',
        ]);

        # 555. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 2392,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 556. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 14,
            'maintenance_type' => 'Berkala',
        ]);

        # 557. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 14,
            'end_length' => 509,
            'maintenance_type' => 'Rutin',
        ]);

        # 558. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 509,
            'end_length' => 1336,
            'maintenance_type' => 'Berkala',
        ]);

        # 559. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1336,
            'end_length' => 1637,
            'maintenance_type' => 'Rutin',
        ]);

        # 560. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1637,
            'end_length' => 1677,
            'maintenance_type' => 'Berkala',
        ]);

        # 561. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1677,
            'end_length' => 1773.26,
            'maintenance_type' => 'Rutin',
        ]);

        # 562. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1773.26,
            'end_length' => 2392,
            'maintenance_type' => 'Rutin',
        ]);

        # 563. Jalan Pendidikan – Jalan Lingkar Selatan - 2023
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 2392,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 564. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 514,
            'maintenance_type' => 'Berkala',
        ]);

        # 565. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 514,
            'end_length' => 1351,
            'maintenance_type' => 'Rutin',
        ]);

        # 566. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1351,
            'end_length' => 2398,
            'maintenance_type' => 'Berkala',
        ]);

        # 567. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2398,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 568. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 514,
            'maintenance_type' => 'Berkala',
        ]);

        # 569. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 514,
            'end_length' => 1351,
            'maintenance_type' => 'Rutin',
        ]);

        # 570. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1351,
            'end_length' => 2398,
            'maintenance_type' => 'Berkala',
        ]);

        # 571. Jalan Pendidikan – Jalan Lingkar Selatan - 2024
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2398,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 572. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1773.26,
            'maintenance_type' => 'Berkala',
        ]);

        # 573. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1773.26,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 574. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1773.26,
            'maintenance_type' => 'Berkala',
        ]);

        # 575. Jalan Pendidikan – Jalan Lingkar Selatan - 2025
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1773.26,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 576. Jalan Pendidikan – Jalan Lingkar Selatan - 2026
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 577. Jalan Pendidikan – Jalan Lingkar Selatan - 2026
        MaintenanceLog::create([
            'road_id' => 21,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 578. Jalan Kapt Abdullah – Jalan Robani Kadir - 2023
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 579. Jalan Kapt Abdullah – Jalan Robani Kadir - 2023
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 580. Jalan Kapt Abdullah – Jalan Robani Kadir - 2024
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 581. Jalan Kapt Abdullah – Jalan Robani Kadir - 2024
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 582. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 665,
            'maintenance_type' => 'Rutin',
        ]);

        # 583. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 665,
            'end_length' => 879,
            'maintenance_type' => 'Berkala',
        ]);

        # 584. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 879,
            'end_length' => 1759,
            'maintenance_type' => 'Rutin',
        ]);

        # 585. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 1759,
            'end_length' => 2586,
            'maintenance_type' => 'Berkala',
        ]);

        # 586. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2586,
            'end_length' => 2606,
            'maintenance_type' => 'Rutin',
        ]);

        # 587. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2606,
            'end_length' => 2755,
            'maintenance_type' => 'Berkala',
        ]);

        # 588. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2755,
            'end_length' => 2800,
            'maintenance_type' => 'Rutin',
        ]);

        # 589. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2800,
            'end_length' => 3446,
            'maintenance_type' => 'Berkala',
        ]);

        # 590. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3446,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 591. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 665,
            'maintenance_type' => 'Rutin',
        ]);

        # 592. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 665,
            'end_length' => 879,
            'maintenance_type' => 'Berkala',
        ]);

        # 593. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 879,
            'end_length' => 1759,
            'maintenance_type' => 'Rutin',
        ]);

        # 594. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 1759,
            'end_length' => 2586,
            'maintenance_type' => 'Berkala',
        ]);

        # 595. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2586,
            'end_length' => 2606,
            'maintenance_type' => 'Rutin',
        ]);

        # 596. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2606,
            'end_length' => 2755,
            'maintenance_type' => 'Berkala',
        ]);

        # 597. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2755,
            'end_length' => 2800,
            'maintenance_type' => 'Rutin',
        ]);

        # 598. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2800,
            'end_length' => 3446,
            'maintenance_type' => 'Berkala',
        ]);

        # 599. Jalan Kapt Abdullah – Jalan Robani Kadir - 2025
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3446,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 600. Jalan Kapt Abdullah – Jalan Robani Kadir - 2026
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 601. Jalan Kapt Abdullah – Jalan Robani Kadir - 2026
        MaintenanceLog::create([
            'road_id' => 22,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 602. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1040,
            'maintenance_type' => 'Rutin',
        ]);

        # 603. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1040,
            'end_length' => 1205,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 604. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1205,
            'end_length' => 9585,
            'maintenance_type' => 'Rutin',
        ]);

        # 605. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 9585,
            'end_length' => 10510.8,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 606. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 10510.8,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 607. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1040,
            'maintenance_type' => 'Rutin',
        ]);

        # 608. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1040,
            'end_length' => 1205,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 609. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1205,
            'end_length' => 9585,
            'maintenance_type' => 'Rutin',
        ]);

        # 610. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 9585,
            'end_length' => 10510.8,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 611. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 10510.8,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 612. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 332,
            'maintenance_type' => 'Berkala',
        ]);

        # 613. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 332,
            'end_length' => 1258,
            'maintenance_type' => 'Rutin',
        ]);

        # 614. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1258,
            'end_length' => 1284,
            'maintenance_type' => 'Berkala',
        ]);

        # 615. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1284,
            'end_length' => 1815,
            'maintenance_type' => 'Rutin',
        ]);

        # 616. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1815,
            'end_length' => 1830,
            'maintenance_type' => 'Berkala',
        ]);

        # 617. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1830,
            'end_length' => 2927,
            'maintenance_type' => 'Rutin',
        ]);

        # 618. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2927,
            'end_length' => 2931,
            'maintenance_type' => 'Berkala',
        ]);

        # 619. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2931,
            'end_length' => 2949,
            'maintenance_type' => 'Rutin',
        ]);

        # 620. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2949,
            'end_length' => 2953,
            'maintenance_type' => 'Berkala',
        ]);

        # 621. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2953,
            'end_length' => 3450,
            'maintenance_type' => 'Rutin',
        ]);

        # 622. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3450,
            'end_length' => 3779,
            'maintenance_type' => 'Berkala',
        ]);

        # 623. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3779,
            'end_length' => 4850,
            'maintenance_type' => 'Rutin',
        ]);

        # 624. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 4850,
            'end_length' => 4950,
            'maintenance_type' => 'Berkala',
        ]);

        # 625. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 4950,
            'end_length' => 5172,
            'maintenance_type' => 'Rutin',
        ]);

        # 626. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 5172,
            'end_length' => 5224,
            'maintenance_type' => 'Berkala',
        ]);

        # 627. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 5224,
            'end_length' => 6132,
            'maintenance_type' => 'Rutin',
        ]);

        # 628. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6132,
            'end_length' => 6146,
            'maintenance_type' => 'Berkala',
        ]);

        # 629. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6146,
            'end_length' => 6181,
            'maintenance_type' => 'Rutin',
        ]);

        # 630. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6181,
            'end_length' => 6185,
            'maintenance_type' => 'Berkala',
        ]);

        # 631. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 6185,
            'end_length' => 10938,
            'maintenance_type' => 'Rutin',
        ]);

        # 632. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 10938,
            'end_length' => 11080,
            'maintenance_type' => 'Berkala',
        ]);

        # 633. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11080,
            'end_length' => 11130,
            'maintenance_type' => 'Rutin',
        ]);

        # 634. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11130,
            'end_length' => 11171,
            'maintenance_type' => 'Berkala',
        ]);

        # 635. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11171,
            'end_length' => 11285,
            'maintenance_type' => 'Rutin',
        ]);

        # 636. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11285,
            'end_length' => 11303,
            'maintenance_type' => 'Berkala',
        ]);

        # 637. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11303,
            'end_length' => 11372,
            'maintenance_type' => 'Rutin',
        ]);

        # 638. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11372,
            'end_length' => 11385,
            'maintenance_type' => 'Berkala',
        ]);

        # 639. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11385,
            'end_length' => 11587,
            'maintenance_type' => 'Rutin',
        ]);

        # 640. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11587,
            'end_length' => 11750,
            'maintenance_type' => 'Berkala',
        ]);

        # 641. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11750,
            'end_length' => 11785,
            'maintenance_type' => 'Rutin',
        ]);

        # 642. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11785,
            'end_length' => 11939,
            'maintenance_type' => 'Berkala',
        ]);

        # 643. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 11939,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 644. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 332,
            'maintenance_type' => 'Berkala',
        ]);

        # 645. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 332,
            'end_length' => 1258,
            'maintenance_type' => 'Rutin',
        ]);

        # 646. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1258,
            'end_length' => 1284,
            'maintenance_type' => 'Berkala',
        ]);

        # 647. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1284,
            'end_length' => 1815,
            'maintenance_type' => 'Rutin',
        ]);

        # 648. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1815,
            'end_length' => 1830,
            'maintenance_type' => 'Berkala',
        ]);

        # 649. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1830,
            'end_length' => 2927,
            'maintenance_type' => 'Rutin',
        ]);

        # 650. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2927,
            'end_length' => 2931,
            'maintenance_type' => 'Berkala',
        ]);

        # 651. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2931,
            'end_length' => 2949,
            'maintenance_type' => 'Rutin',
        ]);

        # 652. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2949,
            'end_length' => 2953,
            'maintenance_type' => 'Berkala',
        ]);

        # 653. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2953,
            'end_length' => 3450,
            'maintenance_type' => 'Rutin',
        ]);

        # 654. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3450,
            'end_length' => 3779,
            'maintenance_type' => 'Berkala',
        ]);

        # 655. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3779,
            'end_length' => 4850,
            'maintenance_type' => 'Rutin',
        ]);

        # 656. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 4850,
            'end_length' => 4950,
            'maintenance_type' => 'Berkala',
        ]);

        # 657. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 4950,
            'end_length' => 5172,
            'maintenance_type' => 'Rutin',
        ]);

        # 658. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 5172,
            'end_length' => 5224,
            'maintenance_type' => 'Berkala',
        ]);

        # 659. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 5224,
            'end_length' => 6132,
            'maintenance_type' => 'Rutin',
        ]);

        # 660. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6132,
            'end_length' => 6146,
            'maintenance_type' => 'Berkala',
        ]);

        # 661. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6146,
            'end_length' => 6181,
            'maintenance_type' => 'Rutin',
        ]);

        # 662. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6181,
            'end_length' => 6185,
            'maintenance_type' => 'Berkala',
        ]);

        # 663. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 6185,
            'end_length' => 10938,
            'maintenance_type' => 'Rutin',
        ]);

        # 664. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 10938,
            'end_length' => 11080,
            'maintenance_type' => 'Berkala',
        ]);

        # 665. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11080,
            'end_length' => 11130,
            'maintenance_type' => 'Rutin',
        ]);

        # 666. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11130,
            'end_length' => 11171,
            'maintenance_type' => 'Berkala',
        ]);

        # 667. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11171,
            'end_length' => 11285,
            'maintenance_type' => 'Rutin',
        ]);

        # 668. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11285,
            'end_length' => 11303,
            'maintenance_type' => 'Berkala',
        ]);

        # 669. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11303,
            'end_length' => 11372,
            'maintenance_type' => 'Rutin',
        ]);

        # 670. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11372,
            'end_length' => 11385,
            'maintenance_type' => 'Berkala',
        ]);

        # 671. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11385,
            'end_length' => 11587,
            'maintenance_type' => 'Rutin',
        ]);

        # 672. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11587,
            'end_length' => 11750,
            'maintenance_type' => 'Berkala',
        ]);

        # 673. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11750,
            'end_length' => 11785,
            'maintenance_type' => 'Rutin',
        ]);

        # 674. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11785,
            'end_length' => 11939,
            'maintenance_type' => 'Berkala',
        ]);

        # 675. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 11939,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 676. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3749,
            'maintenance_type' => 'Rutin',
        ]);

        # 677. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3749,
            'end_length' => 3762,
            'maintenance_type' => 'Berkala',
        ]);

        # 678. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3762,
            'end_length' => 7115,
            'maintenance_type' => 'Rutin',
        ]);

        # 679. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7115,
            'end_length' => 7323,
            'maintenance_type' => 'Berkala',
        ]);

        # 680. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7323,
            'end_length' => 7534,
            'maintenance_type' => 'Rutin',
        ]);

        # 681. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7534,
            'end_length' => 7688,
            'maintenance_type' => 'Berkala',
        ]);

        # 682. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7688,
            'end_length' => 8650,
            'maintenance_type' => 'Rutin',
        ]);

        # 683. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8650,
            'end_length' => 8797,
            'maintenance_type' => 'Berkala',
        ]);

        # 684. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8797,
            'end_length' => 8856,
            'maintenance_type' => 'Rutin',
        ]);

        # 685. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8856,
            'end_length' => 8864,
            'maintenance_type' => 'Berkala',
        ]);

        # 686. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 8864,
            'end_length' => 9442,
            'maintenance_type' => 'Rutin',
        ]);

        # 687. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 9442,
            'end_length' => 9502,
            'maintenance_type' => 'Berkala',
        ]);

        # 688. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 9502,
            'end_length' => 10400,
            'maintenance_type' => 'Rutin',
        ]);

        # 689. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10400,
            'end_length' => 10499,
            'maintenance_type' => 'Berkala',
        ]);

        # 690. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10499,
            'end_length' => 10809,
            'maintenance_type' => 'Rutin',
        ]);

        # 691. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10809,
            'end_length' => 10858,
            'maintenance_type' => 'Berkala',
        ]);

        # 692. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 10858,
            'end_length' => 11031,
            'maintenance_type' => 'Rutin',
        ]);

        # 693. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11031,
            'end_length' => 11102,
            'maintenance_type' => 'Berkala',
        ]);

        # 694. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11102,
            'end_length' => 11113,
            'maintenance_type' => 'Rutin',
        ]);

        # 695. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11113,
            'end_length' => 11157,
            'maintenance_type' => 'Berkala',
        ]);

        # 696. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11157,
            'end_length' => 11179,
            'maintenance_type' => 'Rutin',
        ]);

        # 697. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11179,
            'end_length' => 11315,
            'maintenance_type' => 'Berkala',
        ]);

        # 698. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 11315,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 699. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3749,
            'maintenance_type' => 'Rutin',
        ]);

        # 700. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3749,
            'end_length' => 3762,
            'maintenance_type' => 'Berkala',
        ]);

        # 701. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3762,
            'end_length' => 7115,
            'maintenance_type' => 'Rutin',
        ]);

        # 702. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7115,
            'end_length' => 7323,
            'maintenance_type' => 'Berkala',
        ]);

        # 703. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7323,
            'end_length' => 7534,
            'maintenance_type' => 'Rutin',
        ]);

        # 704. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7534,
            'end_length' => 7688,
            'maintenance_type' => 'Berkala',
        ]);

        # 705. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7688,
            'end_length' => 8650,
            'maintenance_type' => 'Rutin',
        ]);

        # 706. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8650,
            'end_length' => 8797,
            'maintenance_type' => 'Berkala',
        ]);

        # 707. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8797,
            'end_length' => 8856,
            'maintenance_type' => 'Rutin',
        ]);

        # 708. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8856,
            'end_length' => 8864,
            'maintenance_type' => 'Berkala',
        ]);

        # 709. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 8864,
            'end_length' => 9442,
            'maintenance_type' => 'Rutin',
        ]);

        # 710. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 9442,
            'end_length' => 9502,
            'maintenance_type' => 'Berkala',
        ]);

        # 711. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 9502,
            'end_length' => 10400,
            'maintenance_type' => 'Rutin',
        ]);

        # 712. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10400,
            'end_length' => 10499,
            'maintenance_type' => 'Berkala',
        ]);

        # 713. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10499,
            'end_length' => 10809,
            'maintenance_type' => 'Rutin',
        ]);

        # 714. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10809,
            'end_length' => 10858,
            'maintenance_type' => 'Berkala',
        ]);

        # 715. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 10858,
            'end_length' => 11031,
            'maintenance_type' => 'Rutin',
        ]);

        # 716. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11031,
            'end_length' => 11102,
            'maintenance_type' => 'Berkala',
        ]);

        # 717. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11102,
            'end_length' => 11113,
            'maintenance_type' => 'Rutin',
        ]);

        # 718. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11113,
            'end_length' => 11157,
            'maintenance_type' => 'Berkala',
        ]);

        # 719. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11157,
            'end_length' => 11179,
            'maintenance_type' => 'Rutin',
        ]);

        # 720. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11179,
            'end_length' => 11315,
            'maintenance_type' => 'Berkala',
        ]);

        # 721. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 11315,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 722. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 9502,
            'maintenance_type' => 'Rutin',
        ]);

        # 723. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 9502,
            'end_length' => 9852,
            'maintenance_type' => 'Berkala',
        ]);

        # 724. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 9852,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 725. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 9502,
            'maintenance_type' => 'Rutin',
        ]);

        # 726. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 9502,
            'end_length' => 9852,
            'maintenance_type' => 'Berkala',
        ]);

        # 727. Jalan Lettu Karim Kadir – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 23,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 9852,
            'end_length' => 12000,
            'maintenance_type' => 'Rutin',
        ]);

        # 728. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 200,
            'maintenance_type' => 'Pembangunan',
        ]);

        # 729. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 200,
            'end_length' => 4088,
            'maintenance_type' => 'Rutin',
        ]);

        # 730. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 4088,
            'end_length' => 5250,
            'maintenance_type' => 'Pembangunan',
        ]);

        # 731. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 4125,
            'maintenance_type' => 'Rutin',
        ]);

        # 732. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 4125,
            'end_length' => 4262,
            'maintenance_type' => 'Pembangunan',
        ]);

        # 733. Jalan Noerdin Pandji - 2023
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 4262,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 734. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 600,
            'maintenance_type' => 'Rutin',
        ]);

        # 735. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 600,
            'end_length' => 700,
            'maintenance_type' => 'Berkala',
        ]);

        # 736. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 1008,
            'maintenance_type' => 'Rutin',
        ]);

        # 737. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1008,
            'end_length' => 1340,
            'maintenance_type' => 'Berkala',
        ]);

        # 738. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1340,
            'end_length' => 1440,
            'maintenance_type' => 'Berkala',
        ]);

        # 739. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1440,
            'end_length' => 1650,
            'maintenance_type' => 'Rutin',
        ]);

        # 740. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1650,
            'end_length' => 1850,
            'maintenance_type' => 'Berkala',
        ]);

        # 741. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1850,
            'end_length' => 2018,
            'maintenance_type' => 'Rutin',
        ]);

        # 742. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2018,
            'end_length' => 2168,
            'maintenance_type' => 'Berkala',
        ]);

        # 743. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2168,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 744. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2400,
            'end_length' => 2710,
            'maintenance_type' => 'Berkala',
        ]);

        # 745. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2710,
            'end_length' => 2910,
            'maintenance_type' => 'Berkala',
        ]);

        # 746. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2910,
            'end_length' => 3610,
            'maintenance_type' => 'Rutin',
        ]);

        # 747. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3610,
            'end_length' => 3860,
            'maintenance_type' => 'Berkala',
        ]);

        # 748. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3860,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 749. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 600,
            'maintenance_type' => 'Rutin',
        ]);

        # 750. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 600,
            'end_length' => 700,
            'maintenance_type' => 'Berkala',
        ]);

        # 751. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 1008,
            'maintenance_type' => 'Rutin',
        ]);

        # 752. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1008,
            'end_length' => 1340,
            'maintenance_type' => 'Berkala',
        ]);

        # 753. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1340,
            'end_length' => 1440,
            'maintenance_type' => 'Berkala',
        ]);

        # 754. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1440,
            'end_length' => 1650,
            'maintenance_type' => 'Rutin',
        ]);

        # 755. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1650,
            'end_length' => 1850,
            'maintenance_type' => 'Berkala',
        ]);

        # 756. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1850,
            'end_length' => 2018,
            'maintenance_type' => 'Rutin',
        ]);

        # 757. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2018,
            'end_length' => 2168,
            'maintenance_type' => 'Berkala',
        ]);

        # 758. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2168,
            'end_length' => 2400,
            'maintenance_type' => 'Rutin',
        ]);

        # 759. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2400,
            'end_length' => 2710,
            'maintenance_type' => 'Berkala',
        ]);

        # 760. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2710,
            'end_length' => 2910,
            'maintenance_type' => 'Berkala',
        ]);

        # 761. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2910,
            'end_length' => 3610,
            'maintenance_type' => 'Rutin',
        ]);

        # 762. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3610,
            'end_length' => 3860,
            'maintenance_type' => 'Berkala',
        ]);

        # 763. Jalan Noerdin Pandji - 2024
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3860,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 764. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 700,
            'maintenance_type' => 'Rutin',
        ]);

        # 765. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 2750,
            'maintenance_type' => 'Berkala',
        ]);

        # 766. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2750,
            'end_length' => 2855,
            'maintenance_type' => 'Rutin',
        ]);

        # 767. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 2855,
            'end_length' => 3612,
            'maintenance_type' => 'Berkala',
        ]);

        # 768. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3612,
            'end_length' => 3860,
            'maintenance_type' => 'Rutin',
        ]);

        # 769. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3860,
            'end_length' => 5248,
            'maintenance_type' => 'Berkala',
        ]);

        # 770. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 5248,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 771. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 700,
            'maintenance_type' => 'Rutin',
        ]);

        # 772. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 2750,
            'maintenance_type' => 'Berkala',
        ]);

        # 773. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2750,
            'end_length' => 2855,
            'maintenance_type' => 'Rutin',
        ]);

        # 774. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 2855,
            'end_length' => 3612,
            'maintenance_type' => 'Berkala',
        ]);

        # 775. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3612,
            'end_length' => 3860,
            'maintenance_type' => 'Rutin',
        ]);

        # 776. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3860,
            'end_length' => 5248,
            'maintenance_type' => 'Berkala',
        ]);

        # 777. Jalan Noerdin Pandji - 2025
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 5248,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 778. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2910,
            'maintenance_type' => 'Rutin',
        ]);

        # 779. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2910,
            'end_length' => 3490,
            'maintenance_type' => 'Berkala',
        ]);

        # 780. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 3490,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 781. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2910,
            'maintenance_type' => 'Rutin',
        ]);

        # 782. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2910,
            'end_length' => 3490,
            'maintenance_type' => 'Berkala',
        ]);

        # 783. Jalan Noerdin Pandji - 2026
        MaintenanceLog::create([
            'road_id' => 24,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 3490,
            'end_length' => 5250,
            'maintenance_type' => 'Rutin',
        ]);

        # 784. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 300,
            'maintenance_type' => 'Rutin',
        ]);

        # 785. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 300,
            'end_length' => 1315,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 786. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 1315,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 787. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 300,
            'maintenance_type' => 'Rutin',
        ]);

        # 788. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 300,
            'end_length' => 1315,
            'maintenance_type' => 'Rehabilitasi',
        ]);

        # 789. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 1315,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 790. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 284,
            'maintenance_type' => 'Berkala',
        ]);

        # 791. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 284,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 792. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1779,
            'maintenance_type' => 'Berkala',
        ]);

        # 793. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1779,
            'end_length' => 1785,
            'maintenance_type' => 'Rutin',
        ]);

        # 794. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 1785,
            'end_length' => 2573,
            'maintenance_type' => 'Berkala',
        ]);

        # 795. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 2573,
            'end_length' => 3157,
            'maintenance_type' => 'Rutin',
        ]);

        # 796. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3157,
            'end_length' => 3322,
            'maintenance_type' => 'Berkala',
        ]);

        # 797. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3322,
            'end_length' => 3451,
            'maintenance_type' => 'Rutin',
        ]);

        # 798. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3451,
            'end_length' => 3665,
            'maintenance_type' => 'Berkala',
        ]);

        # 799. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 3665,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 800. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 284,
            'maintenance_type' => 'Berkala',
        ]);

        # 801. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 284,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 802. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1779,
            'maintenance_type' => 'Berkala',
        ]);

        # 803. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1779,
            'end_length' => 1785,
            'maintenance_type' => 'Rutin',
        ]);

        # 804. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 1785,
            'end_length' => 2573,
            'maintenance_type' => 'Berkala',
        ]);

        # 805. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 2573,
            'end_length' => 3157,
            'maintenance_type' => 'Rutin',
        ]);

        # 806. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3157,
            'end_length' => 3322,
            'maintenance_type' => 'Berkala',
        ]);

        # 807. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3322,
            'end_length' => 3451,
            'maintenance_type' => 'Rutin',
        ]);

        # 808. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3451,
            'end_length' => 3665,
            'maintenance_type' => 'Berkala',
        ]);

        # 809. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 3665,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 810. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3063,
            'maintenance_type' => 'Rutin',
        ]);

        # 811. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3063,
            'end_length' => 3113,
            'maintenance_type' => 'Berkala',
        ]);

        # 812. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3113,
            'end_length' => 3285,
            'maintenance_type' => 'Rutin',
        ]);

        # 813. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3285,
            'end_length' => 3415,
            'maintenance_type' => 'Berkala',
        ]);

        # 814. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3415,
            'end_length' => 3631,
            'maintenance_type' => 'Rutin',
        ]);

        # 815. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 3631,
            'end_length' => 4005,
            'maintenance_type' => 'Berkala',
        ]);

        # 816. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 4005,
            'end_length' => 6300,
            'maintenance_type' => 'Rutin',
        ]);

        # 817. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 6300,
            'end_length' => 7145,
            'maintenance_type' => 'Berkala',
        ]);

        # 818. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 7145,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 819. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3063,
            'maintenance_type' => 'Rutin',
        ]);

        # 820. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3063,
            'end_length' => 3113,
            'maintenance_type' => 'Berkala',
        ]);

        # 821. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3113,
            'end_length' => 3285,
            'maintenance_type' => 'Rutin',
        ]);

        # 822. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3285,
            'end_length' => 3415,
            'maintenance_type' => 'Berkala',
        ]);

        # 823. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3415,
            'end_length' => 3631,
            'maintenance_type' => 'Rutin',
        ]);

        # 824. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 3631,
            'end_length' => 4005,
            'maintenance_type' => 'Berkala',
        ]);

        # 825. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 4005,
            'end_length' => 6300,
            'maintenance_type' => 'Rutin',
        ]);

        # 826. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 6300,
            'end_length' => 7145,
            'maintenance_type' => 'Berkala',
        ]);

        # 827. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 7145,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 828. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1100,
            'maintenance_type' => 'Rutin',
        ]);

        # 829. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1100,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 830. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 2100,
            'maintenance_type' => 'Rutin',
        ]);

        # 831. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2100,
            'end_length' => 2200,
            'maintenance_type' => 'Berkala',
        ]);

        # 832. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2200,
            'end_length' => 4500,
            'maintenance_type' => 'Rutin',
        ]);

        # 833. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 4500,
            'end_length' => 4800,
            'maintenance_type' => 'Berkala',
        ]);

        # 834. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 4800,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 835. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5100,
            'end_length' => 5200,
            'maintenance_type' => 'Berkala',
        ]);

        # 836. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5200,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 837. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5400,
            'end_length' => 5600,
            'maintenance_type' => 'Berkala',
        ]);

        # 838. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 5600,
            'end_length' => 6200,
            'maintenance_type' => 'Rutin',
        ]);

        # 839. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 6200,
            'end_length' => 6300,
            'maintenance_type' => 'Berkala',
        ]);

        # 840. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 6300,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 841. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1100,
            'maintenance_type' => 'Rutin',
        ]);

        # 842. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1100,
            'end_length' => 1300,
            'maintenance_type' => 'Berkala',
        ]);

        # 843. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 2100,
            'maintenance_type' => 'Rutin',
        ]);

        # 844. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2100,
            'end_length' => 2200,
            'maintenance_type' => 'Berkala',
        ]);

        # 845. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2200,
            'end_length' => 4500,
            'maintenance_type' => 'Rutin',
        ]);

        # 846. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 4500,
            'end_length' => 4800,
            'maintenance_type' => 'Berkala',
        ]);

        # 847. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 4800,
            'end_length' => 5100,
            'maintenance_type' => 'Rutin',
        ]);

        # 848. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5100,
            'end_length' => 5200,
            'maintenance_type' => 'Berkala',
        ]);

        # 849. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5200,
            'end_length' => 5400,
            'maintenance_type' => 'Rutin',
        ]);

        # 850. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5400,
            'end_length' => 5600,
            'maintenance_type' => 'Berkala',
        ]);

        # 851. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 5600,
            'end_length' => 6200,
            'maintenance_type' => 'Rutin',
        ]);

        # 852. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 6200,
            'end_length' => 6300,
            'maintenance_type' => 'Berkala',
        ]);

        # 853. Jalan Taqwa Mata Merah – Merah Mata Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 25,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 6300,
            'end_length' => 7700,
            'maintenance_type' => 'Rutin',
        ]);

        # 854. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2023,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 855. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2023
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2023,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 856. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2024,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 857. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2024
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2024,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 858. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2025,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 859. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2025
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2025,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 860. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 861. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1300,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        # 862. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1400,
            'end_length' => 1600,
            'maintenance_type' => 'Rutin',
        ]);

        # 863. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1600,
            'end_length' => 1700,
            'maintenance_type' => 'Berkala',
        ]);

        # 864. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1700,
            'end_length' => 1900,
            'maintenance_type' => 'Rutin',
        ]);

        # 865. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 1900,
            'end_length' => 2000,
            'maintenance_type' => 'Berkala',
        ]);

        # 866. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'right',
            'start_length' => 2000,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);

        # 867. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1300,
            'maintenance_type' => 'Rutin',
        ]);

        # 868. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1300,
            'end_length' => 1400,
            'maintenance_type' => 'Berkala',
        ]);

        # 869. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1400,
            'end_length' => 1600,
            'maintenance_type' => 'Rutin',
        ]);

        # 870. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1600,
            'end_length' => 1700,
            'maintenance_type' => 'Berkala',
        ]);

        # 871. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 1900,
            'maintenance_type' => 'Rutin',
        ]);

        # 872. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 1900,
            'end_length' => 2000,
            'maintenance_type' => 'Berkala',
        ]);

        # 873. Jalan Adi Sucipto – Batas Kabupaten Banyuasin - 2026
        MaintenanceLog::create([
            'road_id' => 26,
            'year' => 2026,
            'side' => 'left',
            'start_length' => 2000,
            'end_length' => 2230,
            'maintenance_type' => 'Rutin',
        ]);
    }
}
