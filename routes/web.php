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
use App\Http\Controllers\UserClientsDetailsController;

Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::get('/brands/create', [BrandsController::class, 'create'])->name('brands.create');
Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');
Route::post('/brands', [BrandsController::class, 'store'])->name('brands.store');
Route::delete('/brands/{id}', [BrandsController::class, 'destroy'])->name('brands.destroy');
Route::put('/brands/{id}', [BrandsController::class, 'update'])->name('brands.update');
Route::get('/brands/{id}/edit', [BrandsController::class, 'edit'])->name('brands.edit');

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::get('/products/brand/{id}', [ProductsController::class, 'productsByBrand'])->name('products.byBrand');


Route::resource('shopCars', ShopCarsController::class);
Route::get('/productos/por-marca/{brandId}', [ProductsController::class, 'filterByBrand'])->name('products.filterByBrand');
Route::get('/products/brand/{brandId}', [ProductsController::class, 'productsByBrand'])->name('products.byBrand');
Route::get('/productos/categoria/{id}', [ProductsController::class, 'filterByCategory'])->name('products.byCategory');
