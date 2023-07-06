<?php

namespace App\Http\Controllers;

use App\Repository\LikeRepository;
use Exception;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    protected LikeRepository $likeRepo;

    public function __construct()
    {
        $this->likeRepo = new LikeRepository;
    }

    public function likeAction(Request $request)
    {
            $result = $this->likeRepo->create($request->input('userId'), $request->input("recipeId"));
            if (isset($result['messge'])) {
                echo json_encode($result);
            }else{
                echo json_encode(['status'=>'success','result'=>$result]);
            }
    }

    public function dislikeAction(Request $request)
    {
        $result = $this->likeRepo->delete($request->input('userId'), $request->input("recipeId"));
        if (isset($result['messge'])) {
            echo json_encode($result);
        }else{
            echo json_encode(['status'=>'success','result'=>$result]);
        }
    }
}
