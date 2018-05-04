<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::resource('home','HomeController');
Route::resource('almacenes','AlmacenController');
Route::resource('partidas','PartidaController');
Route::resource('direcciones','DireccionController');
Route::resource('proveedores','ProveedorController');
Route::resource('usuarios','UsuariosController');
Route::resource('articulos','ArticulosController');
Route::resource('partidas2','Partida2Controller');
Route::resource('reportes','ReporteController');
Route::resource('events','EventController');

Route::get('verPartidas/{id}','PartidaController@verPartidas')->name('partidas.verPartidas');


Route::get('crearPartidas2/{id}','Partida2Controller@create1')->name('partidas2.create1');

Route::get('events', 'EventController@index');
Route::get('event2', 'EventController@index1');
