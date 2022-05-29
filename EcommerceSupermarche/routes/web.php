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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('add_to_cart/{Id_Produit}', 'App\Http\Controllers\ProductController@addcart');

Auth::routes();

Route::get('cart', 'App\Http\Controllers\ProductController@cart');

Route::get('remove-from-cart/{id}', 'App\Http\Controllers\ProductController@remove');

Route::resource('product', 'App\Http\Controllers\ProductController');

Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/create', 'App\Http\Controllers\ProductController@store');