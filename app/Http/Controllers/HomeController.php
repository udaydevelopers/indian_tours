<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

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

        $packages = Package::where('popular',0)->limit(20)->get();
        return view('welcome', compact('packages'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
