<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Category;
use App\AdminModels\Product;
use App\AdminModels\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('admin/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::all();

        return view('admin/product/create', compact('main_categories'));
    }

    public function subCategories(Request $request)
    {
        $sub_categories = SubCategory::where('main_category_id', $request['main_category_id'])->pluck('name', 'id');

        return response()->json($sub_categories);
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
            'main_category_id' => 'required',
            'sub_category_id' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required',
        ]);
        
        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/product_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }

        $product = new Product();
        $product->main_category_id = $request['main_category_id'];
        $product->sub_category_id = $request['sub_category_id'];
        $product->slug = str_random(50);
        $product->price = $request['price'];
        $product->weight = $request['weight'];
        $product->image = Input::file('image')->getClientOriginalName();
        $product->description = $request['description'] ? $request['description']:'-';
        $product->save();

        return redirect('/ansari-traders/admin/products')->with('success', 'Product has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('admin/product/show', compact('product'));
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
        $product = Product::where('slug', $slug)->first();

        return view('admin/product/edit', compact('product', 'main_categories'));
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
            'main_category_id' => 'required',
            'sub_category_id' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required',
        ]);
        
        if(Input::hasfile('image'))
        {
            $destinationPath = public_path('') ."/product_images/";
            $image_name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move($destinationPath, $image_name);
        }

        $product = Product::where('slug', $slug)->first();
        $product->main_category_id = $request['main_category_id'];
        $product->sub_category_id = $request['sub_category_id'];
        $product->slug = str_random(50);
        $product->price = $request['price'];
        $product->weight = $request['weight'];
        $product->image = Input::file('image')->getClientOriginalName();
        $product->description = $request['description'] ? $request['description']:'-';
        $product->update();

        return redirect('/ansari-traders/admin/products')->with('success', 'Product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Product::where('slug', $slug)->delete();

        return redirect('/ansari-traders/admin/products')->with('danger', 'Product has been deleted.');
    }
}
