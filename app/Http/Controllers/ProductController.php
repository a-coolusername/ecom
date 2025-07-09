<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function all(){
        $products = Product::all();
        return view('allProducts', compact('products'));
    }
    function addToCart(){
        $products = Product::all();
        return view('allProducts', compact('products'));
    }
    function cart(){
        return view('cart');
    }
}
