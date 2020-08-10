<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard');
    Route::get('/users', 'userController@index');


    //Módulo de productos
    Route::get('/products', 'ProductController@index');
    Route::get('/products/add', 'ProductController@getProductAdd');

});
