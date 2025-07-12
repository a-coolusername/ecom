<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function all(){
        $products = Product::all();

        $cart = session::get('cart',[]);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts', compact('products', 'cart', 'cart_count', 'cart_items'));
    }
    function addToCart(Request $request){
        $products = Product::all();
        $product_id = $request->input('product_id');
        $cart = Session::get('cart', []);
            if (isset($cart[$product_id])) {
                $cart[$product_id]++;
            }
            else{$cart[$product_id] = 1;}
            Session::put('cart', $cart);
            $cart_items = count($cart);
            $cart_count = array_sum($cart);
        return redirect()->route('product.all')
                   ->with(['products'=>$products,
                   'cart_count'=>$cart_count,
                   'cart_items'=>$cart_items ]);

    }
    function cart(){
        return view('cart');
    }
}
