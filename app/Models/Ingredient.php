<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $tabble = 'ingredients';
    protected $fillable = [
        'ingredient',
        'receipt_id',
        
    ];

    // Define the relationship with receipt
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
