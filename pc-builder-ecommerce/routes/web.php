<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubCategoryController;




Route::get('/', [HomeController::class, 'index'])->name('home.index');

// for individual page
// Route::get('/category/{name}', [HomeController::class, 'filteredByCategoryProducts'])->name('home.filteredByCategoryProducts');
// Route::get('/sub-category/{name}', [HomeController::class, 'filteredBySubCategoryProducts'])->name('home.filteredBySubCategoryProducts');
// Route::get('/brand/{name}', [HomeController::class, 'filteredByBrandProducts'])->name('home.filteredByBrandProducts');


// for single dynamic page
Route::get('/{type}/{name}', [HomeController::class, 'filteredProducts'])
    ->where('type', 'category|sub-category|brand')
    ->name('home.filteredProducts');





Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/user-list', [AdminController::class, 'userList'])->name('admin.userList');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'confirmOrder'])->name('checkout.confirmOrder');
    Route::post('/checkout/add-to-cart/{id}', [CheckoutController::class, 'addToCart'])->name('checkout.addToCart');

    // Resource Controllers
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('settings', SettingsController::class);



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
