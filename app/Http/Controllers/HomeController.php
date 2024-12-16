<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function about()
    {
        return view('mainpages.about');
    }
}
