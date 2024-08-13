<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        return redirect()->route('brands.index');
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
}
