<?php

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
Route::get('/main',      "indexcontroller@index")->name("mainpage");
Route::post('/main1',     "indexcontroller@create");
Route::get('/comment',   "indexcontroller@comment");
Route::get('/university',"indexcontroller@university");

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/comment/{id}',   "indexcontroller@comment");
Route::post('/seach',     "indexcontroller@search");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/searchcat/{name}',"indexcontroller@searchcat");

