<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
//Route::resource('product', ProductController::class);

Route::get('/home', 'App\Http\Controllers\HomeController@index');

//admin views
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Route::get('/create', 'App\Http\Controllers\ProductController@create');

Route::get('/admin-ShowClients', [AdminController::class, 'ShowClients']);

Route::get('/admin-ShowCommandes', [AdminController::class, 'ShowCommandes']);

Route::get('/admin-ShowCommentaires', [AdminController::class, 'ShowCommentaires']);

Route::get('/admin-ShowFournisseurs', [AdminController::class, 'ShowFournisseurs']);

Route::get('/admin-ShowLivraisons', [AdminController::class, 'ShowLivraisons']);

Route::get('/admin-ShowLivreurs', [AdminController::class, 'ShowLivreurs']);

Route::get('/admin-ShowProduits', [AdminController::class, 'ShowProduits']);

Route::get('/admin-ShowUsers', [AdminController::class, 'ShowUsers']);

Route::get('/admin-ShowCategories', [AdminController::class, 'ShowCategories']);

Route::get('/admin-ShowCodepromo', [AdminController::class, 'ShowCodepromo']);
