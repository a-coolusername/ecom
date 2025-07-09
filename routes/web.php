<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'all']);
    Route::post('/',[ProductController::class, 'addToCart']);
    Route::get('/cart', [ProductController::class, 'cart']);
});