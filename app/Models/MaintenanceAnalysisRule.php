<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceAnalysisRule extends Model
{
    protected $table = 'maintenance_analysis_rules';
    protected $fillable = ['maintenance_analysis_id', 'antecedent', 'consequent', 'support', 'confidence', 'lift'];

    public function analysis()
    {
        return $this->belongsTo(MaintenanceAnalysis::class,'maintenance_analysis_id');
    }
}
