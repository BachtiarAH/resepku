<?php
namespace App\Repository;

use App\Models\Step;

class StepRepository extends Repository{
    protected Step $step;

    public function __construct() {
        $this->step = new Step();
    }

    public function findAll() {
        return $this->step->get();
    }

    public function create($step,$recipe_id,$order) {
        return $this->step->create([
            'order'=>$order,
            'step'=>$step,
            'recipe_id'=>$recipe_id
        ]);
    }
}