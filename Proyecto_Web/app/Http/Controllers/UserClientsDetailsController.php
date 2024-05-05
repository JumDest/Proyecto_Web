<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserClientsDetails;

class UserClientsDetailsController extends Controller
{
   
    public function index()
    {
        $userClientsDetails = UserClientsDetails::all();
        return view('userClientsDetails.index', compact('userClientsDetails'));
    }

    public function store(Request $request)
    {
        $userClientsDetails = new UserClientsDetails();
        $userClientsDetails->name = $request->name;
        $userClientsDetails->phone = $request->phone;
        $userClientsDetails->address = $request->address;
        $userClientsDetails->email = $request->email;
        $userClientsDetails->save();
        return redirect()->route('userClientsDetails.index');
    }

    
    public function edit(string $id)
    {
        $userClientsDetails = UserClientsDetails::find($id);
        return view('userClientsDetails.edit');
    }

   
    public function update(Request $request, string $id)
    {
        $userClientsDetails = UserClientsDetails::find($id);
        $userClientsDetails->name = $request->name;
        $userClientsDetails->phone = $request->phone;
        $userClientsDetails->address = $request->address;
        $userClientsDetails->email = $request->email;
        $userClientsDetails->save();
        return redirect()->route('userClientsDetails.index');
    }

   
    public function destroy(string $id)
    {
        $userClientsDetails = UserClientsDetails::find($id);
        $userClientsDetails->delete();
        return redirect()->route('userClientsDetails.index');
    }
}
