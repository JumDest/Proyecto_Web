<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderDetailsController extends Controller
{
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('orderDetails.index', compact('orderDetails'));
    }


    public function store(Request $request)
    {
        $orderDetail = new OrderDetail();
        $orderDetail->quantityShopCar = $request->quantityShopCar;
        $orderDetail->shop_car_id = $request->shop_car_id;
        $orderDetail->product_id = $request->product_id;
        $orderDetail->save();
        return redirect()->route('orderDetails.index');
    
    }


    public function edit(string $id)
    {
        $orderDetails = OrderDetail::find($id);
        return view('orderDetails.edit');
    }

 
    public function update(Request $request, string $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->quantityShopCar = $request->quantityShopCar;
        $orderDetail->shop_car_id = $request->shop_car_id;
        $orderDetail->product_id = $request->product_id;
        $orderDetail->save();
        return redirect()->route('orderDetails.index');
    }


    public function destroy(string $id)
    {
        $orderDetail = OrderDetail::find($id);
        $orderDetail->delete();
        return redirect()->route('orderDetails.index');
    }
}
