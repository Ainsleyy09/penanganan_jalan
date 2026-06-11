<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceProposal extends Model
{
    protected $table = 'maintenance_proposals';
    protected $fillable = ['road_id', 'year', 'side', 'start_length', 'end_length', 'status'];

    public function road()
    {
        return $this->belongsTo(Road::class);
    }

    public function proposalMaintenances()
    {
        return $this->hasMany(ProposalMaintenance::class);
    }

    public function finalMaintenances()
    {
        return $this->hasMany(FinalMaintenance::class);
    }
}
