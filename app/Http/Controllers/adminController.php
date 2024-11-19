<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;

class adminController extends Controller
{
    //
    public function addproperty(){
        return view('dashboard.addproperties');
    }
    
    public function addapprtment(){
        return view('dashboard/appartment.addapprtment');
    }

    public function store(Request $request)
    {
        dd($request);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'local_city' => 'nullable|string|max:255',
            'facing' => 'nullable|string|max:255',
            'bathrooms' => 'required|integer|min:1', 
            'bedrooms' => 'required|integer|min:1',   
            'start_sqft' => 'required|integer|min:1',  
            'end_sqft' => 'required|integer|min:1',    
            'start_price' => 'required|numeric|min:1', 
            'end_price' => 'required|numeric|min:1',   
            'no_floors' => 'required|integer|min:1',   
            'parking' => 'required|string|max:255',    
            'estimated_emi' => 'nullable|numeric|min:1', 
        ]);

        
        Propertie::create($validated);

     
        return view('dashboard/appartment.addapprtment');  
    }
}
