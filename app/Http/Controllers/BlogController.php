<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('blog.index', compact('posts'));
    }

    // Show a single post
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
