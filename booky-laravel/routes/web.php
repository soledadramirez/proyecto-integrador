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
    return view('home1');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/register', function (){
  return view ('register');

});

Route::get('/login', function (){
  return view ('login');

});

Auth::routes();

Route::get('/home1', 'HomeController@index')->name('home1');
