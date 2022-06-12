<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Prophecy\Prophecy\Revealer;

class ReviewController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:review-list|review-create|review-edit|review-delete', ['only' => ['index','store']]);
         $this->middleware('permission:review-create', ['only' => ['create','store']]);
         $this->middleware('permission:review-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:review-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews = Review::orderBy('id','DESC')->paginate(5);
        return view('admin.reviews.index',compact('reviews'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('admin.reviews.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('admin.reviews.edit', compact('review'));
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
            'email' => 'required',
            'subject'      => 'required',
            'comments' => 'required'
        ]);

        $review = Review::find($id);
        $review->name = $request->name;
        $review->email = $request->email;
        $review->subject = $request->subject;
        $review->comments = $request->comments;
        $review->status = $request->status;
        $review->save();
        
        return redirect()->route('admin.reviews.index')
        ->with('success','Review has been update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        return redirect()->route('admin.reviews.index')
                        ->with('success','Review deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $review = Review::find($id);
        $review->status = 'publish';
        $review->save();
        return redirect()->back()->with('success','Review has been approved successfully.');
    }
}
