<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/cart', [ProductController::class, 'cart'])->name('cart');

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::patch('update-cart', 'ProductsController@updateCart')->name('updateCart');
Route::delete('remove-from-cart', 'ProductsController@removeCart')->name('removeCart');