<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->specs = $request->specs;
        $product->brand_id = $request->brand_id;
        $product->save();
        return redirect()->route('products.index');
    }

    public function edit(string $id)
    {
        $products = Product::find($id);
        return view('products.edit');
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->specs = $request->specs;
        $product->brand_id = $request->brand_id;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
