<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemProcess extends Model
{
    protected $table = 'system_processes';
    protected $fillable = [ 'year', 'is_closed','closed_at', 'segment_generated', 'segment_generated_at', 'apriori_generated', 'apriori_generated_at'];

}
