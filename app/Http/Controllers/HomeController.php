<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
       $this->middleware('auth')->except('index' , 'contact', 'packageDetails');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $packages = Package::where('popular', 1)->limit(4)->get();
        
        return view('welcome', compact('packages'));
    }

    public function dashboard()
    {
        $this->middleware('auth');
        return view('admin.dashboard');
    }

    public function contact()
    {
        return view('contact');
    }

    public function categoryDetails($slug)
    {
        $category = Category::with('packages')->where('slug', $slug)->first();
        return view('category-details', compact('category'));
    }

    public function packageDetails($category, $package)
    {
        $package = Package::with('images')->where('slug', $package)->first();
        return view('package-details', compact('package'));
    }
}
