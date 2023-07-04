<?php

namespace App\Repository;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeRepository extends Repository {
    protected Recipe $receipt;

    public function __construct() {
        $this->receipt = new Recipe();
    }

    public function getAll() {
        return $this->receipt->get();
    }
    
    public function getById($id) {
        return DB::table('receipts')->where('id',$id);
    }

    public function create($title, $thumbnail, $description, $user_id) {
        return $this->receipt->create([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'description'=>$description,
            'user_id'=>$user_id
        ]);
    }

    public function update($id,$title, $thumbnail, $description, $user_id){
        DB::table('receipts')->find($id)->update([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'description'=>$description
        ]);
    }


}