<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'all'])->name('product.all');
    Route::post('/addToCart', [ProductController::class, 'addToCart']);
    Route::post('/cart', [ProductController::class, 'removeFromCart']);
    Route::get('/cart', [ProductController::class, 'cart'])->name('product.cart');
    Route::get('/Home', [ProductController::class, 'home']);
    Route::get('/Electronics', [ProductController::class, 'electronics']);
    Route::get('/Pets', [ProductController::class, 'pets']);
    Route::get('/Games', [ProductController::class, 'games']);
    Route::get('/Clothes', [ProductController::class, 'clothes']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('/Checkout', [ProductController::class, 'checkout']);
    Route::post('/purchase', [ProductController::class, 'purchase']);
});

Route::fallback(function () {});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
