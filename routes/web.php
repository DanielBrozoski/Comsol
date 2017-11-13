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

Route::get('/', function () {
    return view('login');
});

Route::get('/66', function (){
   return view("indexEmployee");

});
Route::get('/tp', function (){
   return view("basicModel");

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');