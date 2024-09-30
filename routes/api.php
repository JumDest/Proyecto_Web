<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBrandsController;

Route::get('/brands', [ApiBrandsController::class, 'index']); // Obtener todas las marcas
Route::post('/brands', [ApiBrandsController::class, 'store']); // Crear nueva marca
Route::get('/brands/{id}', [ApiBrandsController::class, 'show']); // Obtener marca por ID
Route::put('/brands/{id}', [ApiBrandsController::class, 'update']); // Actualizar marca
Route::delete('/brands/{id}', [ApiBrandsController::class, 'destroy']); // Eliminar marca


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
