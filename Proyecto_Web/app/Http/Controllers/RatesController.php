<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class RatesController extends Controller
{
   
    public function index()
    {
        $rates = Rate::all();
        return view('rates.index', compact('rates'));
    }

    public function store(Request $request)
    {
        $rate = new Rate();
        $rate->score = $request->score;
        $rate->comment = $request->comment;
        $rate->product_id = $request->product_id;
        $rate->user_id = $request->user_id;
        $rate->save();
        return redirect()->route('rates.index');
    }

    public function edit(string $id)
    {
        $rates = Rate::find($id);
        return view('rates.edit');
    }

    
    public function update(Request $request, string $id)
    {
        $rate = Rate::find($id);
        $rate->score = $request->score;
        $rate->comment = $request->comment;
        $rate->product_id = $request->product_id;
        $rate->user_id = $request->user_id;
        $rate->save();
        return redirect()->route('rates.index');
    }

    
    public function destroy(string $id)
    {
        $rate = Rate::find($id);
        $rate->delete();
        return redirect()->route('rates.index');
    }
}
