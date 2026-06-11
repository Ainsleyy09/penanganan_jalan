<?php

namespace App\Services;

use App\Models\AprioriResult;
use App\Models\Maintenance;
use App\Models\MaintenanceAnalysis;
use App\Models\MaintenanceAnalysisRule;
use App\Models\MaintenanceType;

class MaintenanceAnalysisService
{
    // cek apakah ada hasil analisis
    public function hasAnalysis($proposal)
    {
        $histories = Maintenance::where('road_id', $proposal->road_id)
            ->where('side', $proposal->side)
            ->distinct()
            ->pluck('maintenancetype_id')
            ->toArray();

        $rules = AprioriResult::where('road_id', $proposal->road_id)
            ->where('side', $proposal->side)
            ->get();

        $proposalTypes = $proposal->proposalMaintenances
            ->pluck('maintenancetype_id')
            ->unique()
            ->values()
            ->toArray();

        foreach ($rules as $rule) {

            $antecedent = json_decode($rule->antecedent, true);
            $consequent = json_decode($rule->consequent, true);

            $antecedentMatch =
                count(array_intersect($antecedent, $histories))
                == count($antecedent);

            $consequentMatch =
                count(
                    array_intersect(
                        $proposalTypes,
                        $consequent
                    )
                ) > 0;

            if ($antecedentMatch && $consequentMatch) {
                return true;
            }
        }

        return false;
    }

