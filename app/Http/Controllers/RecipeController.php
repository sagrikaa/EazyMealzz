<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use Excel;
use App\Exports\RecipesExport;

class RecipeController extends Controller
{

    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $title = "RECIPES";
      $recipes= Recipe::orderby('id','asc')->paginate(2);
      return view('recipes.recipe_display')->with('title',$title)->with('recipes',$recipes);
    }
    /**
     * Display a listing of the resource.
     *
     * Export to Excel Link
     */
    public function export()
    {
        return Excel::download(new RecipesExport, 'recipes.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'steps' => 'required',
        ]);

        $recipe = new Recipe();
        $recipe->name = $request->input('name');
        $recipe->description = $request->input('description');
        $recipe->servings = $request->input('serving_size');
        $recipe->calories = $request->input('calories');
        $recipe->steps = $request->input('steps');
        $recipe->save();

        $imagePath = $request->file('image')->storeAs('recipes', 'recipe-'.$recipe->id.'.'.$request->file('image')->getClientOriginalExtension());
        
        $image = Image::make(Storage::get($imagePath))->resize(320,240)->encode();
        Storage::put($imagePath,$image);

        $recipe->image_url = $imagePath;

        $recipe->user()->associate(Auth::user());

        $recipe->save();

        return redirect('recipes/'.$recipe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.show')->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.edit')->with('recipe', $recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'steps' => 'required',
        ]);

        $recipe = Recipe::find($id);
        $recipe->name = $request->input('name');
        $recipe->description = $request->input('description');
        $recipe->servings = $request->input('serving_size');
        $recipe->calories = $request->input('calories');
        $recipe->steps = $request->input('steps');
        $recipe->save();

        if ($request->file('image') != null) {
            File::delete('recipes/recipe-'.$recipe->id);
            $imagePath = $request->file('image')->storeAs('recipes', 'recipe-'.$recipe->id.'.'.$request->file('image')->getClientOriginalExtension());
            
            $image = Image::make(Storage::get($imagePath))->resize(480,240)->encode();
            Storage::put($imagePath,$image);

            $recipe->image_url = $imagePath;
            $recipe->save();
        }

        return redirect('recipes/'.$recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::destroy($id);
        return redirect('/feed');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reject($id)
    {
      $recipe = Recipe::find($id);
      $recipe->recipe_status="Rejected";
      $recipe->save();
      return redirect()->route('recipedisp');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
      $recipe = Recipe::find($id);
      $recipe->recipe_status="Approved";
      $recipe->save();
      return redirect()->route('recipedisp');
    }
}
