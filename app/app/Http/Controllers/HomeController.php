<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $title = 'Home';

//        $users = [];
//        $users = DB::table('users')->get(['id', 'name']);
//        $user = DB::table('users')->where('name', '=', 'Andrii')->first();
//        $users = DB::table('users')->where('name', '=', 'Andrii')->value('name');
//        dump($users);

//        $users = DB::table('users')->where('id', '>', 7)->orderBy('id', 'desc')->get();

//        $users = DB::table('users')->pluck('name', 'id');
//        dump($users);

//        DB::table('city')->orderBy('name')->chunk(100, function (Collection $cities) {
//            foreach ($cities as $city) {
//                if($city->Name == 'Bacabal') {
//                    return false;
//                }
//                dump($city->Name);
//            }
//        });

//        $cities = DB::table('city')->limit(10)->get(['Id', 'Name']);

        $cities = DB::table('city')->where('Name', '=', 'Ternopil')->get(['Id', 'Name']);
        dump($cities);

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
