<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('posts.create', ['title' => 'Add posts']);
    }

    public function store(StorePostRequest $request)
    {
        Post::query()->create($request->all());
        return redirect()->route('posts.create')->with('success', 'Post created!');
    }
}
