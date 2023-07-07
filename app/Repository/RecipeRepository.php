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

    public function getAllWithLike($userId)
    {
        // $query = "select COUNT(likes.user_id), `recipes`.`id` as `recipe_id` , `recipes`.`title`, `recipes`.`description`, `recipes`.`slug`, `recipes`.`thumbnail`, (select CASE WHEN EXISTS (SELECT 1 FROM likes WHERE likes.recipe_id = recipes.id AND user_id = 2) THEN 'true' ELSE 'false' END) as `liked` from  `recipes` LEFT join `likes` on `recipes`.`id` = `likes`.`recipe_id` GROUP BY recipes.id order by `recipes`.`id` asc;";
        $results = $results = DB::select("
        SELECT COUNT(likes.user_id) AS `like`, recipes.id AS recipe_id, recipes.title, recipes.description, recipes.slug, recipes.thumbnail,
        (CASE WHEN EXISTS (SELECT 1 FROM likes WHERE likes.recipe_id = recipes.id AND user_id = $userId) THEN 'true' ELSE 'false' END) AS liked
        FROM recipes
        LEFT JOIN likes ON recipes.id = likes.recipe_id
        GROUP BY recipes.id
        ORDER BY recipes.id ASC
    ");

        return $results;
    }

    public function getById($id)
    {
        return DB::table('receipts')->where('id', $id);
    }

    public function getBySLug($slug)
    {
        return $this->receipt->where('slug', $slug)->get();
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
