<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;

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
           'index' , 'contact', 'categoryDetails', 'packageDetails', 'popularPackages', 'bookingStore','subpackageDetails'
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        parent::__construct();
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

    // public function contact()
    // {
    //     return view('contact');
    // }

    public function categoryDetails($slug)
    {
        $category = Category::with('packages')->where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }
        $title = $category->name?$category->name:"India Tours Categories";
        $meta_keywords = $category->name?trim( $category->name):'';
        $meta_descriptions = $category->name?trim( $category->name):'';
        return view('category-details', compact('category','title','meta_keywords','meta_descriptions'));
    }

    public function packageDetails($package)
    {
        $package = Package::with('images')->where('slug', $package)->first(); 
        if (!$package) {
            abort(404);
        }

        $reviewCount = Review::where('package_id', $package->id)->where('status', 'publish')->count();
        $categoryIds = $package->categories()->pluck('categories.id')->toArray();
        
        // Similar Product Code start //
        $categoryProducts = \DB::table('category_package')->select('package_id')->whereIn('category_id',[$categoryIds])->get();

        $productIds = []; 

        foreach($categoryProducts as $categoryProduct)
        {   
            $productIds[] = $categoryProduct->package_id.','; 
        }
        
        // Remove current package id from arary
        if (($key = array_search($package->id, $productIds)) !== false) {
            unset($productIds[$key]);
        }
      
        $similarPackages = Package::whereIn('id',  $productIds)->get();
 
        $title = ($package->name)?$package->name:"India Tours Packages";
        $meta_keywords = $package->meta_keywords?trim($package->meta_keywords):trim($package->title);
        $meta_descriptions = $package->meta_descriptions?trim($package->meta_descriptions):trim($package->title);
        return view('package-details', compact('package','similarPackages','title','reviewCount','meta_keywords','meta_descriptions'));
    }

    // public function subpackageDetails($category, $subcat, $package)
    // {
    //     $package = Package::with('images')->where('slug', $package)->first(); 
    //     if (!$package) {
    //         abort(404);
    //     }
        
    //     /// check valid subcategory
    //     $catExist = Category::select('id')->where('slug', $category)->value('id');
    //     if(!$catExist){
    //       abort(404);  
    //     }
        
    //     $subcatExist = Category::select('id')->where('slug', $subcat)->value('id');
    //     if (!$subcatExist) {
    //         abort(404);
    //     }
        

    //     // Check Product is available in category
    //     $validateCatProduct = \DB::table('category_package')->select('package_id')->whereIn('category_id',[$catExist])->get();
        
    //     $this->validate_category_packages($validateCatProduct, $package->id);
        
    //     // Validate Product available in subcat
    //     $validateSubCatProduct = \DB::table('category_package')->select('package_id')->whereIn('category_id',[$subcatExist])->get();
        
    //     $this->validate_category_packages($validateSubCatProduct, $package->id);
        
    //     /// check valid category and subcategory End here
        
    //     $reviewCount = Review::where('package_id', $package->id)->where('status', 'publish')->count();
    //     $categoryIds = $package->categories()->pluck('categories.id')->toArray();
        
    //     // Similar Product Code start //
    //     $categoryId = Category::select('id')->where('slug', $category)->value('id');
        
    //     $categoryProducts = \DB::table('category_package')->select('package_id')->whereIn('category_id',[$categoryId])->get();
        
    //     $productIds = []; 

    //     foreach($categoryProducts as $categoryProduct)
    //     {   
    //         $productIds[] = $categoryProduct->package_id.','; 
    //     }
 
    //     // Remove current package id from arary
    //     if (($key = array_search($package->id, $productIds)) !== false) {
    //         unset($productIds[$key]);
    //     }

    //     $similarPackages = Package::whereIn('id',  $productIds)->get();
    //     $title = ($package->name)?$package->name:"India Tours Packages";
    //     $meta_keywords = $package->meta_keywords?trim($package->meta_keywords):trim($package->title);
    //     $meta_descriptions = $package->meta_descriptions?trim($package->meta_descriptions):trim($package->title);
    //     return view('package-details', compact('package','similarPackages','title','reviewCount','meta_keywords','meta_descriptions'));
    // }
    
    // public function validate_category_packages($categories_array, $package_id)
    // {
    //     $productIdsForCat = []; 

    //     foreach($categories_array as $subCategoryProduct)
    //     {   
    //         $productIdsForCat[] = $subCategoryProduct->package_id.','; 
    //     }
     
    //     if (($key = array_search($package_id, $productIdsForCat)) === false) {
    //         abort(404);
    //     }   
    // }
    
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
        
        $to_name = 'Indian Tours';
        $to_email = 'indiantours2@gmail.com';
        $from_name = $request->full_name;
        $from_email = $request->email;

        $data = array('body' => $booking, 'name' => $to_name, 'booking_date' => $request->booking_date);
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email, $from_name, $from_email) {
        $message->to($to_email, $to_name)
        ->subject('India Tours Booking Request');
        $message->from($from_email, $from_name);
        });
        return back()->with('success', 'Your booking requested successfully.');
    }
}
