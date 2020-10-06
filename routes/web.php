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

Route::get('/edit_perfil','UserController@edit_perfil');
Route::PUT('perfil/update/{id}',['as'=>'edit_perfil.update',
'uses'=>'UserController@update_perfil']);



/* ruta de contaco post contacto_form */
Route::POST('contacto_form',['as'=>'contacto.post',
'uses'=>'InicioController@contacto_form']);




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
/* ruta de perfil docente */
Route::GET('perfil/{id}','InicioController@perfil');



Route::resource('edit_modelo','ModeloController');


Route::resource('horarios','HorarioController');

/* ruta portada */
Route::get('portada',['as'=>'portada',
'uses'=>'HomeController@portada']);

Route::PUT('portada/update/{id}',['as'=>'portada.update',
'uses'=>'HomeController@portadaUpdate']);


/* rutas de configuracion */
Route::get('/configuracion','HomeController@configuracion');
Route::PUT('configuracion/update/{id}',['as'=>'configuracion.update',
'uses'=>'HomeController@update_configuracion']);

/* politicas */
Route::get('politica',function(){

    return view('politica');

});

/* terminos */

Route::get('terminos',function(){

    return view('terminos');

});

/* php artisan route */
Route::get('clear_cache', function () {

    \Artisan::call('cache:clear');

    dd("Cache is cleared");

});


Route::get('config_cache', function () {

    \Artisan::call('config:cache');

    dd("Config and Cache is cleared");

});

Route::get('clear_route', function () {

    \Artisan::call('route:clear');

    dd("Route is cleared");

});

Route::get('view_cache', function () {

    \Artisan::call('view:clear');

    dd("View is cleared");

});
