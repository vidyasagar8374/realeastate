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
        

        // dd($request);
        try {
            DB::beginTransaction(); // Start the transaction
            // $validated = $request->validate([
            //     'title' => 'required|string|max:255',
            //     'subtitle' => 'nullable|string|max:255',
            //     'name' => 'required|string|max:255',
            //     'country' => 'required|string|max:255',
            //     'state' => 'required|string|max:255',
            //     'district' => 'required|string|max:255',
            //     'city' => 'required|string|max:255',
            //     'local_city' => 'nullable|string|max:255',
            //     'facing' => 'nullable|string|max:255',
            //     'bathrooms' => 'required|integer|min:1',
            //     'bedrooms' => 'required|integer|min:1',
            //     'start_sqft' => 'required|integer|min:1',
            //     'end_sqft' => 'required|integer|min:1',
            //     'start_price' => 'required|numeric|min:1',
            //     'end_price' => 'required|numeric|min:1',
            //     'no_floors' => 'required|integer|min:1',
            //     'parking' => 'required|string|max:255',
            //     'estimated_emi' => 'nullable|numeric|min:1',
                
            // ]);

            if($request->hasFile('property_sm_img')) {
                $image = $request->file('property_sm_img');
                $imgaename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('propertyimages'), $imgaename);
                $validated['image'] = $imgaename;
            }
        
            // Insert into the properties table
            $propertyadd = new Propertie;
            $propertyadd->title = $request->input('title');
            $propertyadd->subtitle = $request->input('subtitle');
            $propertyadd->name = $request->input('name');
            $propertyadd->country = $request->input('country');
            $propertyadd->state = $request->input('state');
            $propertyadd->district = $request->input('district');
            $propertyadd->city = $request->input('city');
            $propertyadd->local_city = $request->input('local_city');
            $propertyadd->facing = $request->input('facing');
            $propertyadd->bathrooms = $request->input('bathrooms');
            $propertyadd->bedrooms = $request->input('bedrooms');
            $propertyadd->startingsqft = $request->input('start_sqft');
            $propertyadd->endsqft = $request->input('end_sqft');
            $propertyadd->startprice = $request->input('start_price');
            $propertyadd->endprice = $request->input('end_price');
            $propertyadd->nofloors = $request->input('no_floors');
            $propertyadd->parking = $request->input('parking');
            $propertyadd->estimated_emi = $request->input('estimated_emi');
            $propertyadd->property_sm_img = $imgaename ?? '';
        
            $propertyadd->save();
        
            // Generate the property ID
            if ($propertyadd) {
                $propertyid = 'HMDL' . $propertyadd->id;
                Propertie::where('id', $propertyadd->id)->update(['property_id' => $propertyid]);
        
                DB::commit();
                return redirect()->route('admin.addproperty')->with('success', 'Property added successfully.');
            } else {
                DB::rollBack();
                return redirect()->route('admin.addproperty')->with('error', 'Property not added successfully.');
            }
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.addproperty')->with('error', 'Property not added successfully. Error: ' . $e->getMessage());
        }
        
        
  

     
 
    }
}
