<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceLog extends Model
{
    protected $table = 'maintenance_logs';
    protected $fillable = [ 'road_id', 'year','side', 'start_length','end_length','maintenancetype_id'];

    public function road(){
        return $this->belongsTo(Road::class);
    }

    public function maintenancetype(){
        return $this->belongsTo(MaintenanceType::class);
    }
}
