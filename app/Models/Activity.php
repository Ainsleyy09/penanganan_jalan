<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = [ 'user_id', 'activity', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
