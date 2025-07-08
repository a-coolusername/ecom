<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function all(){
        return view('allProducts');
    }
    function cart(){
        return view('cart');
    }
}
