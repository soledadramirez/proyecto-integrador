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
Route::get('/index', 'BookController@armarPost');

// Route::group(['middleware' => ['auth']], function () {

    Route::get('/users', 'FollowController@index');
    Route::post('/follow/{user}', 'FollowController@follow');
    Route::delete('/unfollow/{user}', 'FollowController@unfollow');
// });


Auth::routes();

// Route::get('/home1', 'HomeController@index')->name('home1');

Route::get("/profile", 'UserController@showOwnProfile');
Route::get("/normalProfile/{id}", 'UserController@showNormalProfile');
Route::post("/profile", 'UserController@store');



Route::get('/cargarlibros', function(){
return view ('cargarlibros');
});

Route::post("/agregarLibros", 'BookController@store');
Route::get("/agregarLibros", 'BookController@showToAdd');


Route::get("/notifications", 'BookController@ListaDeLibros');
Route::get("/bookPost/{id}", 'BookController@show');

Route::get('/solicitar/{id}', 'BookController@solicitar');
Route::get('/confirmar/{id}', 'BookController@confirmar');
Route::get('/devolver/{id}', 'BookController@devolver');

Route::get('/buscarLibros', 'BookController@buscarLibros');

Route::get('/resultadoLibros', function(){
  return view('resultadoLibros');
});
