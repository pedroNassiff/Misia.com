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

Route::get('/asesoramiento', function () {
    return view('home');
});

Route::get('/we-are-misia', function () {
    return view('home');
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

/*users*/
    Route::get('/users', [
        'uses' => 'UserController@index',
        'as' => 'users.main'
    ]);
    
    Route::get('/users/show/{id}', [
        'uses' => 'UserController@show',
        'as' => 'users.show'
    ]);
    Route::get('/users/edit/{id}', [
        'uses' => 'UserController@edit',
        'as' => 'users.edit'
    ]);
    Route::post('/users/update/{id}', [
        'uses' => 'UserController@update',
        'as' => 'users.update'
    ]);
    Route::get('/users/editpassword/{id}', [
        'uses' => 'UserController@editpassword',
        'as' => 'users.editpassword'
    ]);
    Route::get('/users/password/{id}', [
        'uses' => 'UserController@updatepassword',
        'as' => 'users.updatepassword'
    ]);
    Route::get('/users/destroy/{id}', [
        'uses' => 'UserController@destroy',
        'as' => 'users.destroy'
    ]);
    
    Route::get('/users/create', [
        'uses' => 'UserController@create',
        'as' => 'users.create'
    ]);
    Route::post('/users/store', [
        'uses' => 'UserController@store',
        'as' => 'users.store'
    ]);
  
    
   
   
    