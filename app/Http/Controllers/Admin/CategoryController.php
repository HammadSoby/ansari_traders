<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(20);

        return view('admin/categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categories/create');
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
            'name' => 'required|unique:categories'
        ]);
        
        $category = new Category();
        $category->slug = str_random(50);
        $category->name = $request['name'];
        $category->description = $request['description'] ? $request['description']:'-';
        $category->save();
        
        return redirect('/ansari-traders/admin/categories')->with('success', 'Category has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        
        return view('admin/categories/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('admin/categories/edit', compact('category'));
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
        $category = Category::where('slug', $slug)->first();
        $category->slug = str_random(50);
        $category->name = $request['name'];
        $category->description = $request['description'] ? $request['description']:'-';
        $category->update();

        return redirect('/ansari-traders/admin/categories')->with('success', 'Category has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Category::where('slug', $slug)->delete();

        return redirect('/ansari-traders/admin/categories')->with('danger', 'Category has been deleted.');
    }
}
