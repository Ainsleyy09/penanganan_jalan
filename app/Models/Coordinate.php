<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $table = 'coordinates';
    protected $fillable = ['segment_id', 'side', 'latitude','longitude'];

    public function segment(){
        return $this->belongsTo(Segment::class);
    }
}

