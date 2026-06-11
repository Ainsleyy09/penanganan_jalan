<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinalMaintenance extends Model
{
    protected $table = 'final_maintenances';
    protected $fillable = ['maintenance_proposal_id', 'maintenancetype_id'];

    public function maintenanceproposal()
    {
        return $this->belongsTo(MaintenanceProposal::class, 'maintenance_proposal_id');
    }

    public function maintenanceType()
    {
        return $this->belongsTo(MaintenanceType::class, 'maintenancetype_id');
    }
}