    // generate analysis
    public function analyze($proposal)
    {
        $histories = Maintenance::where('road_id', $proposal->road_id)
            ->where('side', $proposal->side)
            ->distinct()
            ->pluck('maintenancetype_id')
            ->toArray();

        $rules = AprioriResult::where('road_id', $proposal->road_id)
            ->where('side', $proposal->side)
            ->orderByDesc('confidence')
            ->orderByDesc('lift')
            ->orderByDesc('support')
            ->get();

        $proposalTypes = $proposal->proposalMaintenances
            ->pluck('maintenancetype_id')
            ->unique()
            ->values()
            ->toArray();

        $matchedRules = [];

        // semua item yang ditemukan pada pola historis
        $supportedItems = [];

        foreach ($rules as $rule) {

            $antecedent = json_decode(
                $rule->antecedent,
                true
            );

            $consequent = json_decode(
                $rule->consequent,
                true
            );

            $antecedentMatch =
                count(
                    array_intersect(
                        $antecedent,
                        $histories
                    )
                ) == count($antecedent);

            if (!$antecedentMatch) {
                continue;
            }

            $ruleItems = array_unique(
                array_merge(
                    $antecedent,
                    $consequent
                )
            );

            // hanya simpan rule yang ada hubungannya
            // dengan jenis usulan
            $proposalMatch =
                count(
                    array_intersect(
                        $proposalTypes,
                        $ruleItems
                    )
                ) > 0;

            if (!$proposalMatch) {
                continue;
            }

            $matchedRules[] = $rule;

            $supportedItems = array_unique(
                array_merge(
                    $supportedItems,
                    $ruleItems
                )
            );
        }

        // APPROVED hanya jika seluruh jenis
        // penanganan usulan ada dalam pola historis
        $hasDirectSupport =
            count(
                array_intersect(
                    $proposalTypes,
                    $supportedItems
                )
            ) === count($proposalTypes);

        $status = $hasDirectSupport
            ? 'approved'
            : 'review';

        $bestRule = count($matchedRules) > 0
            ? $matchedRules[0]
            : null;

        $unsupportedTypes = array_diff(
            $proposalTypes,
            $supportedItems
        );

        $supportedTypes = array_intersect(
            $proposalTypes,
            $supportedItems
        );

        $supportedNames = MaintenanceType::whereIn(
            'id',
            $supportedTypes
        )->pluck('name')->toArray();

        $unsupportedNames = MaintenanceType::whereIn(
            'id',
            $unsupportedTypes
        )->pluck('name')->toArray();

        $antecedentNames = [];
        $consequentNames = [];

        if ($bestRule) {

            $antecedent = json_decode(
                $bestRule->antecedent,
                true
            );

            $consequent = json_decode(
                $bestRule->consequent,
                true
            );

            $antecedentNames = MaintenanceType::whereIn(
                'id',
                $antecedent
            )->pluck('name')->toArray();

            $consequentNames = MaintenanceType::whereIn(
                'id',
                $consequent
            )->pluck('name')->toArray();
        }

        if ($status === 'approved' && $bestRule) {

            $description =
                'Usulan penanganan direkomendasikan untuk disetujui karena sesuai dengan pola historis pada ruas dan sisi jalan yang sama. ';

            $description .=
                'Berdasarkan hasil analisis Apriori ditemukan aturan '
                . implode(', ', $antecedentNames)
                . ' → '
                . implode(', ', $consequentNames)
                . '. ';

            $description .=
                'Nilai support sebesar '
                . round($bestRule->support, 2)
                . ' menunjukkan bahwa pola tersebut ditemukan pada seluruh data historis yang dianalisis. ';

            $description .=
                'Nilai confidence sebesar '
                . round($bestRule->confidence, 2)
                . ' menunjukkan bahwa ketika penanganan '
                . implode(', ', $antecedentNames)
                . ' terjadi, penanganan '
                . implode(', ', $consequentNames)
                . ' selalu muncul pada data historis yang tersedia. ';

            $description .=
                'Nilai lift sebesar '
                . round($bestRule->lift, 2)
                . ' menunjukkan bahwa hubungan kedua jenis penanganan tersebut bersifat normal dan tidak menunjukkan keterkaitan yang lebih kuat maupun lebih lemah dari pola umum. ';

            $description .=
                'Karena seluruh jenis penanganan yang diusulkan didukung oleh pola historis yang tersedia, usulan direkomendasikan untuk disetujui.';
        } else {

            if (count($matchedRules) > 0) {

                $description =
                    'Usulan penanganan memerlukan peninjauan lebih lanjut karena tidak seluruh jenis penanganan yang diusulkan didukung oleh pola historis yang tersedia. ';

                $description .=
                    'Berdasarkan hasil analisis Apriori ditemukan aturan '
                    . implode(', ', $antecedentNames)
                    . ' → '
                    . implode(', ', $consequentNames)
                    . '. ';

                $description .=
                    'Nilai support sebesar '
                    . round($bestRule->support, 2)
                    . ' menunjukkan bahwa pola tersebut ditemukan pada data historis yang dianalisis. ';

                $description .=
                    'Nilai confidence sebesar '
                    . round($bestRule->confidence, 2)
                    . ' menunjukkan tingkat keyakinan bahwa hubungan antar penanganan tersebut konsisten muncul pada data historis. ';

                $description .=
                    'Nilai lift sebesar '
                    . round($bestRule->lift, 2)
                    . ' menunjukkan tingkat keterkaitan antara kedua jenis penanganan tersebut. ';
            } else {
                $description =
                    'Usulan penanganan memerlukan peninjauan lebih lanjut karena tidak ditemukan aturan Apriori yang mendukung jenis penanganan tersebut pada ruas dan sisi jalan yang sama. ';

                $description .=
                    'Pola historis yang tersedia belum menunjukkan pola yang cukup kuat untuk mendukung atau merekomendasikan usulan ini secara otomatis. ';

                $description .=
                    'Oleh karena itu diperlukan evaluasi lebih lanjut oleh petugas atau pengambil keputusan.';
            }
        }

        $analysis = MaintenanceAnalysis::create([
            'maintenance_proposal_id' => $proposal->id,
            'status' => $status,
            'description' => $description
        ]);

        $selectedRules = [];

        $remainingProposalTypes = $proposalTypes;

        foreach ($matchedRules as $rule) {

            $antecedent = json_decode($rule->antecedent, true);
            $consequent = json_decode($rule->consequent, true);

            $ruleItems = array_unique(
                array_merge(
                    $antecedent,
                    $consequent
                )
            );

            $coveredTypes = array_intersect(
                $remainingProposalTypes,
                $ruleItems
            );

            if (count($coveredTypes) > 0) {

                $selectedRules[] = $rule;

                $remainingProposalTypes = array_diff(
                    $remainingProposalTypes,
                    $coveredTypes
                );
            }

            if (empty($remainingProposalTypes)) {
                break;
            }
        }

        foreach ($selectedRules as $rule) {

            MaintenanceAnalysisRule::create([
                'maintenance_analysis_id' => $analysis->id,
                'antecedent' => $rule->antecedent,
                'consequent' => $rule->consequent,
                'support' => $rule->support,
                'confidence' => $rule->confidence,
                'lift' => $rule->lift
            ]);
        }
    }
}
