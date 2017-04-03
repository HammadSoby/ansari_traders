<?php

namespace App\Http\Controllers;

use App\AdminModels\Category;
use App\AdminModels\Product;
use App\AdminModels\Recipe;
use App\AdminModels\Slider;
use App\AdminModels\SubCategory;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AnsariTradersController extends Controller
{
    public function home()
    {
        $main_categories = Category::all();
        $sliders = Slider::orderBy('created_at', 'DESC')->paginate(4);
        $products = Product::orderBy('created_at', 'DESC')->paginate(9);
        
        return view('ansari_traders/index', compact('main_categories', 'sliders', 'products'));
    }

    public function product($name, $id, $slug)
    {
        $main_categories = Category::all();
        $products = Product::where('main_category_id', $id)->get();
        
        return view('ansari_traders/products', compact('main_categories', 'products', 'name'));
    }

    public function productDetail($name, $id, $slug)
    {
        $main_categories = Category::all();
        $product = Product::where('id', $id)
                          ->where('slug', $slug)
                          ->first();
        
        $sub_category = SubCategory::where('id', $product->sub_category_id)->first();
        $related_products = Product::where('main_category_id', $product->main_category_id)->paginate(3);

        return view('ansari_traders/product_detail', compact('main_categories', 'sub_category', 'product', 'related_products', 'name'));
    }

    public function recipe()
    {
        $main_categories = Category::all();
        $recipes = Recipe::orderBy('created_at', 'DESC')->paginate(6);

        $related_recipes = Recipe::orderBy('created_at', 'DESC')->paginate(3);

        return view('ansari_traders/recipes', compact('main_categories', 'recipes', 'related_recipes'));
    }

    public function recipeDetail($name, $id, $slug)
    {
        $main_categories = Category::all();
        $recipe = Recipe::where('id', $id)
                        ->where('slug', $slug)
                        ->where('name', $name)
                        ->first();

        $related_recipes = Recipe::orderBy('created_at', 'DESC')->get();

        $menu_recipes = Recipe::orderBy('created_at', 'DESC')->get();

        return view('ansari_traders/recipe_detail', compact('main_categories', 'recipe', 'related_recipes', 'name', 'menu_recipes'));
    }
    
    public function contactUs()
    {
        $main_categories = Category::all();
        
        return view('ansari_traders/contact-us', compact('main_categories'));
    }

    public function getAddToCart(Request $request, $name, $id, $slug)
    {
        $product = Product::where('id', $id)
                          ->where('slug', $slug)
                          ->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect('/')->with('success', 'Product has been added into cart.');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);

        return redirect()->back();
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function getCart()
    {
        $main_categories = Category::all();

        if(!Session::has('cart')){
            return view('ansari_traders/shopping-cart', compact('main_categories'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('ansari_traders/shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'main_categories' => $main_categories]);
    }

    public function getCheckout()
    {
        $main_categories = Category::all();

        if(!Session::has('cart')){
            return view('ansari_traders/shopping-cart', compact('main_categories'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $total = $cart->totalPrice;

        return view('ansari_traders/checkout', ['total' => $total, 'main_categories' => $main_categories]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')){
            return redirect('/shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->slug = str_random(50);
        $order->name = $request['name'];
        $order->email = $request['email'];
        $order->phone = $request['phone'];
        $order->city = $request['city'];
        $order->code = $request['code'];
        $order->address = $request['address'];
        $order->cart = serialize($cart);
        $order->status = 'Pending';
        Auth::user()->orders()->save($order);

        $cart = unserialize($order->cart);

        \Mail::send('email/user-email', compact('order','cart'), function ($m) use ($order) {
            $m->from(env('MAIL_USERNAME'));
            $m->to($order['email'])->subject("Ansari Trader's Order Completion Email");
        });

        Session::forget('cart');

        return redirect('/')->with('success', 'Successfully order is placed!');
    }
}
