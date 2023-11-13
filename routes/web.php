<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/userpage', [HomeController::class, 'userpage'])->name('userpage');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    // admincontroller
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
    Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
    Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
    Route::get('/view_product', [AdminController::class, 'view_product']);
});

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/view_category', [AdminController::class, 'view_category']);
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

// admin.dashboard
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/view_category', [AdminController::class, 'view_category']);
    Route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users.index');
    Route::get('/admin/roles', [AdminController::class, 'roles'])->name('admin.roles.index');
    Route::get('/admin/permissions', [AdminController::class, 'permissions'])->name('admin.permissions.index');
    Route::get('/admin/clients', [AdminController::class, 'clients'])->name('admin.clients.index');
    Route::get('/admin/employees', [AdminController::class, 'employees'])->name('admin.employees.index');
});