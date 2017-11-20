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

Route::get('/index/funcionario', 'HomeController@funcionario')->name('home');


Route::get('/tp', function (){
   return view("indexEmployee");
});
Route::get('/t', function (){
   return view("pagination");
});
Route::get('/produtos', function (){
   return view("product/listProducts");
});

Route::get('/grupoProdutos', function (){
   return view("product/groupProducts");
});
Route::get('/culturaProdutos', function (){
   return view("product/cultureProducts");
});
Route::get('/novoProduto', function (){
   return view("product/newProducts");
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
