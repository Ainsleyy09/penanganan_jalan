<?php

namespace App\Services;

use App\Models\AprioriResult;
use App\Models\Maintenance;
use App\Models\MaintenanceAnalysis;

class MaintenanceAnalysisService
{
    // cek apakah ada hasil analisis
    public function hasAnalysis($proposal)
    {
        $histories = Maintenance::where('road_id', $proposal['road_id'])
            ->where('side', $proposal['side'])
            ->pluck('maintenance_type')
            ->toArray();

        $rules = AprioriResult::where('road_id', $proposal['road_id'])
            ->where('side', $proposal['side'])
            ->get();

        foreach ($rules as $rule) {

            $antecedent = json_decode($rule->antecedent, true);
            $consequent = json_decode($rule->consequent, true);

            $antecedentMatch =
                count(array_intersect($antecedent, $histories))
                == count($antecedent);

            $consequentMatch =
                in_array($proposal['maintenance_type'], $consequent);

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
            ->pluck('maintenance_type')
            ->toArray();

        $rules = AprioriResult::where('road_id', $proposal->road_id)
            ->where('side', $proposal->side)
            ->orderByDesc('confidence')
            ->orderByDesc('lift')
            ->orderByDesc('support')
            ->get();

        $matched = false;

        foreach ($rules as $rule) {

            $antecedent = json_decode($rule->antecedent, true);
            $consequent = json_decode($rule->consequent, true);

            $antecedentMatch =
                count(array_intersect($antecedent, $histories))
                == count($antecedent);

            $consequentMatch =
                in_array($proposal->maintenance_type, $consequent);

            if ($antecedentMatch && $consequentMatch) {

                $matched = true;

                MaintenanceAnalysis::create([
                    'maintenance_proposal_id' => $proposal->id,
                    'antecedent' => $rule->antecedent,
                    'consequent' => $rule->consequent,
                    'support' => $rule->support,
                    'confidence' => $rule->confidence,
                    'lift' => $rule->lift,
                    'status' => 'approved',

                    'description' =>
                        'Usulan penanganan sesuai dengan pola historis pada ruas dan sisi jalan ini. '
                        . 'Pola '
                        . implode(', ', $antecedent)
                        . ' -> '
                        . implode(', ', $consequent)
                        . ' memiliki support sebesar '
                        . $rule->support
                        . ', confidence sebesar '
                        . $rule->confidence
                        . ', dan lift sebesar '
                        . $rule->lift
                        . '.'
                ]);
            }
        }

        // kalau tidak ada yang cocok
        if (!$matched) {

            MaintenanceAnalysis::create([
                'maintenance_proposal_id' => $proposal->id,
                'antecedent' => json_encode([]),
                'consequent' => json_encode([]),
                'support' => 0,
                'confidence' => 0,
                'lift' => 0,
                'status' => 'review',

                'description' =>
                    'Usulan penanganan tidak sesuai dengan pola historis hasil analisis Apriori pada ruas dan sisi jalan ini sehingga memerlukan peninjauan lebih lanjut.'
            ]);
        }
    }
}