<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;
use App\Models\Specifications;
use App\Models\Amenties;
use App\Models\Media;
use App\Models\Floorplans;
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
                // save file in folder 
 
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
    public function keys()
    {
         return view('dashboard/propertiesfeature.addkeys');
    }
    public function addkeys(Request $request)
    {
        dd($request);
        $values = $request->input('value', []); // Default to empty array if null
        $keys = $request->input('key', []);     // Default to empty array if null
    
        if (!is_array($values) || !is_array($keys)) {
            return redirect()->back()->withErrors('Invalid input data.');
        }
    
        foreach ($values as $index => $value) {
            Key::create([
                'key' => $keys[$index] ?? null,
                'value' => $value,
                'property_id' => $request->input('property_id'),
                
            ]);
        }

        return view('dashboard/propertiesfeature.addkeys',with(['success' => 'Keys added successfully.']));
    }
    public function propetiyindex(Request $request){
        $properties = Propertie::get();
        return view('dashboard.propertiesblock.propertiesindex',compact('properties'));
    }
    
    public function Amenties()
    {
         return view('dashboard/propertiesfeature.addamenties');
    }
    
 // instert and  save amenties featues in the database
 public function storeAmenties(Request $request)
{
    
    $amenties = new Amenties();
    $amenties->name = $request->input('name');  
    $amenties->icon = $request->input('icon');  
    $amenties->save();

    
    return view('dashboard/propertiesfeature.addamenties', [
        'success' => 'Amenities added successfully.',
        'amenties' => $amenties 
    ]);
}

public function floorplans()
{
     return view('dashboard/propertiesfeature.addfloors');
}

public function storeFloorplans(Request $request)
{
    if ($request->hasFile('image')) {
        
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('images', $imageName, 'public');
        
       
        $floorplans = new Floorplans();
        $floorplans->title = $request->input('title');
        $floorplans->subtitle = $request->input('subtitle');
        $floorplans->price = $request->input('price');
        $floorplans->imagepath = $imagePath; 
        $floorplans->save();
    }

    
    return view('dashboard/propertiesfeature.addfloors', [
        'success' => 'Floorplans added successfully.',
        'floorplans' => $floorplans,
    ]);
}

public function media()
{
     return view('dashboard/propertiesfeature.addmedia');
}
// insert video and images in the database
public function storeMedia(Request $request)
{
   
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');  
    }

    
    
    $videoUrl = $this->extractYoutubeId($request->video_url);
   
    $media = new Media();
    $media->title = $request->input('title');  
    $media->description = $request->input('description'); 
    $media->image = $imagePath;  
    $media->videoid =  $videoUrl;  
    $media->save();  

    return view('dashboard/propertiesfeature.addmedia', [
        'success' => 'media added successfully.',
        'media' => $media,
    ]);
}

private function extractYoutubeId($url)
{
    preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $url, $matches);
    return $matches[1] ?? null;
}

}