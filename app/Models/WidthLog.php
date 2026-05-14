<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WidthLog extends Model
{
    protected $table = 'width_logs';
    protected $fillable = [ 'road_id', 'start_length','end_length','side','width'];

    public function road(){
        return $this->belongsTo(Road::class);
    }
}
