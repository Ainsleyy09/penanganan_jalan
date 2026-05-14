<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $table = 'segments';
    protected $fillable = [ 'road_id','start_length','end_length',];

    public function road(){
        return $this->belongsTo(Road::class);
    }
}
