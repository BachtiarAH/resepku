<?php

namespace App\Repository;

use App\Models\Like;
use App\Models\Recipe;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class RecipeRepository extends Repository
{
    protected Recipe $receipt;
    protected Like $like;

    public function __construct()
    {
        $this->receipt = new Recipe();
        $this->like = new Like();
    }

    public function getAll()
    {
        return $this->receipt->get();
    }

    public function getAllWithLike($idUser)
    {
        $result = $this->like->rightJoin('recipes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('likes.user_id as like', 'recipes.id as recipe_id', 'recipes.title', 'recipes.description', 'recipes.slug','recipes.thumbnail')
            ->selectSub(function ($query) use ($idUser) {
                $query->selectRaw("CASE WHEN EXISTS (SELECT 1 FROM likes WHERE likes.recipe_id = recipes.id AND user_id = $idUser) THEN 'true' ELSE 'false' END");
            }, 'liked')
            ->orderBy('recipes.id')
            ->get();

        return $result;
    }

    public function getById($id)
    {
        return DB::table('receipts')->where('id', $id);
    }

    public function getBySLug($slug) {
        return $this->receipt->where('slug',$slug)->get();
    }

    public function create($title, $thumbnail, $description, $slug, $user_id)
    {
        return $this->receipt->create([
            'title' => $title,
            'thumbnail' => $thumbnail,
            'description' => $description,
            'slug' => $slug,
            'user_id' => $user_id
        ]);
    }

    public function update($id, $title, $thumbnail, $description, $user_id)
    {
        DB::table('receipts')->find($id)->update([
            'title' => $title,
            'thumbnail' => $thumbnail,
            'description' => $description
        ]);
    }
}
