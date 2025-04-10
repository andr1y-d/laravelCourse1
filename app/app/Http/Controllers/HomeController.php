<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\Country;

class HomeController extends Controller
{
    public function index(): View
    {
        $title = 'Home';

//        $posts = Post::all()->toArray();
//        dump($posts);

//        $post = Post::query()->first()->toArray();
//        dump($post);

//        $post = Post::query()->find(6, ['id', 'title', 'slug'])->toArray();
//        dump($post);

//        $countries = Country::query()
//            ->where('Population', '>', '100000000')
//            ->orderBy('Population', 'desc')
//            ->limit(5)
//            ->get(['Name', 'Population']);
//        dump($countries);
//        dump($countries->toJson());
//        dump(response()->json($countries));

        $country = Country::query()->first()->toArray();
        dump($country);
        dump($country['Name']);

        return view('home.index', compact('title'));
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
