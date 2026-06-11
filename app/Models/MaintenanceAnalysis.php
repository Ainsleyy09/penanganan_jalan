<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceAnalysis extends Model
{
    protected $table = 'maintenance_analyses';
    protected $fillable = ['maintenance_proposal_id', 'status', 'description'];

    public function maintenanceproposal()
    {
        return $this->belongsTo(MaintenanceProposal::class);
    }

    public function rules()
    {
        return $this->hasMany(MaintenanceAnalysisRule::class, 'maintenance_analysis_id');
    }
}
