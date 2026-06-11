<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProposalMaintenance extends Model
{
    protected $table = 'proposal_maintenances';
    protected $fillable = ['maintenance_proposal_id', 'maintenancetype_id'];

    public function maintenanceproposal()
    {
        return $this->belongsTo(MaintenanceProposal::class,'maintenance_proposal_id');
    }

    public function maintenanceType()
    {
        return $this->belongsTo(MaintenanceType::class, 'maintenancetype_id');
    }
}
