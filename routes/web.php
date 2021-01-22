<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Login Register 
Route::get('login', 'App\Http\Controllers\UserAuthController@login')->name('login');

Route::get('register', 'App\Http\Controllers\UserAuthController@register')->name('register');

Route::post('create', 'App\Http\Controllers\UserAuthController@create')->name('auth.create');

Route::post('check', 'App\Http\Controllers\UserAuthController@check')->name('auth.check');

Route::post('proses_login', 'App\Http\Controllers\UserAuthController@proses_login')->name('proses_login');

Route::get('logout', 'App\Http\Controllers\UserAuthController@logout')->name('logout');


Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['cek_login:admin']], function() {

        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

        Route::resource('/product', 'App\Http\Controllers\ProductController');

        Route::resource('/category', 'App\Http\Controllers\CategoryController');

        Route::resource('/gallery', 'App\Http\Controllers\GalleryController');

        Route::resource('/transaction', 'App\Http\Controllers\TransactionController');

        Route::get('/transaction/{id}/set-status','App\Http\Controllers\TransactionController@setStatus')->name('transaction.status');

    });

    Route::group(['middleware' => ['cek_login:user']], function() {
        
    });
});



// Admin Page

