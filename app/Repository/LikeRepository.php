<?php

namespace App\Repository;

use App\Models\Like;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class LikeRepository extends Repository
{
    protected Like $like;

    public function __construct()
    {
        $this->like = new Like;
    }

    public function getSum($recipe_id)
    {
        return $this->like->where('recipe_id', '=', $recipe_id)->count('likes.user_id');
    }

    public function create($users_id, $recipe_id)
    {
        try {
            return $this->like->create([
                'user_id' => $users_id,
                'recipe_id' => $recipe_id
            ]);
        } catch (QueryException $qe) {
            if ($qe->getCode() == 23000) {
                return [
                    'status'=>'query exception',
                    'massage'=>'alredy liked'
                ];
            }
            return [
                'status'=>'query exception',
                'massage'=>'ada masalah saat menambahkan like'
            ];
            
        }catch(Exception $e){
            return [
                'status'=>'undefind error',
                'massage'=>'ada masalah saat menambahkan like'
            ];
        }

    }

    public function delete($users_id, $recipe_id){
        return $this->like->where('user_id','=',$users_id)->where('recipe_id','=',$recipe_id)->delete();
    }
}
