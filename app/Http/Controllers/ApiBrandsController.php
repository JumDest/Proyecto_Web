<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class ApiBrandsController extends Controller
{
    public function index()
{
    return response()->json(Brand::all());
}

public function store(Request $request)
{
    // Validación de la entrada
    $request->validate([
        'name' => 'required|string|max:255', // Asegúrate de que el nombre sea obligatorio
    ]);

    // Crear una nueva marca
    $brand = Brand::create([
        'name' => $request->name,
    ]);

    // Retornar la nueva marca en formato JSON
    return response()->json($brand, 201); 
}



public function show(string $id)
{
    $brand = Brand::findOrFail($id);
    return response()->json($brand);
}

public function update(Request $request, string $id)
{
    $brand = Brand::findOrFail($id);
    $brand->update($request->validate(['name' => 'required|string|max:255']));
    return response()->json($brand);
}

public function destroy(string $id)
{
    $brand = Brand::findOrFail($id);
    $brand->delete();
    return response()->json(null, 204);
}

}
