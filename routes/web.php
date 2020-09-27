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
Route::get('/publicaciones','InicioController@publicaciones');
Route::get('/eventos','InicioController@eventos');
Route::get('/galeria','InicioController@galeria');

Auth::routes();

Route::resource('user','UserController');
Route::get('/home', 'HomeController@index')->name('home');

/* ruta portada */
Route::get('portada',['as'=>'portada',
'uses'=>'HomeController@portada']);

Route::PUT('portada/update/{id}',['as'=>'portada.update',
'uses'=>'HomeController@portadaUpdate']);


Route::resource('edit_modelo','ModeloController');


Route::resource('horarios','HorarioController');

/* rutas de areas de la pestaña conoce tu escuela */

Route::resource('areas','ConoceController');

/* mis publicaciones  */

Route::resource('mispublicaciones','MispublicacionesController');

/* miseventos */
Route::resource('miseventos','EventosController');

/* galerias */
Route::resource('migaleria','GaleriaController');

Route::GET('publicacion/{id}','InicioController@publicacion');
Route::GET('evento/{id}','InicioController@evento');
