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
Route::get('/main',      "indexcontroller@index")->middleware('auth');
Route::post('/main1',     "indexcontroller@create")->middleware('auth');
Route::get('/comment',   "indexcontroller@comment")->middleware('auth');
Route::get('/university',"indexcontroller@university")->middleware('auth');;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/comment/{id}',   "indexcontroller@comment")->middleware('auth');;
Route::post('/seach',     "indexcontroller@search")->middleware('auth');;
Route::get('/home', 'HomeController@index')->middleware('auth');;
Route::get('/searchcat/{name}',"indexcontroller@searchcat")->middleware('auth');;



