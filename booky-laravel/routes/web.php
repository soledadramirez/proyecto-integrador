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

// Route::get('/home1', 'HomeController@index')->name('home1');

Route::get("/profile", 'UserController@index');
Route::get("/normalProfile/{id}", 'UserController@show');


Route::get('/cargarlibros', function(){
return view ('cargarlibros');
});

Route::post("/agregarLibros", 'BookController@store');
Route::get("/agregarLibros", 'BookController@showToAdd');


Route::get("/notifications", 'BookController@ListaDeLibros');
Route::get("/bookPost/{id}", 'BookController@show');
Route::get('/confirm/{id}', 'BookController@confirm');


Route::get('/buscarLibros', 'BookController@buscarLibros');
Route::get('/resultadoLibros', function(){
  return view('resultadoLibros');
});
