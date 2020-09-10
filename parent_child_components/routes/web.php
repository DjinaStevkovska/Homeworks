<?php

use App\Http\Controllers\AxiosController;
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
Route::post('/', 'AxiosController@store');

Route::get('/', function () {
    return view('projects');
});


// Route::get('/projects', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
