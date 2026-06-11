<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    protected $table = 'roads';
    protected $fillable = ['road_code', 'name', 'road_length'];

    public function segments()
    {
        return $this->hasMany(Segment::class);
    }

    public function coordinate()
{
    return $this->hasOne(Coordinate::class);
}
}
