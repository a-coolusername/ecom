<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'all'])->name('product.all');
    Route::post('/addToCart', [ProductController::class, 'addToCart']);
    Route::get('/cart', [ProductController::class, 'cart']);
    Route::get('/Electronics', [ProductController::class, 'all']);
    Route::get('/Home', [ProductController::class, 'all']);
    Route::get('/Pets', [ProductController::class, 'all']);
    Route::get('/Games', [ProductController::class, 'all']);
    Route::get('/Clothes', [ProductController::class, 'all']);
});
