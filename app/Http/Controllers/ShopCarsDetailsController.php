<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCarDetail;

class ShopCarsDetailsController extends Controller
{
    public function index()
    {
        $shopCarsDetails = ShopCarDetail::all();
        return view('shopCarsDetails.index', compact('shopCarsDetails'));
    }

    public function store(Request $request)
    {
        $shopCarDetail = new ShopCarDetail();
        $shopCarDetail->quantityShopCar = $request->quantityShopCar;
        $shopCarDetail->shop_car_id = $request->shop_car_id;
        $shopCarDetail->product_id = $request->product_id;
        $shopCarDetail->save();
        return redirect()->route('shopCarsDetails.index');
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
