<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard');
    Route::get('/users', 'userController@index');


    //Módulo de productos
    Route::get('/products', 'ProductController@index');
    Route::get('/products/add', 'ProductController@getProductAdd');
    Route::post('/products/add', 'ProductController@postProductAdd');

    //Módulo de categories
    Route::get('/categories', 'CategoriasController@getHome');
});
