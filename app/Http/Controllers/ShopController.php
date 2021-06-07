<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Cart;
use App\Models\OrderProduct;
use App\Models\Order;

class ShopController extends Controller
{
    public function card($id){
        $subcategory = Subcategory::find($id);
        $products = $subcategory->products;
        return view('card', compact('subcategory', 'products'));
    }

    public function card_detail($id){
        $product = Product::find($id);
        $products = Product::where('id', '!=', $id)->inRandomOrder()->take(3)->get();
        return view('carddetail', compact('product', 'products'));
    }

    public function cart_add(Request $request) {
        Cart::create([
            'user_id'=>1,
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->back();
    }
    public function cart(){
        $cart_items = Cart::all();
        $sum = 0;
        
        foreach($cart_items as $item) {
        $product = \App\Models\Product::find($item->product_id);
        	$sum+= $product->price_kz * $item->quantity;
        
        }
        return view('cart', compact('cart_items', 'sum'));
    }
    public function add_order(Request $request){
        $order = Order::Create([
            'user_id'=>1,
            'sum'=>$request->sum,
        ]);
        $products = $request->products;
        foreach($products as $product){
            OrderProduct::Create([
                'product_id'=>$product,
                'order_id'=>$order->id,
            ]);
        }
        $carts = Cart::where('user_id', 1)->get();
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect('/office');
    }
    
    public function office(){
        $orders = Order::all();
        
        foreach($orders as $order){
            $order->products = $order->order_products;
        }
        
        return view('office', compact('orders'));
    }
}
