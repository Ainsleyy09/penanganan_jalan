<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $table = 'coordinates';
    protected $fillable = ['road_id', 'latitude', 'longitude'];

    public function road()
    {
        return $this->belongsTo(Road::class);
    }
}
