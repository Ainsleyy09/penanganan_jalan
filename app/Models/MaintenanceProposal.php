<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceProposal extends Model
{
    protected $table = 'maintenance_proposals';
    protected $fillable = ['road_id', 'year','side', 'start_length','end_length','maintenance_type', 'status'];

    public function road(){
        return $this->belongsTo(Road::class);
    }
}
