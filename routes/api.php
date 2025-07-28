<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// apiResource route expects to map to index, show, store, update, destroy, etc, im using home, all, clothes, etc.
//Route::group(['prefix'=>'products'], function (){
//    Route::apiResource('/', ProductController::class);
//});

Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/all', 'all');
    Route::get('/Home', 'home');
    Route::get('/Electronics', 'electronics');
    Route::get('/Pets', 'pets');
    Route::get('/Games', 'games');
    Route::get('/Clothes', 'clothes');
    Route::post('/addToCart', 'addToCart');
    Route::post('/remove-from-cart', 'removeFromCart');
    Route::get('/cart', 'cart');
    Route::get('/Checkout', 'checkout');
    Route::get('/Purchase', 'purchase');
    Route::get('/{id}', 'show');
});
