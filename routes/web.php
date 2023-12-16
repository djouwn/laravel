<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaiementController;
Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    });

    Route::middleware(['role:seller'])->group(function () {
        Route::get('/seller/home', [HomeController::class, 'index'])->name('seller.home');
    });

    Route::middleware(['role:client'])->group(function () {
        Route::get('/client/home', [ClientController::class, 'index'])->name('client.home');
    });
});

// Default Laravel routes

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cart/add/{id}', [PaiementController::class, 'addToCart'])->name('cart.add');


// routes/web.php
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/paiements', [PaiementController::class, 'index'])->name('paiements.index');


Auth::routes();
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')-> name('contact');
