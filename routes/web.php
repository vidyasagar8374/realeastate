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
        Route::post('/store', [adminController::class, 'store'])->name('store');

        // create posts
        Route::get('/createpost', 'createpost')->name('admin.createpost'); 
        Route::post('/savepost', 'savepost')->name('admin.savepost'); 
        Route::get('/getposts',  'getposts')->name('admin.getposts');  
        Route::get('/viewpost/{id}',  'viewpost')->name('admin.viewpost');  
        Route::post('/updatepost',  'updatepost')->name('admin.updatepost');  
        Route::delete('/posts/delete/{id}',  'destroypost')->name('admin.destroypost');  
        // get post
        
        //create youtube 
        Route::get('/createyoutube', 'createyoutube')->name('admin.createyoutube'); 
        Route::post('/saveyoutube', 'saveyoutube')->name('admin.saveyoutube'); 
        Route::get('/getyoutube',  'getyoutube')->name('admin.getyoutube'); 
        Route::get('/viewyoutube/{id}',  'viewyoutube')->name('admin.viewyoutube');  
        Route::post('/updateyoutube',  'updateyoutube')->name('admin.updateyoutube');  
        Route::delete('/youtube/delete/{id}',  'destroyotube')->name('admin.destroyotube');  

        //create ParishPrist
        Route::get('/createparishprist', 'createparishprist')->name('admin.createparishprist'); 
        Route::post('/saveparishprist', 'saveparishprist')->name('admin.saveparishprist'); 
        Route::get('/parishpristlist',  'parishpristlist')->name('admin.parishpristlist'); 
        // Route::get('/viewyoutube/{id}',  'viewyoutube')->name('admin.viewyoutube');  
        // Route::post('/updateyoutube',  'updateyoutube')->name('admin.updateyoutube');  
        // Route::delete('/youtube/delete/{id}',  'destroyotube')->name('admin.destroyotube'); 
     


        Route::get('/contactlist', 'contactlist')->name('admin.contactlist'); 





    });

});

Route::prefix('properties')->group(function () {
    Route::controller(PropertyFilterController::class)->group(function(){
        Route::get('/lists', 'propertieslists')->name('properties.lists'); 
        

    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
