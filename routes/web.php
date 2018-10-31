<?php

use App\Http\Controllers\universityController;

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
  
Route::get('/',          "indexcontroller@welcome");
Route::get('/main',      "indexcontroller@index");
Route::get('/comment',   "indexcontroller@comment");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('university','universityController');