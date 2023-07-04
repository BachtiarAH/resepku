<?php
namespace App\Repository;

use App\Models\Ingredient;

class IngredientRepository extends Repository{
    protected Ingredient $ingredient;

    public function __construct() {
        $this->ingredient = new Ingredient();
    }

    public function findAll() {
        return $this->ingredient->get();
    }

    public function create($ingredient,$recipe_id) {
        return $this->ingredient->create([
            'ingredient'=>$ingredient,
            'recipe_id'=>$recipe_id
        ]);
    }

}