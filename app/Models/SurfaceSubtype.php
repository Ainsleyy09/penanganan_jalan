<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurfaceSubtype extends Model
{
    protected $table = 'surface_subtypes';
    protected $fillable = ['surface_type_id', 'name'];

    public function surfacetype(){
        return $this->belongsTo(SurfaceType::class);
    }
}
