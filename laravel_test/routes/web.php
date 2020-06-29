<?php

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


// Route::get('/posts/{name}', function($name) {
//     $name = request('name');

//     return view('posts', [
//         'name'=>$name
//     ]);
// });


// Route::get('/posts/{slug}', function ($slug) {
//         // dd($name);

//     $posts = [
//         'my-first-post'=>"This is my first post!",
//         'my-sec-post'=>"This is my sec post!"
//     ];

//     if(!array_key_exists($slug, $posts)) {
//         abort(404);
//     }

//     return view('posts', [
//         'post'=>$posts[$slug]
//     ]);

// });


Route::get('/posts/{slug}', 'PostsController@show');

Route::get('/about', function() {
    return view('about');
});

Route::get('/contacts', 'Controller@show');