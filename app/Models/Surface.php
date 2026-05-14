<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surface extends Model
{
    protected $table = 'surfaces';
    protected $fillable = [ 'road_id', 'segment_id','side', 'surface_subtype_id'];

    public function road(){
        return $this->belongsTo(Road::class);
    }

    public function segment(){
        return $this->belongsTo(Segment::class);
    }

    public function surfacesubtype(){
        return $this->belongsTo(SurfaceSubtype::class);
    }
}
