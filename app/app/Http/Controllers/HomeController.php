<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $title = 'Home';

//        $cities = DB::table('city')
//            ->select('city.ID', 'city.Name', 'city.CountryCode', 'country.Name as country')
//            ->join('country', 'city.CountryCode', '=', 'country.Code')
//            ->limit(10)
//            ->offset(10)
//            ->get();
//        dump($cities);

//        $cities = DB::table('city')
//            ->selectRaw('sum(city.Population) as sum_p, city.CountryCode, country.Name as country')
//            ->join('country', 'city.CountryCode', '=', 'country.Code')
//            ->groupBy('city.CountryCode')
//            ->having('city.CountryCode', '=', 'UKR')
//            ->get();
//        dump($cities);

//        dump(DB::table('users')->insert([
//            ['name' => 'Nana', 'email' => 'nana@gmail.com', 'password' => bcrypt('nana')],
//            ['name' => 'Fuma', 'email' => 'fuma@gmail.com', 'password' => bcrypt('fuma')],
//            ['name' => 'Olia', 'email' => 'olia@gmail.com', 'password' => bcrypt('olia')]
//        ]));

//        $user = DB::table('users')->where('id', '=', '17')->first();
//        dump($user);

//        dump(
//            DB::table('users')
//                ->where('id', 16)
//                ->update(['name' => 'Dady', 'password' => '123456'])
//        );

//        dump(
//            DB::table('users')
//                ->updateOrInsert(
//                    ['email' => 'fuma@gmail.com'],
//                    ['name' => 'Babay', 'password' => 'babyka']
//                )
//        );

//        dump(DB::table('users')->delete(18));

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
