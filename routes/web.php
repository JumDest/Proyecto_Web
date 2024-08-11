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

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');

Route::get('/orderDetails', [OrderDetailsController::class, 'index'])->name('orderDetails.index');
Route::post('/orderDetails', [OrderDetailsController::class, 'store'])->name('orderDetails.store');
Route::delete('/orderDetails/{id}', [OrderDetailsController::class, 'destroy'])->name('orderDetails.destroy');
Route::put('/orderDetails/{id}', [OrderDetailsController::class, 'update'])->name('orderDetails.update');
Route::get('/orderDetails/{id}/edit', [OrderDetailsController::class, 'edit'])->name('orderDetails.edit');

Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');
Route::delete('/orders/{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
Route::put('/orders/{id}', [OrdersController::class, 'update'])->name('orders.update');
Route::get('/orders/{id}/edit', [OrdersController::class, 'edit'])->name('orders.edit');

Route::get('/productsBrands', [ProductBrandsController::class, 'index'])->name('productsBrands.index');
Route::post('/productsBrands', [ProductBrandsController::class, 'store'])->name('productsBrands.store');
Route::delete('/productsBrands/{id}', [ProductBrandsController::class, 'destroy'])->name('productsBrands.destroy');
Route::put('/productsBrands/{id}', [ProductBrandsController::class, 'update'])->name('productsBrands.update');
Route::get('/productsBrands/{id}/edit', [ProductBrandsController::class, 'edit'])->name('productsBrands.edit');

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::get('/rates', [RatesController::class, 'index'])->name('rates.index');
Route::post('/rates', [RatesController::class, 'store'])->name('rates.store');
Route::delete('/rates/{id}', [RatesController::class, 'destroy'])->name('rates.destroy');
Route::put('/rates/{id}', [RatesController::class, 'update'])->name('rates.update');
Route::get('/rates/{id}/edit', [RatesController::class, 'edit'])->name('rates.edit');

Route::get('/shopCars', [ShopCarsController::class, 'index'])->name('shopCars.index');
Route::post('/shopCars', [ShopCarsController::class, 'store'])->name('shopCars.store');
Route::delete('/shopCars/{id}', [ShopCarsController::class, 'destroy'])->name('shopCars.destroy');
Route::put('/shopCars/{id}', [ShopCarsController::class, 'update'])->name('shopCars.update');
Route::get('/shopCars/{id}/edit', [ShopCarsController::class, 'edit'])->name('shopCars.edit');

Route::get('/shopCarsDetails', [ShopCarsDetailsController::class, 'index'])->name('shopCarsDetails.index');
Route::post('/shopCarsDetails', [ShopCarsDetailsController::class, 'store'])->name('shopCarsDetails.store');
Route::delete('/shopCarsDetails/{id}', [ShopCarsDetailsController::class, 'destroy'])->name('shopCarsDetails.destroy');
Route::put('/shopCarsDetails/{id}', [ShopCarsDetailsController::class, 'update'])->name('shopCarsDetails.update');
Route::get('/shopCarsDetails/{id}/edit', [ShopCarsDetailsController::class, 'edit'])->name('shopCarsDetails.edit');

Route::get('/userClientsDetails', [UserClientsDetailsController::class, 'index'])->name('userClientsDetails.index');
Route::post('/userClientsDetails', [UserClientsDetailsController::class, 'store'])->name('userClientsDetails.store');
Route::delete('/userClientsDetails/{id}', [UserClientsDetailsController::class, 'destroy'])->name('userClientsDetails.destroy');
Route::put('/userClientsDetails/{id}', [UserClientsDetailsController::class, 'update'])->name('userClientsDetails.update');
Route::get('/userClientsDetails/{id}/edit', [UserClientsDetailsController::class, 'edit'])->name('userClientsDetails.edit');

