<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function addproperty(){
        return view('dashboard.addproperties');
    }
    public function addapprtment(){
        return view('dashboard/appartment.addapprtment');
    }
}
