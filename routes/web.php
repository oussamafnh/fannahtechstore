<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;



Route::get('/', [UserController::class, 'adminView'])->name('home');


Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('users.showRegistrationForm');
Route::post('/register', [UserController::class, 'register'])->name('users.register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('users.showLoginForm');
Route::post('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
    Route::get('/profile/edit', [UserController::class, 'showEditingForm'])->name('profile.edit');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::delete('/profile/delete', [UserController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');
    Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');


    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/product/{id}/add-to-cart', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{cartItemId}', [CartController::class, 'remove'])->name('cart.remove');


    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');


    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('/products/{id}/edit', [ProductController::class, 'editProduct'])->name('admin.products.edit');
        Route::delete('/products/{id}', [ProductController::class, 'destroyProduct'])->name('admin.products.destroy');
        Route::put('/products/{product}', [ProductController::class, 'updateProduct'])->name('admin.products.update');
        Route::get('/products/create', [ProductController::class, 'createProduct'])->name('admin.products.create');
        Route::post('/products', [ProductController::class, 'storeProduct'])->name('admin.products.store');

        Route::get('/orders', [OrderController::class, 'index'])->name('admin.order');
        Route::get('/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');
        Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    });
});
