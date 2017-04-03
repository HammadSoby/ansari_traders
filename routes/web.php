<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','AnsariTradersController@home');
Route::get('/product/{name}/{id}/{slug}','AnsariTradersController@product');
Route::get('/product-detail/{name}/{id}/{slug}','AnsariTradersController@productDetail');
Route::get('/add-to-cart/{name}/{id}/{slug}','AnsariTradersController@getAddToCart');
Route::get('/reduce-product-by-one/{id}','AnsariTradersController@getReduceByOne');
Route::get('/reduce-all-product/{id}','AnsariTradersController@getRemoveItem');
Route::get('/shopping-cart','AnsariTradersController@getCart');
Route::get('/checkout','AnsariTradersController@getCheckout')->middleware('auth');
Route::post('/checkout','AnsariTradersController@postCheckout')->middleware('auth');
Route::get('/recipes','AnsariTradersController@recipe');
Route::get('/recipe-detail/{name}/{id}/{slug}','AnsariTradersController@recipeDetail');
Route::get('/contact-us','AnsariTradersController@contactUs');

Route::group([
    'prefix' => 'ansari-traders',
    'namespace' => 'Admin',
], function () {

    Route::get('/admin','AdminController@home');
    Route::get('/admin/orders','AdminController@getOrder');
    Route::get('/admin/view-order/{slug}','AdminController@getInvoice');
    Route::get('/admin/update-order-status/{slug}','AdminController@updateOrderStatus');

    Route::get('/admin/categories','CategoryController@index');
    Route::get('/admin/add-category','CategoryController@create');
    Route::post('/admin/add-category','CategoryController@store');
    Route::get('/admin/view-category/{slug}','CategoryController@show');
    Route::get('/admin/edit-category/{slug}','CategoryController@edit');
    Route::post('/admin/edit-category/{slug}','CategoryController@update');
    Route::get('/admin/delete-category/{slug}','CategoryController@destroy');

    Route::get('/admin/sub-categories','SubCategoryController@index');
    Route::get('/admin/add-sub-category','SubCategoryController@create');
    Route::post('/admin/add-sub-category','SubCategoryController@store');
    Route::get('/admin/view-sub-category/{slug}','SubCategoryController@show');
    Route::get('/admin/edit-sub-category/{slug}','SubCategoryController@edit');
    Route::post('/admin/edit-sub-category/{slug}','SubCategoryController@update');
    Route::get('/admin/delete-sub-category/{slug}','SubCategoryController@destroy');

    Route::get('/admin/products','ProductController@index');
    Route::get('/admin/add-product','ProductController@create');
    Route::post('/admin/sub-categories','ProductController@subCategories');
    Route::post('/admin/add-product','ProductController@store');
    Route::get('/admin/view-product/{slug}','ProductController@show');
    Route::get('/admin/edit-product/{slug}','ProductController@edit');
    Route::post('/admin/update-product/{slug}','ProductController@update');
    Route::get('/admin/delete-product/{slug}','ProductController@destroy');

    Route::get('/admin/recipes','RecipesController@index');
    Route::get('/admin/add-recipe','RecipesController@create');
    Route::post('/admin/add-recipe','RecipesController@store');
    Route::get('/admin/view-recipe/{slug}','RecipesController@show');
    Route::get('/admin/edit-recipe/{slug}','RecipesController@edit');
    Route::post('/admin/update-recipe/{slug}','RecipesController@update');
    Route::get('/admin/delete-recipe/{slug}','RecipesController@destroy');

    Route::get('/admin/slider','SliderController@index');
    Route::get('/admin/add-slider','SliderController@create');
    Route::post('/admin/add-slider','SliderController@store');
    Route::get('/admin/view-slider/{slug}','SliderController@show');
    Route::get('/admin/edit-slider/{slug}','SliderController@edit');
    Route::post('/admin/update-slider/{slug}','SliderController@update');
    Route::get('/admin/delete-slider/{slug}','SliderController@destroy');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
