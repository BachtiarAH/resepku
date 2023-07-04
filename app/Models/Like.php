<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $tabble = 'likes';
    protected $fillable = [
        'user_id',
        'recipe_id',
    ];

    // Disable timestamps for the pivot table
    
}
