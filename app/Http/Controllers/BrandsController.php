<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;

class BrandsController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all(); // Obtener todas las marcas
        $products = Product::all(); // Obtener todos los productos
        return view('products.index', compact('products', 'brands'));
    }


    
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route('products.index');
    }

    public function create()
    {
        return view('brands.gestion_brand');
    }
   
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.editar_brand', compact('brand'));
    }
    
    

    
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route('brands.index');
    }

    
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brands.index');
    }

    public function filterByBrand($brandId)
    {
        $brands = Brand::all(); // Obtener todas las marcas
        $products = Product::where('brand_id', $brandId)->get(); // Obtener productos por marca
        return view('products.index', compact('products', 'brands'));
    }
}

