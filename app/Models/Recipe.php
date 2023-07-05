<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $tabble = 'recipe';
    protected $fillable = [
        'title',
        'thumbnail',
        'description',
        'user_id',
        'slug'
    ];

    // Define the relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with ingredients
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    // Define the relationship with steps
    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    // Define the relationship with users who liked the receipt
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'receipt_id', 'user_id');
    }
}
