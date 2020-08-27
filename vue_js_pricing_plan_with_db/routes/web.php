<?php

use App\Http\Controllers\BoughtPlanController;
use Illuminate\Contracts\Cache\Store;
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
//     return view('pricing-plans');
// });


Route::get('/', 'BoughtPlanController@index');
Route::post('/', 'BoughtPlanController@store');