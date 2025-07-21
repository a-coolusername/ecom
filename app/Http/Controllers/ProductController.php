<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirmation;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Tests\Integration\Queue\Order;

class ProductController extends Controller
{
    function all(Request $request){
        $products = Product::paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
            );
    }
    function home(Request $request){
        $products = Product::where('category_id', 1)->paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
        );
    }
    function electronics(Request $request){
        $products = Product::where('category_id', 2)->paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
        );
    }
    function pets(Request $request){
        $products = Product::where('category_id', 3)->paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
        );
    }
    function games(Request $request){
        $products = Product::where('category_id', 4)->paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
        );
    }
    function clothes(Request $request){
        $products = Product::where('category_id', 5)->paginate(4);

        $cart = json_decode($request->cookie('cart', '[]'), true);
        $cart_items = count($cart);
        $cart_count = array_sum($cart);
        return view('allProducts',
            compact('products', 'cart', 'cart_count', 'cart_items'),
        );
    }
    function addToCart(Request $request){
        $products = Product::all();
        $product_id = $request->input('product_id');
        $cart = json_decode($request->cookie('cart', '[]'), true);
            if (isset($cart[$product_id])) {
                $cart[$product_id]++;
            }
            else{$cart[$product_id] = 1;}

            $cookie = cookie('cart', json_encode($cart), 60);
        return redirect()->route('product.all')
            ->withCookie($cookie);

    }

    function show($id){
        $product = Product::findOrFail($id);
        // $category = Product::findOrFail($product->category_id);  --> this looks for id = $product->category_id
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->paginate(4);
        return view('individual', compact('product', 'relatedProducts'));
    }

    function cart(Request $request){
        $cartItems = json_decode($request->cookie('cart', '[]'), true);
        $productIds = array_keys($cartItems);
        $cartProducts = Product::whereIn('id', $productIds)->get();
        return view('cart', compact('cartProducts', 'cartItems'));
    }

    function checkout(Request $request){
        $cartItems = json_decode($request->cookie('cart', '[]'), true);
        $productIds = array_keys($cartItems);
        $cartProducts = Product::whereIn('id', $productIds)->get();

        $items = array();
        $sum = 0;

        foreach ($cartProducts as $product) {
            $quantity = $cartItems[$product->id];
            $totalPrice = $product->price * $quantity;
            $sum += $totalPrice;

            $items[] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'total' => $totalPrice,
            ];
        }

        //foreach ($cartProducts as $cartProduct) {
        //            $name = $cartProduct->name;
        //            $price = $cartProduct->price;
        //            $quantity = array_values($cartItems);
        //        }

        return view('checkout', compact('sum', 'items'));
    }

    function removeFromCart(Request $request)
    {
        $cartItems = json_decode($request->cookie('cart', '[]'), true);
        $product_id = $request->input('product_id');

        if (isset($cartItems[$product_id])) {
            $cartItems[$product_id]--;

            if ($cartItems[$product_id] <= 0) {
                unset($cartItems[$product_id]);
            }
        }

        $cookie = cookie('cart', json_encode($cartItems), 60);
        return redirect()->route('product.cart')->withCookie($cookie);
    }

    function purchase(Request $request){
        $cartItems = json_decode($request->cookie('cart', '[]'), true);
        $productIds = array_keys($cartItems);
        $cartProducts = Product::whereIn('id', $productIds)->get();
        $items = array();
        $sum = 0;

        foreach ($cartProducts as $product) {
            $quantity = $cartItems[$product->id];
            $totalPrice = $product->price * $quantity;
            $sum += $totalPrice;

            $items[] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'total' => $totalPrice,
            ];
        }



        $user = auth()->user();
        if ($user){
        Mail::to($user->email)->send(new OrderConfirmation($user->name, $items));
        }
        return view('purchase');
    }
}
