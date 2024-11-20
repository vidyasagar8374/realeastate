<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    public function addproperty(){
        return view('dashboard.addproperties');
    }
    
    public function addapprtment(){
        return view('dashboard/appartment.addapprtment');
    }

    public function storeproperties(Request $request)
    {
        


        try {
            DB::beginTransaction(); // Start the transaction
        
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
        
            // Insert into the properties table
            $propertyadd = Propertie::create($validated);
        
            if ($propertyadd) {
                $propertyid = 'HMDL' . $propertyadd->id;
        
                // Update the property ID
                Propertie::where('id', $propertyadd->id)->update(['property_id' => $propertyid]);
        
                // Commit the transaction if all is successful
                DB::commit();
                return redirect()->route('admin.addproperty')->with('success', 'Property added successfully.');
            } else {
                // Rollback if the property could not be created
                DB::rollBack();
                return redirect()->route('admin.addproperty')->with('error', 'Property not added successfully.');
            }
        } catch (Exception $e) {
            // Rollback transaction in case of an exception
            DB::rollBack();
            return redirect()->route('admin.addproperty')->with('error', 'Property not added successfully. Error: ' . $e->getMessage());
        }
        
        
  

     
 
    }
}
