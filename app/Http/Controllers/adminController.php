<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;
use App\Models\Specifications;
use App\Models\Amenties;
use App\Models\Media;
use App\Models\Specification;
use App\Models\Floorplans;
use App\Models\GalleryImages;
use App\Models\Propertyamentie;
use Illuminate\Support\Facades\Storage;

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
    public function specification(Request $request)
    {
        $property_id = $request->input('property_id');
        $properties = Propertie::where('id', $property_id)->first();
         return view('dashboard/propertiesfeature.specification',compact('properties'));
    }
    public function storespecification(Request $request)
    {

        try {

                    $property_id = $request->input('property_id');
                    $values = $request->input('value', []); // Default to empty array if null
                    $keys = $request->input('key', []);     // Default to empty array if null
                
                    if (!is_array($values) || !is_array($keys)) {
                        return redirect()->back()->withErrors('Invalid input data.');
                    }

                    // intert key and values
                    if (count($values) !== count($keys)) {
                        return redirect()->back()->withErrors('Number of values and keys must be the same.');
                    }

                
                    foreach ($values as $index => $value) {
                        Specification::create([
                            'key' => $keys[$index] ?? null,
                            'value' => $value,
                            'propety_id' => $property_id,
                           
                        ]);
                    }

                    return redirect()->back()->with('success', 'Keys added successfully.');
               
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Keys not added successfully. Error: ' . $e->getMessage());
        }
        
    }
    public function propetiyindex(Request $request){
        $properties = Propertie::get();
        return view('dashboard.propertiesblock.propertiesindex',compact('properties'));
    }
    
    public function Amenties()
    {
         return view('dashboard/propertiesfeature.addamenties');
    }

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
    /**
     * Shows the view for managing amenties for a given property.
     * 
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function propertyamenties(Request $request){
        $property_id = $request->input('property_id');
        $property = Propertie::where('id', $property_id)->first();
        $amenties = Amenties::where('status', 1)->get();
        return view('dashboard/propertiesfeature.propertyamenities', compact('property', 'amenties'));
    }
    
 // instert and  save amenties featues in the database
    public function storeropertyAmenties(Request $request)
        {
            // $validated = [
            //     'property_id' => 'required',
            //     'property_amenties' => 'required|array|min:1',
            // ];
        try {
            $property_id = $request->input('property_id');
            $amenties = $request->input('property_amenties');
            // dd($amenties);
             foreach ($amenties as $ament) {
                // dd($ament);
                $propertyamenties = new Propertyamentie();
                $propertyamenties->amentment_id = $ament;
                $propertyamenties->property_id = $property_id;
                $propertyamenties->save();
            }
            if($propertyamenties){
                // return redirect with success message
                return redirect()->back()->with('success', 'Amenities added successfully.');
            }
            
        }catch (\Exception $e) {
            // return redirect with error message
            return redirect()->back()->with('error', 'Amenities not added successfully. Error: ' . $e->getMessage());
  
        }
        
      
    }
    
    public function floorplans(Request $request)
    {
        $properties = Propertie::where('id', $request->input('property_id'))->first();
        return view('dashboard/propertiesfeature.addfloors',compact('properties'));
    }

public function storeFloorplans(Request $request)
{
    try {
        $property_id = $request->input('property_id');
    
        $baseDirectory = 'images/' . $property_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Create the base directory if it doesn't exist
            if (!Storage::exists($baseDirectory)) {
                Storage::makeDirectory($baseDirectory);
            }
    
            // Store the image in the property_id folder
            $imagePath = $image->storeAs($baseDirectory, $imageName, 'public');
        } else {
            return redirect()->back()->with('error', 'Image file is required.');
        }
    
        // Save the floorplan details
        $floorplans = new Floorplans();
        $floorplans->title = $request->input('title');
        $floorplans->subtitle = $request->input('subtitle');
        $floorplans->price = $request->input('price');
        $floorplans->imagepath = $imagePath; // Store the full path in the database
        $floorplans->save();
    
        return redirect()->back()->with('success', 'Floorplans added successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Floorplans not added successfully. Error: ' . $e->getMessage());
    }
  

    

}

public function media(Request $request)
{
    $properties = Propertie::where('id', $request->input('property_id'))->first();
     return view('dashboard/propertiesfeature.addmedia', compact('properties'));
}
// insert video and images in the database
public function storeMedia(Request $request)
{

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
    
        // Create the base directory if it doesn't exist
        $baseDirectory = 'images/' . $request->input('property_id');
        if (!Storage::exists($baseDirectory)) {
            Storage::makeDirectory($baseDirectory);
        }
    
        // Store the image in the property_id folder
        $imagePath = $image->storeAs($baseDirectory, $imageName, 'public');
    } else {
        return redirect()->back()->with('error', 'Image file is required.');
    }
   try{

    $videoUrl = $this->extractYoutubeId($request->video_url);
    $media = new Media();
    $media->title = $request->input('title');  
    $media->description = $request->input('description'); 
    $media->image = $imagePath; 
    $media->videoid =  $videoUrl; 
    $media->property_id = $request->input('property_id');
    $media->save();  

    return redirect()->back()->with('success', 'Media added successfully.');

   }catch(Exception $e){
    return redirect()->back()->with('error', 'Media not added successfully. Error: ' . $e->getMessage());
   }

   
}


//  create a gallery 
public function gallery(Request $request){
    $properties = Propertie::where('id', $request->input('property_id'))->first();
     return view('dashboard/propertiesfeature.gallery', compact('properties'));
    }
    // store gallery properties
    public function storeGallery(Request $request){
        try {
            
            $property_id = $request->input('property_id');
            $baseDirectory = 'images/' . $request->input('property_id');
            if (!Storage::exists($baseDirectory)) {
                Storage::makeDirectory($baseDirectory);
            }
            if ($request->hasFile('images')) {
                // for loop image
                $images = $request->file('images');
                foreach ($images as $imageKey => $image) {
                    $imageName = time() . '-' . $imageKey . '.' . $image->getClientOriginalExtension();
                    $imagePath = $image->storeAs($baseDirectory, $imageName, 'public');
              
                    // Save the gallery details
                    $gallery = new GalleryImages();
                    $gallery->image = $imagePath; // Store the full path in the database
                    $gallery->property_id = $property_id;
                    $gallery->save();
                }
                return redirect()->back()->with('success', 'Gallery added successfully.');
            } else {
                return redirect()->back()->with('error', 'Image file is required.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gallery not added successfully. Error: ' . $e->getMessage());
        }
    }
            // Save the gallery details 
private function extractYoutubeId($url)
{
    preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $url, $matches);
    return $matches[1] ?? null;
}

}