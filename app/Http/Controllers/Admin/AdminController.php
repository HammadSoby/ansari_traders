<?php

namespace App\Http\Controllers\Admin;

use App\AdminModels\Category;
use App\AdminModels\Product;
use App\AdminModels\Recipe;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        
        $products = Product::all();
        $recipes = Recipe::all();
        $main_categories = Category::all();

        return view('admin/index', compact('products', 'recipes', 'main_categories'));
    }
    
    public function getOrder(Request $request)
    {
        $query = new Order();
        if($request->has('search')){
            $search = '%'.$request->get('search').'%';
            $query = $query
                ->orWhere('name','LIKE', $search)
                ->orWhere('email','LIKE', $search)
                ->orWhere('phone','LIKE', $search)
                ->orWhere('address','LIKE', $search);
        }

        $orders = $query->orderBy('created_at', 'DESC')->get();
        
        return view('admin/order', compact('orders'));
    }
    
    public function getInvoice($slug)
    {
        $order = Order::where('slug', $slug)->first();
        $cart = unserialize($order->cart);
        
        return view('admin/invoice', compact('order', 'cart'));
    }
    
    public function updateOrderStatus($slug)
    {
        Order::where('slug', $slug)->update(['status' => 'Buy']);
        
        return redirect()->back()->with('success', 'Order status has been updated.');
    }
}
