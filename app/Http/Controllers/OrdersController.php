<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    
    public function store(Request $request)
    {
        $order = new Order();
        $order->date = $request->date;
        $order->status = $request->status;
        $order->user_id = $request->user_id;
        $order->save();
        return redirect()->route('orders.index');
    }


    public function edit(string $id)
    {
        $orders = Order::find($id);
        return view('orders.edit');
    }

    
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->date = $request->date;
        $order->status = $request->status;
        $order->user_id = $request->user_id;
        $order->save();
        return redirect()->route('orders.index');
    }

    
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
