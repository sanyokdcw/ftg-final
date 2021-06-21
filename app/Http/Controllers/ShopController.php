<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Cart;
use App\Models\OrderProduct;
use App\Models\Order;
use Auth;

class ShopController extends Controller
{
    public function card($id, Request $request){
        $subcategory = Subcategory::find($id);
        $products = Product::where('available', 1)->where('subcategory_id', $subcategory->id)->orderBy('price_kz', 'asc')->get();
        if($request->has('sort')) {
            $sort = $request->sort;
            if($sort == 'down')
                $products = Product::where('available', 1)->where('subcategory_id', $subcategory->id)->orderBy('price_kz', 'desc')->get();
            if($sort == 'up')
                $products = Product::where('available', 1)->where('subcategory_id', $subcategory->id)->orderBy('price_kz', 'asc')->get();

            return view('card', compact('subcategory', 'products', 'sort'));
        }
        $sort = 'up';
        return view('card', compact('subcategory', 'products', 'sort'));
    }


    public function card_detail($id){
        $product = Product::find($id);
        $products = Product::where('available', 1)->where('id', '!=', $id)->inRandomOrder()->take(3)->get();
        return view('carddetail', compact('product', 'products'));
    }

    public function cart_add(Request $request) {
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->get();
        if($cart->isEmpty() == false){
            $cart[0]->update(['quantity' => $cart[0]->quantity + $request->quantity]);
        }
        else{
            Cart::create([
                'user_id'=>Auth::user()->id,
                'product_id'=>$request->product_id,
                'quantity'=>$request->quantity,
            ]);
        }
        return redirect()->back()->with('cart', 'cart');;
    }

    public function cart_remove(Request $request) {
        Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first()->delete();
        return redirect()->back();
    }

    public function cart(Request $request){
        $cart_items = Cart::where('user_id', Auth::user()->id)->get();
        $sum = 0;
        $discount = 0;
        $discountSum = 0;
        foreach($cart_items as $item) {
            $product = Product::find($item->product_id);
            if(session('currency') == 'UAH'){
                $price = $product->price_uah;
            }else if(session('currency') == 'RUB'){
                $price = $product->price_ru;
            }else{
                $price = $product->price_kz;
            }
        	$sum+= $price * $item->quantity;
            $discount += $product->sale;
            $discountSum += $product->price_kz - ( $product->price_kz * ($product->sale / 100));
        }

        $popular = Product::where('available', 1)->inRandomOrder()->take(3)->get();

        return view('cart', compact('cart_items', 'sum', 'popular', 'discount', 'discountSum'));
    }
    public function add_order(Request $request){
        $order = Order::Create([
            'user_id'=> Auth::user()->id,
            'sum'=>$request->sum,
            'status' => 'В обработке'
        ]);
        $products = $request->products;
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        for($i = 0; $i <= count($products)-1; $i++){
            OrderProduct::Create([
                'product_id'=>$products[$i],
                'order_id'=>$order->id,
                'quantity'=>$carts[$i]->quantity,
            ]);
        }
        foreach($carts as $cart){
            $cart->delete();
        }
        return redirect('/office');
    }
    
    public function office(){
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $popular = Product::where('available', 1)->inRandomOrder()->take(3)->get();

        foreach($orders as $order){
            $order->products = $order->order_products;
        }
        return view('office', compact('orders', 'popular'));
    }
    public function currency_change($currency, Request $request){
        session(['currency' => $currency]);
        return redirect()->back();
    }
    
}
