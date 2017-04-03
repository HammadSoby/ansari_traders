<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Recipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->paginate(6);
        
        return view('admin/recipes/index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/recipes/create');
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
            'image' => 'required',
            'description' => 'required',
        ]);
        
        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/recipe_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }
        
        $recipe = new Recipe();
        $recipe->slug = str_random(50);
        $recipe->name = $request['name'];
        $recipe->image = Input::file('image')->getClientOriginalName();
        $recipe->description = $request['description'];
        $recipe->save();

        return redirect('/ansari-traders/admin/recipes')->with('success', 'Recipe has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $recipe = Recipe::where('slug', $slug)->first();

        return view('admin/recipes/show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $recipe = Recipe::where('slug', $slug)->first();

        return view('admin/recipes/edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/recipe_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }

        $recipe = Recipe::where('slug', $slug)->first();
        $recipe->slug = str_random(50);
        $recipe->name = $request['name'];
        $recipe->image = Input::file('image')->getClientOriginalName();
        $recipe->description = $request['description'];
        $recipe->update();

        return redirect('/ansari-traders/admin/recipes')->with('success', 'Recipe has been update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Recipe::where('slug', $slug)->delete();

        return redirect('/ansari-traders/admin/recipes')->with('danger', 'Recipe has been deleted.');
    }
}
