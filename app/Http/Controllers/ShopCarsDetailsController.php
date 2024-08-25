<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCarDetail;
use App\Models\ShopCar;
use App\Models\Product;
use Illuminate\Support\Facades\DB; // Asegúrate de importar DB

class ShopCarsDetailsController extends Controller
{
    public function index()
    {
        $shopCarsDetails = ShopCarDetail::all();
        return view('shopCarsDetails.index', compact('shopCarsDetails'));
    }

    public function store(Request $request)
    {
        $shopCarId = $request->shop_car_id;
        $productId = $request->product_id;
        $quantity = $request->quantityShopCar;

        // Obtener el producto para calcular el total
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('shopCars.index')->with('error', 'Producto no encontrado.');
        }

        // Crear un nuevo detalle del carrito
        $shopCarDetail = new ShopCarDetail();
        $shopCarDetail->quantityShopCar = $quantity;
        $shopCarDetail->shop_car_id = $shopCarId;
        $shopCarDetail->product_id = $productId;
        $shopCarDetail->save();

        // Actualizar el total del carrito
        $total = ShopCarDetail::where('shop_car_id', $shopCarId)
            ->join('products', 'shop_car_details.product_id', '=', 'products.id')
            ->sum(DB::raw('quantityShopCar * products.price'));

        $shopCar = ShopCar::find($shopCarId);
        $shopCar->total = $total;
        $shopCar->save();

        return redirect()->route('shopCars.index');
    }

    public function edit(string $id)
    {
        $shopCarsDetails = ShopCarDetail::find($id);
        return view('shopCarsDetails.edit');
    }

    public function update(Request $request, string $id)
    {
        $shopCarDetail = ShopCarDetail::find($id);
        $shopCarDetail->quantityShopCar = $request->quantityShopCar;
        $shopCarDetail->shop_car_id = $request->shop_car_id;
        $shopCarDetail->product_id = $request->product_id;
        $shopCarDetail->save();
        return redirect()->route('shopCarsDetails.index');
    }

    public function destroy(string $id)
    {
        $shopCarDetail = ShopCarDetail::find($id);
        $shopCarDetail->delete();
        return redirect()->route('shopCarsDetails.index');
    }
}
