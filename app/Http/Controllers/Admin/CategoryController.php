<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Category::orderBy('id','DESC')->paginate(20);
        return view('admin.categories.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = Category::where('parent_id',NULL)->get();
        return view('admin.categories.create', compact('parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'parent_id' => 'nullable|numeric'
        ]);

        $background_image = null;

        if ($request->hasFile('background_image')) {
            $background_image = time().'.'.$request->background_image->extension();  
            $request->background_image->move(public_path('images/categories'), $background_image);
        }

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' =>$request->parent_id,
            'background_image' => $background_image
        ]);
        return redirect()->route('admin.categories.index')
        ->with('success','Category has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parentCategories = Category::where('parent_id',NULL)->get();
        return view('admin.categories.edit',compact('category', 'parentCategories'));
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
        $this->validate($request, [
            'name'      => 'required',
            'parent_id' => 'nullable|numeric'
        ]);

        $background_image = null;

        if ($request->hasFile('background_image')) {
            $background_image = time().'.'.$request->background_image->extension();  
            $request->background_image->move(public_path('images/categories'), $background_image);
        }

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->sort_order = 0;
        $category->background_image = ($background_image) ? $background_image : $request->background_image;
        $category->updated_at = Carbon::now();
        $category->save();

        return redirect()->route('admin.categories.index')
        ->with('success','Category has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('dsfd');
    }
}
