<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->latest()->get();
        $title = "Blog: Indian Tours";
        $meta_keywords = 'Indian Tours Blog';
        $meta_descriptions = 'Indian Tours Blog Descriptions';
        $recentPosts = Post::with('tags')->latest()->limit(5)->get();
        return view('blog', compact('posts', 'recentPosts', 'title','meta_keywords','meta_descriptions'));
        
    }

    public function details($slug)
    {
        $post = Post::where('slug', $slug)->with('tags')->first();
        $title = $post->title;
        $meta_keywords = $post->short_description;
        $meta_descriptions = $post->short_description;

        if(!$post){
            abort(404);  
        }

        $recentPosts = Post::with('tags')->latest()->limit(5)->get();
        
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $previous = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();

        return view('blog-details', compact('post', 'recentPosts', 'previous', 'next', 'title','meta_keywords','meta_descriptions'));
        
    }

}