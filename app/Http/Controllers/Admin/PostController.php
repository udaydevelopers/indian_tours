<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Image;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::with('tags')->orderBy('id','DESC')->paginate(5);

        return view('admin.posts.index',compact('posts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.posts.create', compact('tags'));
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
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'blog_image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

          
        $post = new Post;
        
        if ($request->hasFile('blog_image')) {  
            $image = $request->file('blog_image');
        
            $filename  = $image->getClientOriginalName() ."_". time() . '.' . $image->getClientOriginalExtension();
            $main = public_path('images/blog/' . $filename);
            $thumb = public_path('images/blog/thumb/' . $filename);
            $stamp = public_path('images/blog/stamp/' . $filename);
            
            Image::make($image->getRealPath())->resize(725, 423)->save($main);
            Image::make($image->getRealPath())->resize(348, 290)->save($thumb);
            Image::make($image->getRealPath())->resize(80, 67)->save($stamp);

        }

        $post->title = $request->title;
        $post->short_description = $request->short_description;
        $post->body = $request->description;
        $post->image = $filename;
        $post->slug = Str::slug($request->title);
        $post->status = 1;
        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.posts.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('tags')->find($id);
        $tags = Tag::all();
        return view('admin.posts.edit',compact('post','tags'));

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
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'blog_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        $post = Post::find($id);
        $oldFilename = $post->image;

        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
    
            $filename  = $image->getClientOriginalName() ."_". time() . '.' . $image->getClientOriginalExtension();
            $main = public_path('images/blog/' . $filename);
            $thumb = public_path('images/blog/thumb/' . $filename);
            $stamp = public_path('images/blog/stamp/' . $filename);
            
            Image::make($image->getRealPath())->resize(725, 423)->save($main);
            Image::make($image->getRealPath())->resize(348, 290)->save($thumb);
            Image::make($image->getRealPath())->resize(80, 67)->save($stamp);

            if (file_exists('images/blog/' . $oldFilename)) {
                unlink('images/blog/' . $oldFilename);
                unlink('images/blog/thumb/' . $oldFilename);
                unlink('images/blog/stamp/' . $oldFilename);
            }

            $post->image = $filename;
        }

        $post->title = $request->title;
        $post->short_description = $request->short_description;
        $post->body = $request->description;
        
        $post->slug = Str::slug($request->title);
        $post->status = 1;
        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->route('admin.posts.index')
        ->with('success','Post has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        $Filename = $post->image;
        if (file_exists('images/blog/' . $Filename)) {
            unlink('images/blog/' . $Filename);
            unlink('images/blog/thumb/' . $Filename);
            unlink('images/blog/stamp/' . $Filename);
        }
        $post->delete();

        return redirect()->route('admin.posts.index')
                        ->with('success','Post deleted successfully');
    }
}
