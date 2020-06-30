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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'HomeController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/contact', 'ContactsController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/about', function () {
    return view('about');
});



// Route::get('/', 'HomeController@index');


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', 'ServicesController@index');

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/contact', 'ContactsController@index');
