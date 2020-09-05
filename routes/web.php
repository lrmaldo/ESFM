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

Route::get('/','InicioController@index');
Route::get('/conoce','InicioController@conoce');
Route::get('/modelo','InicioController@modelo');

Auth::routes();

Route::resource('user','UserController');
Route::get('/home', 'HomeController@index')->name('home');

/* ruta portada */
Route::get('portada',['as'=>'portada',
'uses'=>'HomeController@portada']);

Route::get('portada/update/{id}',['as'=>'portada.update',
'uses'=>'HomeController@portadaUpdate']);
