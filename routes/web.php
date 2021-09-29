<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
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


Route::get('/', [ProductController::class, 'index'])->name('product');
Route::get('/addtocart/{id}', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cart']);

Route::get('stripe', [StripeController::class, 'stripePost'])->name('stripe');
Route::post('stripe', [StripeController::class, 'afterPayment'])->name('stripe.post');
Route::post('/save-details', [ProductController::class, 'SaveDetails']);
