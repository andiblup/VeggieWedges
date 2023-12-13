<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Landing page
Route::get('/', [UserController::class, 'get_landing'])->name('landing');

// User
Route::group([], function () {
    Route::get('/login', [UserController::class, 'get_login'])->name('get_login');
    Route::post('/login', [UserController::class, 'post_login'])->name('post_login');

    Route::get('/register', [UserController::class, 'get_register'])->name('get_register');
    Route::post('/register', [UserController::class, 'post_register'])->name('post_register');
});

// Product
Route::group([], function () {
    // Home page, list of products
    Route::get('/products', [ProductController::class, 'get_products'])->name('get_products');
    
    Route::get('/products/{category}', [ProductController::class, 'get_products_by_category'])->name('get_products_by_category');

    // NOT NEEDED
    // Route::get('/create/product', [ProductController::class, 'get_create_product'])->name('get_create_product');
    // Route::post('/create/product', [ProductController::class, 'post_create_product'])->name('post_create_product');
});

// Cart
Route::group([], function () {
    // add product to cart
    Route::post('/cart/add/{id}', [ProductController::class, 'post_add_to_cart'])->name('post_add_to_cart');
    // remove product from cart
    Route::get('/cart/remove/{id}', [ProductController::class, 'get_remove_from_cart'])->name('get_remove_from_cart');
    // show cart
    Route::get('/cart', [ProductController::class, 'get_cart'])->name('get_cart');
    
    
});





