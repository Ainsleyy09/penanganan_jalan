<?php

namespace Database\Seeders;

use App\Models\MaintenanceProposal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # 1. Jalan Lingkar Masjid Agung - 2027
        MaintenanceProposal::create([
            'road_id' => 1,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 360,
            'status' => 'approved',
        ]);

        # 2. Jalan Lingkar Masjid Agung - 2027
        MaintenanceProposal::create([
            'road_id' => 1,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 360,
            'status' => 'approved',
        ]);

        # 3. Jalan Merdeka - 2027
        MaintenanceProposal::create([
            'road_id' => 2,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 700,
            'status' => 'approved',
        ]);

        # 4. Jalan Merdeka - 2027
        MaintenanceProposal::create([
            'road_id' => 2,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 1400,
            'status' => 'approved',
        ]);

        # 3. Jalan Merdeka - 2027
        MaintenanceProposal::create([
            'road_id' => 2,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 700,
            'status' => 'approved',
        ]);

        # 4. Jalan Merdeka - 2027
        MaintenanceProposal::create([
            'road_id' => 2,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 1400,
            'status' => 'approved',
        ]);

        # 7. Jalan Kolonel Atmo - 2027
        MaintenanceProposal::create([
            'road_id' => 3,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 8. Jalan Kolonel Atmo - 2027
        MaintenanceProposal::create([
            'road_id' => 3,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 9. Jalan Brigjen HM Dhanny Effendy - 2027
        MaintenanceProposal::create([
            'road_id' => 4,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'status' => 'approved',
        ]);

        # 10. Jalan Brigjen HM Dhanny Effendy - 2027
        MaintenanceProposal::create([
            'road_id' => 4,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'status' => 'approved',
        ]);

        # 11. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2027
        MaintenanceProposal::create([
            'road_id' => 5,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 615,
            'status' => 'approved',
        ]);

        # 12. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2027
        MaintenanceProposal::create([
            'road_id' => 5,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 615,
            'end_length' => 1230,
            'status' => 'approved',
        ]);

        # 13. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2027
        MaintenanceProposal::create([
            'road_id' => 5,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 615,
            'status' => 'approved',
        ]);

        # 14. Jalan Kolonel Ahmad Badaruddin - Jalan Letkol Iskandar - 2027
        MaintenanceProposal::create([
            'road_id' => 5,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 615,
            'end_length' => 1230,
            'status' => 'approved',
        ]);

        # 15. Jalan Psw Subekti - 2027
        MaintenanceProposal::create([
            'road_id' => 6,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 400,
            'status' => 'approved',
        ]);

        # 16. Jalan Psw Subekti - 2027
        MaintenanceProposal::create([
            'road_id' => 6,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 400,
            'status' => 'approved',
        ]);

        # 17. Jalan Diponegoro - 2027
        MaintenanceProposal::create([
            'road_id' => 7,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 18. Jalan Diponegoro - 2027
        MaintenanceProposal::create([
            'road_id' => 7,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 19
        MaintenanceProposal::create([
            'road_id' => 8,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 850,
            'status' => 'approved',
        ]);

        # 20
        MaintenanceProposal::create([
            'road_id' => 8,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 850,
            'end_length' => 1700,
            'status' => 'approved',
        ]);

        # 21
        MaintenanceProposal::create([
            'road_id' => 8,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 850,
            'status' => 'approved',
        ]);

        # 22
        MaintenanceProposal::create([
            'road_id' => 8,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 850,
            'end_length' => 1700,
            'status' => 'approved',
        ]);

        # 23
        MaintenanceProposal::create([
            'road_id' => 9,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 800,
            'status' => 'approved',
        ]);

        # 24
        MaintenanceProposal::create([
            'road_id' => 9,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 800,
            'status' => 'approved',
        ]);

        # 25
        MaintenanceProposal::create([
            'road_id' => 10,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1140,
            'status' => 'approved',
        ]);

        # 26
        MaintenanceProposal::create([
            'road_id' => 10,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1140,
            'status' => 'approved',
        ]);

        # 27
        MaintenanceProposal::create([
            'road_id' => 11,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1090,
            'status' => 'approved',
        ]);

        # 28
        MaintenanceProposal::create([
            'road_id' => 11,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1090,
            'end_length' => 2180,
            'status' => 'approved',
        ]);

        # 29
        MaintenanceProposal::create([
            'road_id' => 11,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1090,
            'status' => 'approved',
        ]);

        # 30
        MaintenanceProposal::create([
            'road_id' => 11,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1090,
            'end_length' => 2180,
            'status' => 'approved',
        ]);

        # 31
        MaintenanceProposal::create([
            'road_id' => 12,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 32
        MaintenanceProposal::create([
            'road_id' => 12,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1000,
            'end_length' => 2000,
            'status' => 'approved',
        ]);

        # 33
        MaintenanceProposal::create([
            'road_id' => 12,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1000,
            'status' => 'approved',
        ]);

        # 34
        MaintenanceProposal::create([
            'road_id' => 12,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1000,
            'end_length' => 2000,
            'status' => 'approved',
        ]);

        # 35
        MaintenanceProposal::create([
            'road_id' => 13,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2110,
            'status' => 'approved',
        ]);

        # 36
        MaintenanceProposal::create([
            'road_id' => 13,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 2110,
            'end_length' => 4220,
            'status' => 'approved',
        ]);

        # 37
        MaintenanceProposal::create([
            'road_id' => 13,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2110,
            'status' => 'approved',
        ]);

        # 38
        MaintenanceProposal::create([
            'road_id' => 13,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 2110,
            'end_length' => 4220,
            'status' => 'approved',
        ]);

        # 39
        MaintenanceProposal::create([
            'road_id' => 14,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 845,
            'status' => 'approved',
        ]);

        # 40
        MaintenanceProposal::create([
            'road_id' => 14,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 845,
            'end_length' => 1690,
            'status' => 'approved',
        ]);

        # 41
        MaintenanceProposal::create([
            'road_id' => 14,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 845,
            'status' => 'approved',
        ]);

        # 42
        MaintenanceProposal::create([
            'road_id' => 14,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 845,
            'end_length' => 1690,
            'status' => 'approved',
        ]);

        # 43
        MaintenanceProposal::create([
            'road_id' => 15,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 655,
            'status' => 'approved',
        ]);

        # 44
        MaintenanceProposal::create([
            'road_id' => 15,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 655,
            'end_length' => 1310,
            'status' => 'approved',
        ]);

        # 45
        MaintenanceProposal::create([
            'road_id' => 15,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 655,
            'status' => 'approved',
        ]);

        # 46
        MaintenanceProposal::create([
            'road_id' => 15,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 655,
            'end_length' => 1310,
            'status' => 'approved',
        ]);

        # 47
        MaintenanceProposal::create([
            'road_id' => 16,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2550,
            'status' => 'approved',
        ]);

        # 48
        MaintenanceProposal::create([
            'road_id' => 16,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 2550,
            'end_length' => 5100,
            'status' => 'approved',
        ]);

        # 49
        MaintenanceProposal::create([
            'road_id' => 16,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2550,
            'status' => 'approved',
        ]);

        # 50
        MaintenanceProposal::create([
            'road_id' => 16,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 2550,
            'end_length' => 5100,
            'status' => 'approved',
        ]);

        # 51
        MaintenanceProposal::create([
            'road_id' => 17,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1700,
            'status' => 'approved',
        ]);

        # 52
        MaintenanceProposal::create([
            'road_id' => 17,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1700,
            'end_length' => 3400,
            'status' => 'approved',
        ]);

        # 53
        MaintenanceProposal::create([
            'road_id' => 17,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1700,
            'status' => 'approved',
        ]);

        # 54
        MaintenanceProposal::create([
            'road_id' => 17,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1700,
            'end_length' => 3400,
            'status' => 'approved',
        ]);

        # 55
        MaintenanceProposal::create([
            'road_id' => 18,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1290,
            'status' => 'approved',
        ]);

        # 56
        MaintenanceProposal::create([
            'road_id' => 18,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1290,
            'end_length' => 2580,
            'status' => 'approved',
        ]);

        # 57
        MaintenanceProposal::create([
            'road_id' => 18,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1290,
            'status' => 'approved',
        ]);

        # 58
        MaintenanceProposal::create([
            'road_id' => 18,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1290,
            'end_length' => 2580,
            'status' => 'approved',
        ]);

        # 59
        MaintenanceProposal::create([
            'road_id' => 19,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2500,
            'status' => 'approved',
        ]);

        # 60
        MaintenanceProposal::create([
            'road_id' => 19,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 2500,
            'end_length' => 5000,
            'status' => 'approved',
        ]);

        # 61
        MaintenanceProposal::create([
            'road_id' => 19,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2500,
            'status' => 'approved',
        ]);

        # 62
        MaintenanceProposal::create([
            'road_id' => 19,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 2500,
            'end_length' => 5000,
            'status' => 'approved',
        ]);

        # 63
        MaintenanceProposal::create([
            'road_id' => 20,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 700,
            'status' => 'approved',
        ]);

        # 64
        MaintenanceProposal::create([
            'road_id' => 20,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 700,
            'end_length' => 1400,
            'status' => 'approved',
        ]);

        # 65
        MaintenanceProposal::create([
            'road_id' => 20,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 700,
            'status' => 'approved',
        ]);

        # 66
        MaintenanceProposal::create([
            'road_id' => 20,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 700,
            'end_length' => 1400,
            'status' => 'approved',
        ]);

        # 67
        MaintenanceProposal::create([
            'road_id' => 21,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1200,
            'status' => 'approved',
        ]);

        # 68
        MaintenanceProposal::create([
            'road_id' => 21,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1200,
            'end_length' => 2400,
            'status' => 'approved',
        ]);

        # 69
        MaintenanceProposal::create([
            'road_id' => 21,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1200,
            'status' => 'approved',
        ]);

        # 70
        MaintenanceProposal::create([
            'road_id' => 21,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1200,
            'end_length' => 2400,
            'status' => 'approved',
        ]);

        # 71
        MaintenanceProposal::create([
            'road_id' => 22,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2700,
            'status' => 'approved',
        ]);

        # 72
        MaintenanceProposal::create([
            'road_id' => 22,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 2700,
            'end_length' => 5400,
            'status' => 'approved',
        ]);

        # 73
        MaintenanceProposal::create([
            'road_id' => 22,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2700,
            'status' => 'approved',
        ]);

        # 74
        MaintenanceProposal::create([
            'road_id' => 22,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 2700,
            'end_length' => 5400,
            'status' => 'approved',
        ]);

        # 75
        MaintenanceProposal::create([
            'road_id' => 23,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 6000,
            'status' => 'approved',
        ]);

        # 76
        MaintenanceProposal::create([
            'road_id' => 23,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 6000,
            'end_length' => 12000,
            'status' => 'approved',
        ]);

        # 77
        MaintenanceProposal::create([
            'road_id' => 23,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 6000,
            'status' => 'approved',
        ]);

        # 78
        MaintenanceProposal::create([
            'road_id' => 23,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 6000,
            'end_length' => 12000,
            'status' => 'approved',
        ]);

        # 79
        MaintenanceProposal::create([
            'road_id' => 24,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 2625,
            'status' => 'approved',
        ]);

        # 80
        MaintenanceProposal::create([
            'road_id' => 24,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 2625,
            'end_length' => 5250,
            'status' => 'approved',
        ]);

        # 81
        MaintenanceProposal::create([
            'road_id' => 24,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 2625,
            'status' => 'approved',
        ]);

        # 82
        MaintenanceProposal::create([
            'road_id' => 24,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 2625,
            'end_length' => 5250,
            'status' => 'approved',
        ]);

        # 83
        MaintenanceProposal::create([
            'road_id' => 25,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 3850,
            'status' => 'approved',
        ]);

        # 84
        MaintenanceProposal::create([
            'road_id' => 25,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 3850,
            'end_length' => 7700,
            'status' => 'approved',
        ]);

        # 85
        MaintenanceProposal::create([
            'road_id' => 25,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 3850,
            'status' => 'approved',
        ]);

        # 86
        MaintenanceProposal::create([
            'road_id' => 25,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 3850,
            'end_length' => 7700,
            'status' => 'approved',
        ]);

        # 87
        MaintenanceProposal::create([
            'road_id' => 26,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 0,
            'end_length' => 1115,
            'status' => 'approved',
        ]);

        # 88
        MaintenanceProposal::create([
            'road_id' => 26,
            'year' => 2027,
            'side' => 'left',
            'start_length' => 1115,
            'end_length' => 2230,
            'status' => 'approved',
        ]);

        # 89
        MaintenanceProposal::create([
            'road_id' => 26,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 0,
            'end_length' => 1115,
            'status' => 'approved',
        ]);

        # 90
        MaintenanceProposal::create([
            'road_id' => 26,
            'year' => 2027,
            'side' => 'right',
            'start_length' => 1115,
            'end_length' => 2230,
            'status' => 'approved',
        ]);
    }
}
