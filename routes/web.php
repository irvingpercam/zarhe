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
Route::view('/tipos', 'tipos')->name('tipos');
Route::view('/usuarios', 'usuarios')->name('usuarios');
Route::view('/ventas', 'ventas')->name('ventas');