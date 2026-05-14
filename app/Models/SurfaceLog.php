<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurfaceLog extends Model
{
    protected $table = 'surface_logs';
    protected $fillable = [ 'road_id', 'start_length','end_length','side', 'surface_subtype_id'];

    public function road(){
        return $this->belongsTo(Road::class);
    }

    public function surfacesubtype(){
        return $this->belongsTo(SurfaceSubtype::class);
    }
}
