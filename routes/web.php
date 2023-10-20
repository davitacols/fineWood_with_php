<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/view_category', [AdminController::class, 'view_category']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    Route::get('/userblade', [HomeController::class, 'home'])->name('userblade');
});