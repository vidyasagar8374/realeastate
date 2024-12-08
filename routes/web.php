<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PropertyFilterController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(adminController::class)->group(function(){
        Route::get('/dashboard',  'dashboard')->name('admin.dashboard'); // dashboard.admin
        Route::get('/addproperty',  'addproperty')->name('admin.addproperty'); 
        Route::get('/addapprtment',  'addapprtment')->name('admin.addapprtment'); 
        Route::post('/savebanner',  'savebanner')->name('admin.savebanner'); // save banner
        Route::get('/getbanners',  'getbanners')->name('admin.getbanners');  // get banner 
        Route::post('/updatebanner',  'updatebanner')->name('admin.banners.update');  // update banner
        Route::get('/bannerview/{id}',  'bannerview')->name('admin.banners.view');  // update banner
        Route::delete('/banners/delete/{id}', 'destroybanner')->name('admin.banners.delete');  // delete banner
        Route::post('/storeproperties',  'storeproperties')->name('admin.storeproperties');
        Route::get('/keys' ,  'keys')->name('admin.keys');
        Route::post('/addkeys',  'addkeys')->name('admin.addkeys'); 
        Route::get('/propetyindex', 'propetiyindex')->name('properties.propetiyindex'); 

        Route::get('/Amenties' ,  'Amenties')->name('admin.Amenties');
        Route::post('/addamenties' ,  'storeAmenties')->name('admin.storeAmenties');

        Route::get('/floorplans' ,  'floorplans')->name('admin.floorplans');
        Route::post('/addfloorplans' ,  'storeFloorplans')->name('admin.storeFloorplans');

        Route::get('/media' ,  'media')->name('admin.media');
        Route::post('/addmedia' ,  'storeMedia')->name('admin.storeMedia');

        // create posts

        Route::get('/contactlist', 'contactlist')->name('admin.contactlist'); 

    });

});

Route::prefix('properties')->group(function () {
    Route::controller(PropertyFilterController::class)->group(function(){
        Route::get('/lists', 'propertieslists')->name('properties.lists'); 
        Route::get('/single-property', 'singleproperty')->name('properties.singleproperty'); 
    
        

    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
