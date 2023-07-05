<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $tabble = 'steps';
    protected $primaryKey = 'id';
    protected $fillable = [
        'order',
        'step',
        'recipe_id',
    ];

    // Define the relationship with receipt
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
