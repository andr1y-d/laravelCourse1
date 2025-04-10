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

//        $country = Country::query()->findOrFail('USA')->toArray();
//        dump($country);
//        dump($country['Name']);

//        dump('Count: ' . Country::query()->count());
//        dump('Max: ' . Country::query()->Max('Population'));
//        dump('Min: ' . Country::query()->Min('Population'));
//        dump('Avg: ' . Country::query()->Avg('Population'));

//        $post = new Post();
//        $post->title = 'New Post';
//        $post->content = 'New Post Content';
//        $post->category_id = 1;
//        $post->slug = 'yopta slugg';
//        dump($post);
//
//        dump($post->save());
//        dump($post);

        return view('home.index', compact('title'));
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
