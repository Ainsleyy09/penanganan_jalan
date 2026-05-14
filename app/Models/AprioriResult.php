<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AprioriResult extends Model
{
    protected $table = 'apriori_results';
    protected $fillable = ['road_id', 'side', 'antecedent', 'consequent', 'support', 'confidence', 'lift', 'total_transactions'];

    public function road()
    {
        return $this->belongsTo(Road::class);
    }
}
