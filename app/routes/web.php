<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/', 'welcome');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(VerifyCsrfToken::class);
Route::put('/update', [HomeController::class, 'update'])->withoutMiddleware(VerifyCsrfToken::class);
Route::delete('/delete', [HomeController::class, 'delete'])->withoutMiddleware(VerifyCsrfToken::class);
Route::delete('/destroy', [HomeController::class, 'destroy'])->withoutMiddleware(VerifyCsrfToken::class);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
