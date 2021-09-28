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
    return view('welcome');
});
Route::get('/inicio', 'UserController@index');

Route::get('/instalacion', function () {
    return view('instalacion');
});

Route::get('/vistas', function () {
    return view('vistas');
});

Route::get('/vistas1', function () {
    return view('vistas1');
});

Route::get('/rutas', function () {
    return view('rutas');
});

Route::get('/controladores', function () {
    return view('controladores');
});