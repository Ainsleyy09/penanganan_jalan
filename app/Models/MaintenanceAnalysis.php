<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceAnalysis extends Model
{
    protected $table = 'maintenance_analyses';
    protected $fillable = ['maintenance_proposal_id', 'antecedent', 'consequent', 'support', 'confidence', 'lift', 'status', 'description'];

    public function maintenanceproposal(){
        return $this->belongsTo(MaintenanceProposal::class);
    }
}
