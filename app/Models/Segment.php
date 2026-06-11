<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $table = 'segments';
    protected $fillable = ['road_id', 'start_length', 'end_length',];

    public function road()
    {
        return $this->belongsTo(Road::class);
    }

    public function surfaces()
    {
        return $this->hasMany(Surface::class);
    }

    public function widths()
    {
        return $this->hasMany(Width::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
