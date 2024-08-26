<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category; 

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all(); 
        $categories = Category::all(); 
        return view('products.index', compact('products', 'brands', 'categories'));
    }

    public function show(string $id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
        }
        
        // Obtener productos similares de la misma categoría
        $similarProducts = Product::where('category_id', $product->category_id)
                                    ->where('id', '!=', $id) // Excluir el producto actual
                                    ->take(4) // Limitar la cantidad de productos similares
                                    ->get();
        
        // Obtener todas las categorías y marcas para el menú de navegación
        $categories = Category::all();
        $brands = Brand::all();
        
        return view('products.product', compact('product', 'similarProducts', 'categories', 'brands'));
    }
    


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'specs' => 'required|string',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id', // Validación para la categoría
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validación de imagen
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->specs = $request->specs;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id; // Asignar categoría

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image_url = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all(); // Obtener todas las categorías
        return view('products.gestion_product', compact('brands', 'categories'));
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
        }
        $brands = Brand::all();
        $categories = Category::all(); // Obtener todas las categorías
        return view('products.editar_product', compact('product', 'brands', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'specs' => 'required|string',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id', // Validación para la categoría
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validación de imagen
        ]);

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->specs = $request->specs;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id; // Asignar categoría

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image_url = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado.');
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito.');
    }

    public function productsByBrand(string $brandId)
    {
        $brand = Brand::find($brandId);

        if (!$brand) {
            return redirect()->route('products.index')->with('error', 'Marca no encontrada.');
        }

        $products = Product::where('brand_id', $brandId)->get();
        $brands = Brand::all(); // Obtener todas las marcas para el menú desplegable
        $categories = Category::all(); // Obtener todas las categorías

        return view('products.index', compact('products', 'brands', 'categories'));
    }

    public function filterByCategory($id)
{
    // Obtiene todos los productos asociados a la categoría
    $products = Product::where('category_id', $id)->get();
    // Obtiene todas las marcas y categorías para el menú desplegable
    $brands = Brand::all();
    $categories = Category::all();

    // Retorna la vista con los productos filtrados
    return view('products.index', compact('products', 'brands', 'categories'));
}
public function home()
{
    $featuredProducts = Product::take(3)->get();
    $categories = Category::all();
    $brands = Brand::all();

    return view('principal', compact('featuredProducts', 'categories', 'brands'));
}



}


