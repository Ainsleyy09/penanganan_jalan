<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';
    protected $fillable = [ 'road_id','segment_id', 'year', 'side', 'maintenance_type'];

    public function road(){
        return $this->belongsTo(Road::class);
    }
    public function segment(){
        return $this->belongsTo(Segment::class);
    }
}
