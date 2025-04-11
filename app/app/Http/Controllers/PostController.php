<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('posts.create', ['title' => 'Add posts']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|string',
            'slug' => 'required|unique:posts|max:255|string',
            'category_id' => 'required|exists:categories,id|integer',
        ]);
        Post::query()->create($validatedData);
        return redirect()->route('posts.create')->with('success', 'Post created!');
    }
}
