<?php
namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Step;
use App\Repository\IngredientRepository;
use App\Repository\RecipeRepository;
use App\Repository\StepRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RecipeController extends Controller{
    protected RecipeRepository $recipe;
    protected IngredientRepository $ingredientRepo;
    protected StepRepository $stepRepo;

    public function __construct() {
        $this->recipe = new RecipeRepository();
        $this->ingredientRepo = new IngredientRepository;
        $this->stepRepo = new StepRepository;
    }

    public function index(Request $request) {

        

        return Inertia::render('Recipe/Create');
    }

    public function store(Request $request) {
        if ($request->hasFile('thumbnail')) {
            //get data from request
            $title = $request->input('title');
            $description = $request->input('description');
            $ingredient = $request->input('ingredient');
            $step = $request->input('step');
            $slug = $this->recipe->slugMaker($title);
            $image = $request->file('thumbnail');

            //save the thumbnail
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $directory = public_path('asset/thumbnail/');
            $image->move($directory, $fileName);

            //store the recipe to database
            $recipe = $this->recipe->create($title,'asset/thumbnail/'.$fileName,$description,$slug,1);

            $idRecipe = $recipe->id;
            //store ingredient
            foreach ($ingredient as $key => $value) {
                $this->ingredientRepo->create($value,$idRecipe);
            }

            //store step
            foreach ($step as $key => $value) {
                $this->stepRepo->create($value,$idRecipe,$key);
            }


            return redirect()->back()->with('status','success');
        }

        dd($request);

        return response()->json(['message' => 'No image uploaded'], 400);
    }


}