<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

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
        $services = Service::all(); // Assuming you have a Service model
        return view('home', compact('services')); // Pass services to the view
    }
    
}
