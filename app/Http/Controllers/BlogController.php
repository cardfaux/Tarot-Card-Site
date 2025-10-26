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

    // Show the create post form
    public function create()
    {
        return view('blog.create');
    }

    // Handle storing the post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048', // optional image upload
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog-images', 'public');
            $validated['image'] = '/storage/' . $path;
        }

        Post::create($validated);

        return redirect()->route('blog.index')->with('success', 'Post created successfully!');
    }

    // Dashboard: list all posts
    public function dashboard()
    {
        $posts = Post::latest()->paginate(10);
        return view('blog.dashboard', compact('posts'));
    }

    // Show edit form
    public function edit(Post $post)
    {
        return view('blog.edit', compact('post'));
    }

    // Update post
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog-images', 'public');
            $validated['image'] = '/storage/' . $path;
        }

        $post->update($validated);

        return redirect()->route('blog.dashboard')->with('success', 'Post updated successfully!');
    }

    // Delete post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('blog.dashboard')->with('success', 'Post deleted successfully!');
    }
}
