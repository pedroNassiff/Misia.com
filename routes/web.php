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
    return view('home');
});

Route::get('/vestidos-a-medida', function () {
    return view('vestidos');
});

Route::get('/vestidos-a-medida-dos', function () {
    return view('vestidos-dos');
});

Route::get('/detalle-de-compra', function () {
    return view('detalle-de-compra');
});

Route::get('/clientes', function () {
    return view('customers');
});

Route::get('/asesoramiento', function () {
    return view('home');
});

Route::get('/somos-misia', function () {
    return view('we-are-misia');
});

Route::get('/contacto', function () {
    return view('home');
});

Route::get('/mi-cuenta', function () {
    return view('home');
});

Route::get('/carrito', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
