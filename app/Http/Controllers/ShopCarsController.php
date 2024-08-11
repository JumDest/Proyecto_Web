<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCar;

class ShopCarsController extends Controller
{
    public function index()
    {
        $shopCars = ShopCar::all();
        return view('shopCars.index', compact('shopCars'));
    }

    public function store(Request $request)
    {
        $shopCar = new ShopCar();
        $shopCar->total = $request->total;
        $shopCar->user_id = $request->user_id;
        $shopCar->save();
        return redirect()->route('shopCars.index');
    }

    public function edit(string $id)
    {
        $shopCars = ShopCar::find($id);
        return view('shopCars.edit');
    }

    public function update(Request $request, string $id)
    {
        $shopCar = ShopCar::find($id);
        $shopCar->total = $request->total;
        $shopCar->user_id = $request->user_id;
        $shopCar->save();
        return redirect()->route('shopCars.index');
    }

    public function destroy(string $id)
    {
        $shopCar = ShopCar::find($id);
        $shopCar->delete();
        return redirect()->route('shopCars.index');
    }
}
