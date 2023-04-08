<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-cart/{id}', [ProductController::class, 'add_cart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update_cart'])->name('update.cart');
Route::delete('remove-cart', [ProductController::class, 'remove_cart'])->name('remove.from.cart');
