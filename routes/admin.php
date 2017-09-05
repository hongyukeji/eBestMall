<?php

/*
 * Admin 后端路由
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', ['uses' => 'HomeController@index']);
    Route::get('/home', ['uses' => 'HomeController@home', 'as' => 'admin.home']);

    Route::get('/user', ['uses' => 'UserController@index']);
    Route::get('/user/create', ['uses' => 'UserController@create']);
    Route::post('/user/create', ['uses' => 'UserController@create']);
    Route::get('/user/edit/{user}', ['uses' => 'UserController@edit']);
    Route::post('/user/edit', ['uses' => 'UserController@edit']);
    Route::get('/user/delete/{user}', ['uses' => 'UserController@delete']);

    Route::get('/setting', ['uses' => 'SettingController@index']);
    Route::get('/setting/basic', ['uses' => 'SettingController@basic']);

    Route::get('/manage', ['uses' => 'ManageController@index']);

    Route::get('/message', ['uses' => 'MessageController@index']);
});