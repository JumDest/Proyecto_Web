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
        $request->validate([
            'score' => 'required|integer',
            'comment' => 'nullable|string',
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
        ]);
    
        $rate = new Rate();
        $rate->score = $request->score;
        $rate->comment = $request->comment;
        $rate->product_id = $request->product_id;
        $rate->user_id = $request->user_id;
        $rate->save();
    
        // Redirigir a la página anterior
        return back()->with('success', 'Calificación creada con éxito.');
    }
    


    public function edit(string $id)
    {
        $rate = Rate::find($id);
        if (!$rate) {
            return redirect()->route('rates.index')->with('error', 'Calificación no encontrada.');
        }
        return view('rates.edit', compact('rate'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'score' => 'required|integer',
            'comment' => 'nullable|string',
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $rate = Rate::find($id);
        if (!$rate) {
            return redirect()->route('rates.index')->with('error', 'Calificación no encontrada.');
        }

        $rate->score = $request->score;
        $rate->comment = $request->comment;
        $rate->product_id = $request->product_id;
        $rate->user_id = $request->user_id;
        $rate->save();

        return redirect()->route('rates.index')->with('success', 'Calificación actualizada con éxito.');
    }

    public function destroy(string $id)
    {
        $rate = Rate::find($id);
        if (!$rate) {
            return redirect()->route('rates.index')->with('error', 'Calificación no encontrada.');
        }
        $rate->delete();
        return redirect()->route('rates.index')->with('success', 'Calificación eliminada con éxito.');
    }
}
