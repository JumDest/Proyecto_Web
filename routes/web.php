<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductBrandsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RatesController;
use App\Http\Controllers\ShopCarsController;
use App\Http\Controllers\ShopCarsDetailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

Route::group(['middleware' => ['role:admin|support_Team']], function () {
    Route::get('/brands/create', [BrandsController::class, 'create'])->name('brands.create');
    Route::post('/brands', [BrandsController::class, 'store'])->name('brands.store');
    Route::delete('/brands/{id}', [BrandsController::class, 'destroy'])->name('brands.destroy');
    Route::put('/brands/{id}', [BrandsController::class, 'update'])->name('brands.update');
    Route::get('/brands/{id}/edit', [BrandsController::class, 'edit'])->name('brands.edit');

    Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');

    Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
});

// Otras rutas
Route::get('/rates', [RatesController::class, 'index'])->name('rates.index');
Route::post('/rates', [RatesController::class, 'store'])->name('rates.store');
Route::get('/rates/{id}/edit', [RatesController::class, 'edit'])->name('rates.edit');
Route::put('/rates/{id}', [RatesController::class, 'update'])->name('rates.update');
Route::delete('/rates/{id}', [RatesController::class, 'destroy'])->name('rates.destroy');

Route::get('/', [ProductsController::class, 'home'])->name('home');
Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/products/brand/{id}', [ProductsController::class, 'productsByBrand'])->name('products.byBrand');
Route::resource('shopCars', ShopCarsController::class);
Route::get('/productos/por-marca/{brandId}', [ProductsController::class, 'filterByBrand'])->name('products.filterByBrand');
Route::get('/productos/categoria/{id}', [ProductsController::class, 'filterByCategory'])->name('products.byCategory');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/reporte', [ReportController::class, 'generateReport'])->name('reporte.generate');

Auth::routes();
