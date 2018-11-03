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
Route::POST('/main',     'indexcontroller@addPost' );

Route::post('/main/{id}', 'indexcontroller@addcomment');
Route::get('/main/{id}',   "indexcontroller@comment");

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('university','universityController');