<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->first();

    return view('post', ['post' => $post]);
})->whereAlpha('slug');

Route::match(['post', 'put', 'patch'], '/register', function () {
    //
});

Route::any('/register', function () {
    //
});
