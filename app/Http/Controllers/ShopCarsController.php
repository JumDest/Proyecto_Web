<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCar;
use App\Models\ShopCarDetail;
use Illuminate\Support\Facades\DB; // Asegúrate de importar DB

class ShopCarsController extends Controller
{
    public function index()
    {
        $shopCars = ShopCar::with('details.product')->get(); // Cargar detalles y productos
        return view('shopCars.index', compact('shopCars'));
    }

    public function store(Request $request)
    {
        $shopCar = new ShopCar();
        $shopCar->user_id = $request->user_id;
        $shopCar->save();

        // Calcular el total
        $total = 0;
        foreach ($request->products as $product) {
            $total += $product['price'] * $product['quantity'];
        }

        // Actualizar el total del carrito
        $shopCar->total = $total;
        $shopCar->save();

        // Agregar los detalles del carrito
        foreach ($request->products as $product) {
            ShopCarDetail::create([
                'shop_car_id' => $shopCar->id,
                'product_id' => $product['id'],
                'quantityShopCar' => $product['quantity'],
            ]);
        }

        return redirect()->route('shopCars.index');
    }

    // Otros métodos...
}
