<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\Country;

class HomeController extends Controller
{
    public function index(): View
    {
        $title = 'Home';

        $products = collect([
            ['title' => 'product 1', 'price' => 1000],
            ['title' => 'product 2', 'price' => 20],
            ['title' => 'product 3', 'price' => 500],
            ['title' => 'product 4', 'price' => 30],
            ['title' => 'product 5', 'price' => 300],
            ['title' => 'product 6', 'price' => 999],
            ['title' => 'product 7', 'price' => 199],
        ]);

        $filtered = $products->filter(function ($value, $key) {
            return $value['price'] >= 200;
        });

        return view('home.index', compact('title', 'products', 'filtered'));
    }

    public function store(Request $request)
    {
        dump($request->all());
        Post::query()->create($request->all());
    }

    public function update(Request $request)
    {
        $post = Post::query()->find($request->id);
        $post->title =$request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = $request->slug;
        dump($post->save());
    }

    public function delete(Request $request)
    {
        $post = Post::query()->find($request->id);
        dump($post->delete());
    }

    public function destroy(Request $request)
    {
        $post = Post::destroy($request->id);
        dump($post);
    }

    public function about(): View
    {
        $title = 'About';
        return view('home.about', compact('title'));
    }

    public function contact(): View
    {
        $title = 'Contact';
        return view('home.contact', compact('title'));
    }
}
