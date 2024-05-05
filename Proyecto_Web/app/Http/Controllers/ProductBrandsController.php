<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductBrand;

class ProductBrandsController extends Controller
{
    
    public function index()
    {
        $productBrands = ProductBrand::all();
        return view('productBrands.index', compact('productBrands'));
    }

    public function store(Request $request)
    {
        $productBrand = new ProductBrand();
        $productBrand->product_id = $request->product_id;
        $productBrand->brand_id = $request->brand_id;
        $productBrand->save();
        return redirect()->route('productBrands.index');
    }

    public function edit(string $id)
    {
        $productBrands = ProductBrand::find($id);
        return view('productBrands.edit');
    }

    public function update(Request $request, string $id)
    {
        $productBrand = ProductBrand::find($id);
        $productBrand->product_id = $request->product_id;
        $productBrand->brand_id = $request->brand_id;
        $productBrand->save();
        return redirect()->route('productBrands.index');
    }

    public function destroy(string $id)
    {
        $productBrand = ProductBrand::find($id);
        $productBrand->delete();
        return redirect()->route('productBrands.index');
    }
}
