<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\Image;
use File;
use Illuminate\Support\Str;

class PackageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:package-list|package-create|package-edit|package-delete', ['only' => ['index','store']]);
         $this->middleware('permission:package-create', ['only' => ['create','store']]);
         $this->middleware('permission:package-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:package-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packages = Package::with('categories','images')->paginate(5);
        
        // foreach($packages as $package)
        // {
        //     foreach($package->categories as $category)
        //     {
        //         echo $category->name;
        //     }
        // }
        // die;
        return view('admin.packages.index', compact('packages'))
        ->with('i', ($request->input('page', 1) - 1) * 5);; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = Category::where('parent_id',NULL)->get();
        return view('admin.packages.create', compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
              'name' => 'required|string|max:255',
              'description' => 'required|string|max:855',
        ]);

        $package_small_pic = null;
        $package_large_pic = null;

        if ($request->hasFile('package_small_pic')) {
            $imageSmallName = time().'.'.$request->package_small_pic->extension();  
            $request->package_small_pic->move(public_path('images'), $imageSmallName);
            $package_small_pic = $imageSmallName;
        }

        if ($request->hasFile('package_large_pic')) {
            $imageLargeName = time().'.'.$request->package_large_pic->extension();  
            $request->package_large_pic->move(public_path('images'), $imageLargeName);
            $package_large_pic = $imageLargeName;
        }
        
        $package = new Package;

        $package->name = $request->name;
        $package->description = $request->description;
        $package->program = $request->program;
        $package->policy = $request->policy;
        $package->trip_days = $request->trip_days;
        $package->trip_nights = $request->trip_nights;

        $package->adult_sp = $request->adult_sp;
        $package->adult_rp = $request->adult_rp;
        $package->adult_dsc = $request->adult_dsc;
        $package->child_sp = $request->child_sp;
        $package->child_rp = $request->child_rp;
        $package->child_dsc = $request->child_dsc;
        $package->infant_sp = $request->infant_sp;
        $package->infant_rp = $request->infant_rp;
        $package->infant_dsc = $request->infant_dsc;

        $package->couple_sp = $request->couple_sp;
        $package->couple_rp = $request->couple_rp;
        $package->couple_dsc = $request->couple_dsc;

        $package->popular = ($request->popular) ? $request->popular : 0;
        $package->package_small_pic = $package_small_pic;
        $package->package_large_pic = $package_large_pic;
        $package->meta_keywords = $request->meta_keywords;
        $package->meta_descriptions = $request->meta_descriptions;
        $package->status = $request->status;
        $package->slug = Str::slug($request->name);

        $package->save();
        
        $package->categories()->sync($request->categories);

        
        foreach ($request->input('document', []) as $file) {
            $image = new Image;
            File::copy(storage_path('tmp/uploads/'.$file), public_path('images/'.$file));
            $image->url = $file;
            $image->package_id = $package->id;
            $image->save();
        }
        return redirect()->route('admin.packages.index')
        ->with('success','Package has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::with('categories','images')->find($id);
        return view('admin.packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
