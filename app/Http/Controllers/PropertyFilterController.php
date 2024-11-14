<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;
class PropertyFilterController extends Controller
{
    //
    public function propertieslists(Request $request){
        // dd($request);
        try{
   
            $query = Propertie::query();
            // Apply filters based on the request data
          
            if ($request->has('bhk') && is_array($request->bhk)) {
                $query->whereIn('bedrooms', $request->bhk);
            }
         
            // Retrieve the filtered results
            $properties = $query->get();
            if ($request->ajax()) {
                return response()->json([
                    'html' => view('propetyfilter.propertylists', compact('properties'))->render()
                ]);
            }
            // dd($properties);
            return view('propetyfilter.propertyfilter',compact('properties'));
        }catch(Exception $e){

        }
            
    }
    
}
