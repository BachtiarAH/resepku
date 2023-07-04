<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $tabble = 'steps';
    protected $fillable = [
        'step',
        'receipt_id',
    ];

    // Define the relationship with receipt
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
