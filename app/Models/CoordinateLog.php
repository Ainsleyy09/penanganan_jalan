<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoordinateLog extends Model
{
    protected $table = 'coordinate_logs';
    protected $fillable = ['road_id', 'side', 'latitude', 'longitude'];

    public function road(){
        return $this->belongsTo(Road::class);
    }
}
