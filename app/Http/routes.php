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
Route::resource('solicitudes','SolicitudController');
Route::resource('solicitudes1','Solicitud1Controller');
Route::resource('entradas','EntradasController');

Route::resource('inventarios','InventarioController');

Route::get('verPartidas/{id}','PartidaController@verPartidas')->name('partidas.verPartidas');

Route::get('pdf','ArticulosController@pdf')->name('articulos.pdf');

Route::get('crearPartidas2/{id}','Partida2Controller@create1')->name('partidas2.create1');

Route::get('event2', 'EventController@index1');

Route::get('verSolicitudes/{id}','SolicitudController@verSolicitudes')->name('solicitud.verSolicitudes');

Route::get('pdf/{id}','SolicitudController@pdf')->name('solicitud.pdf');

Route::get('adquisinet', function()
{
	return redirect()->away('http://adquisinet.sazacatecas.gob.mx/index.php
		');
});


Route::get('tipoUnidad/{id}', 'SolicitudController@tipoUnidad');
