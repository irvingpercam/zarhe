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
Route::view('/niveles', 'niveles')->name('niveles');
Route::view('/operaciones', 'operaciones')->name('operaciones');
Route::view('/privilegios', 'privilegios')->name('privilegios');
Route::view('/productos', 'productos')->name('productos');
Route::view('/redes-distribuidores', 'redes-distribuidores')->name('redes-distribuidores');
Route::view('/reembolsos', 'reembolsos')->name('reembolsos');
Route::view('/reportes-mensuales', 'reportes-mensuales')->name('reportes-mensuales');
Route::view('/roles', 'roles')->name('roles');
Route::view('/usuarios', 'usuarios')->name('usuarios');
Route::view('/ventas', 'ventas')->name('ventas');
Route::get('ventas', 'VentasController@index')->name('ventas');

/* Rutas en desarrollo */
Route::get('/tipos', 'TiposController@index')->name('tipos.index');
Route::get('/tipos/crear', 'TiposController@create')->name('tipos.create');
Route::post('/tipos', 'TiposController@store')->name('tipos.store');
Route::get('/tipos/{tipo}', 'TiposController@show')->name('tipos.show');

Route::get('contacto', 'ContactoController@index')->name('contacto');
Route::post('contacto', 'MessageController@store')->name('messages.store');