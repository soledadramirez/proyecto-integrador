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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});



Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');

Route::get("/profile", function(){
  return view("profile");
});

Route::get('/cargarlibros', function(){
return view ('cargarlibros');
});

Route::post("/agregarLibros", 'bookController@store');
Route::get("/agregarLibros", 'bookController@showToAdd');

Route::get("/bookPost", function(){
  return view("bookPost");
});
//Route::get("/bookPost/{id}", 'bookController@show');

Route::get('/buscarLibros', 'BookController@buscarLibros');
