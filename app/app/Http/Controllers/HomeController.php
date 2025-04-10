<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $data = ['id' => 3, 'name' => 'Andrii'];
        $users = DB::select('SELECT * FROM users where id < :id and name != :name', $data);
        $title = 'Home';

//        $count = DB::select('SELECT COUNT(*) FROM users');
//        $count = DB::scalar('SELECT COUNT(*) FROM users');
//        dump($count);

//        $data2 = ['name' => 'Don Gon', 'email' => 'gon@gmail.com', 'password' => 'hereMyPswd'];
//        DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $data2);

//        DB::update('UPDATE users SET avatar = :avatar WHERE id = :id', ['avatar' => 'img.jpg', 'id' => '1']);

//        $data1 = ['id' => 7];
//        DB::delete('DELETE FROM users where id = :id', $data1);

//        try {
//            $data2 = ['name' => 'Andrii', 'email' => 'andrii@gmail.com', 'password' => 'hereMyPswd'];
//            DB::transaction(function () use (&$data2) {
//                DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $data2);
//                DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $data2);
//            });
//        } catch (\Exception $e) {
//            dump($e->getMessage());
//        }

//        try {
//            $data3 = ['name' => 'Denis', 'email' => 'deenie@gmail.com', 'password' => 'shoTuHochesh'];
//            DB::beginTransaction();
//            DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $data3);
//            DB::insert('insert into users (name, email, password) values (:name, :email, :password)', $data3);
//            DB::commit();
//        } catch (\Exception $e) {
//            DB::rollback();
//            dump($e->getMessage());
//        }

        return view('home.index', compact('title', 'users'));
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
