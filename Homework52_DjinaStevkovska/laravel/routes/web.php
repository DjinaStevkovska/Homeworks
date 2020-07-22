<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->middleware('auth');
// if not logged in it returns you back to login

// Route::get('/posts/{id}', 'PostController@show')->middleware('can:create, update,');

Route::get('/posts/{id}', 'PostController@show')->middleware('can:view');


Route::post('/best-replies/{reply}', 'PostBestReplyController@store');

