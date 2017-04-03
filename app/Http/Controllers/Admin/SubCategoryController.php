<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Category;
use App\AdminModels\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SubCategory::orderBy('created_at','DESC')->paginate(10);

        return view('admin/sub-category/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::all();
        
        return view('admin/sub-category/create', compact('main_categories'));
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
            'name' => 'required|unique:sub_categories'
        ]);

        $category = new SubCategory();
        $category->main_category_id = $request['main_category_id'];
        $category->slug = str_random(50);
        $category->name = $request['name'];
        $category->description = $request['description'] ? $request['description']:'-';
        $category->save();

        return redirect('/ansari-traders/admin/sub-categories')->with('success', 'Category has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = SubCategory::where('slug', $slug)->first();

        return view('admin/sub-category/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $main_categories = Category::all();
        $category = SubCategory::where('slug', $slug)->first();

        return view('admin/sub-category/edit', compact('main_categories', 'category'));
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
        $category = SubCategory::where('slug', $slug)->first();
        $category->main_category_id = $request['main_category_id'];
        $category->slug = str_random(50);
        $category->name = $request['name'];
        $category->description = $request['description'] ? $request['description']:'-';
        $category->update();

        return redirect('/ansari-traders/admin/sub-categories')->with('success', 'Category has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        SubCategory::where('slug', $slug)->delete();

        return redirect('/ansari-traders/admin/sub-categories')->with('danger', 'Category has been deleted.');
    }
}
