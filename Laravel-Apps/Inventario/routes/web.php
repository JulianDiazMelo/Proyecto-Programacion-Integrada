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


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('productos', 'ProductosController')->middleware('auth');
Route::resource('clientes', 'ClienteController')->middleware('auth');
Route::resource('compras', 'ComprasController')->middleware('auth');


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'ProductosController@index')->name('home');
Route::get('/home', 'ClienteController@index')->name('home');

