<?php

use Illuminate\Support\Facades\Route;
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
/* Rutas pendientes */
Route::view('/', 'home')->name('home');
Route::view('/asignaciones', 'asignaciones')->name('asignaciones');
Route::view('/distribuidores', 'distribuidores')->name('distribuidores');
Route::view('/historial-ventas', 'historial-ventas')->name('historial-ventas');

Route::view('/operaciones', 'operaciones')->name('operaciones');
Route::view('/privilegios', 'privilegios')->name('privilegios');
Route::view('/productos', 'productos')->name('productos');
Route::view('/redes-distribuidores', 'redes-distribuidores')->name('redes-distribuidores');
Route::view('/reembolsos', 'reembolsos')->name('reembolsos');
Route::view('/reportes-mensuales', 'reportes-mensuales')->name('reportes-mensuales');

Route::view('/usuarios', 'usuarios')->name('usuarios');
Route::view('/ventas', 'ventas')->name('ventas');
Route::get('ventas', 'VentasController@index')->name('ventas');

/* Rutas en desarrollo */

/* Tipos */
Route::get('/tipos', 'TiposController@index')->name('tipos.index');
Route::get('/tipos/crear', 'TiposController@create')->name('tipos.create');
Route::post('/tipos', 'TiposController@store')->name('tipos.store');
Route::get('/tipos/{tipo}', 'TiposController@show')->name('tipos.show');

/* Roles */
Route::get('/roles', 'RolController@index')->name('roles.index');
Route::get('/roles/crear', 'RolController@create')->name('roles.create');
Route::post('/roles', 'RolController@store')->name('roles.store');
Route::get('/roles/{rol}', 'RolController@show')->name('roles.show');

/* NRequerido */
// Route::get('/nrequerido', 'NRequeridoController@index')->name('nrequerido.index');
// Route::get('/nrequerido/crear', 'NRequeridoController@create')->name('nrequerido.create');
// Route::post('/nrequerido', 'NRequeridoController@store')->name('nrequerido.store');
// Route::get('/nrequerido/{nrequerido}', 'NRequeridoController@show')->name('nrequerido.show');

Route::resource('nrequerido', 'NRequeridoController')
->names('nrequerido')
->parameters(['nrequerido' => 'nrequerido']);

/* Contacto & Messages */
Route::get('contacto', 'ContactoController@index')->name('contacto');
Route::post('contacto', 'MessageController@store')->name('messages.store');