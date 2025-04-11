<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

//        $categories = Category::query()->find(1);
//        dump($categories->toArray());
//        $post = Post::query()->where('category_id', '=', 1)->get();
//        dump($post->toArray());
//        dump($categories->posts->toArray());
//
//        $post = Post::query()->find(1);
//        dump($post->category->toArray());



//        $categories = Category::all();
//        $categories = Category::with('posts')->get();
//        dump($categories->toArray());
//
//        foreach ($categories as $category) {
//            echo "{$category->name}<br><br>";
//            foreach ($category->posts as $post) {
//                echo "{$post->title}<br>";
//            }
//            echo "<hr>";
//        }



//        $categories = Category::query()->withCount('posts')->get();
//        dump($categories->toArray());
//
//        foreach ($categories as $category) {
//            echo "{$category->name} ({$category->posts_count})<br><br>";
//            echo "<hr>";
//        }



        $category = Category::query()->find(1);
        dump($category->posts()->where('id', '<>', 7)->orderBy('id', 'desc')->get()->toArray());


        return view('home.index', compact('title'));
    }

    public function store(Request $request) //api post
    {
        Post::query()->create($request->all());
    }

    public function update(Request $request) //api put
    {
        $post = Post::query()->find($request->id);
        $post->title =$request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = $request->slug;
        $post->save();
    }

    public function delete(Request $request) //api delete
    {
        $post = Post::query()->find($request->id);
        $post->delete();
    }

    public function destroy(Request $request) //api delete
    {
        Post::destroy($request->id);
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
