<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Package;

class FaqController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:faq-list|faq-create|faq-edit|faq-delete', ['only' => ['index','store']]);
         $this->middleware('permission:faq-create', ['only' => ['create','store']]);
         $this->middleware('permission:faq-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:faq-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faqs = Faq::orderBy('id','DESC')->paginate(5);
        return view('admin.faqs.index',compact('faqs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::orderBy('name','ASC')->get(['id', 'name']); 
        return view('admin.faqs.create', compact('packages'));
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
            'question'      => 'required',
            'answer' => 'required'
        ]);

        $faq = Faq::create([
            'question' => $request->question,
            'answer' =>$request->answer,
            'status' => $request->status
        ]);

        if($request->faq_package) 
        $faq->packages()->sync($request->faq_package);

        return redirect()->route('admin.faqs.index')
        ->with('success','Faq has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('admin.faqs.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $packages = Package::orderBy('name','ASC')->get(['id', 'name']); 
        return view('admin.faqs.edit', compact('faq', 'packages'));
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
            'question'      => 'required',
            'answer' => 'required'
        ]);

        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->save();
        
        // Link Faq to package
        $faq->packages()->sync($request->faq_package);
        return redirect()->route('admin.faqs.index')
        ->with('success','Faq has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq::find($id)->delete();
        return redirect()->route('admin.faqs.index')
                        ->with('success','Faq deleted successfully');
    }
}
