<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','App\Http\Controllers\API\LoginController@login');


// Api Products

Route::get('products','App\Http\Controllers\API\ProductController@all');

Route::post('products','App\Http\Controllers\API\ProductController@added');

Route::put('products/{id}','App\Http\Controllers\API\ProductController@put');

Route::delete('products/{id}', 'App\Http\Controllers\API\ProductController@delete');


// Checkout
Route::post('checkout', 'App\Http\Controllers\API\CheckoutController@checkout');