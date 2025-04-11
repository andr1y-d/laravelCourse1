<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
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


//        Post::query()->create([
//            'title' => 'another title',
//            'slug' => 'sluuuuuuuug',
//            'content' => 'content',
//            'category_id' => 4
//        ]);

//        $category = Category::query()->find(2);
//        $category->posts()->save(new Post([
//            'title' => 'tilte',
//            'slug' => 'slig',
//            'content' => 'content 3',
//        ]));

//        $category = Category::query()->find(4);
//        $category->posts()->saveMany([
//            new Post([
//                'title' => 'tilte2',
//                'slug' => 'sliig',
//                'content' => 'content 3',]),
//            new Post([
//                'title' => 'tilte1',
//                'slug' => 'sliiig',
//                'content' => 'content 3',]),
//        ]);

//        $category = Category::query()->find(3);
//        dump($category->posts->toArray());
//        $category->posts()->save(new Post([
//                'title' => 'tilte1222',
//                'slug' => 'sliiig2222',
//                'content' => 'content 3222',
//            ]));
//        $category->refresh();
//        dump($category->posts->toArray());

//        $category = Category::query()->find(4);
//        $post = Post::query()->find(12);
//        $post->category()->associate($category);
//        $post->save();

//        $post = Post::query()->find(12);
//        $post->category()->dissociate();
//        $post->save();

//        $post = Post::query()->find(12);
//        $post->tags()->attach([1,2,4]);

//        $post = Post::query()->find(12);
//        $post->tags()->detach([1,2,4]);

//        $post = Post::query()->find(12);
//        $post->tags()->sync([1,2,4]);

//        $post = Post::query()->find(12);
//        $post->tags()->toggle([1,2,4,3]);

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
