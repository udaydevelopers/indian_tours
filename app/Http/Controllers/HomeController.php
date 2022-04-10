<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth')->except(
           'index' , 'contact', 'categoryDetails', 'packageDetails', 'popularPackages', 'bookingStore'
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $packages = Package::where('popular', 1)->limit(4)->get();
        $title = "Home: Indian Tours";
        $meta_keywords = 'Indian Tours';
        $meta_descriptions = 'Indian Tours';
        return view('welcome', compact('packages', 'title','meta_keywords','meta_descriptions'));
    }

    public function popularPackages()
    {
        $packages = Package::where('popular', 1)->paginate(10);
        $title = "Home: Indian Tours";
        $meta_keywords = 'Indian Tours';
        $meta_descriptions = 'Indian Tours';
        return view('popular-package', compact('packages', 'title','meta_keywords','meta_descriptions'));
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
        $title = $category->name?$category->name:"India Tours Categories";
        $meta_keywords = $category->name?trim( $category->name):'';
        $meta_descriptions = $category->name?trim( $category->name):'';
        return view('category-details', compact('category','title','meta_keywords','meta_descriptions'));
    }

    public function packageDetails($category, $package)
    {
        $package = Package::with('images')->where('slug', $package)->first();
        $title = ($package->name)?$package->name:"India Tours Packages";
        $meta_keywords = $package->meta_keywords?trim($package->meta_keywords):trim($package->title);
        $meta_descriptions = $package->meta_keywords?trim($package->meta_keywords):trim($package->title);
        return view('package-details', compact('package','title','meta_keywords','meta_descriptions'));
    }

    public function bookingStore(Request $request)
    {
        $this->validate($request, [
            'full_name'   => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:10',
            'no_of_persons' => 'required|numeric',
            'booking_date' => 'required|date'
        ]);

        $booking = new Booking;
    
        $booking->full_name   = $request->full_name;
        $booking->email = $request->email;
        $booking->mobile = $request->mobile;
        $booking->no_of_persons = $request->no_of_persons;
        $booking->booking_date = $request->booking_date;
        $booking->package_name = $request->package_name;

        $booking->save();
      
        return back()->with('success', 'Your booking requested successfully.');
    }
}
