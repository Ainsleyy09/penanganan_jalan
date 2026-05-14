<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Width extends Model
{
    protected $table = 'widths';
    protected $fillable = [ 'road_id', 'segment_id','side', 'width'];

    public function road(){
        return $this->belongsTo(Road::class);
    }
    public function segment(){
        return $this->belongsTo(Segment::class);
    }
}
