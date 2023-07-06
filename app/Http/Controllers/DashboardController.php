<?php
namespace App\Http\Controllers;

use App\Repository\RecipeRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller{
    protected RecipeRepository $recipeRepo;

    public function __construct() {
        $this->recipeRepo = new RecipeRepository;
    }

    public function index(Request $request) {
        $user = $request->user();
        $recipes = $this->recipeRepo->getAllWithLike($user->id);

        return Inertia::render('Dashboard',['recipes'=>$recipes,'user_id'=>$user->id]);
    }
}