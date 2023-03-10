<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;
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
Route::get('/brands/{brand}', [ProductController::class, 'brands'])->name('brands');

Route::get('/cart', [ProductController::class, 'cart'])->name('cart');

Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');
Route::patch('update-cart', 'ProductsController@updateCart');
Route::delete('remove-from-cart', 'ProductsController@removeCart');
Route::get('/payment-complete', [ProductController::class, 'clearCart'])->name('paymentComplete');

Route::get('mollie-payment', [MollieController::class, 'preparePayment'])->name('mollie.payment');
Route::get('payment-success', [MollieController::class, 'paymentSuccess'])->name('payment.success');