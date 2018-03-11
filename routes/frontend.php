<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/5 16:15
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

Route::namespace('Frontend')->group(function () {

    Route::get('/', 'DefaultController@index');
    Route::get('/about', 'DefaultController@about');
    Route::get('/error', 'DefaultController@error');
    Route::get('/test', 'DefaultController@test');

    /**
     * 资源控制
     *
     * Route::get('/goods', 'GoodsController@index')->name('goods.index');
     * Route::get('/goods/{user}', 'GoodsController@show')->name('goods.show');
     * Route::get('/goods/create', 'GoodsController@create')->name('goods.create');
     * Route::post('/goods', 'GoodsController@store')->name('goods.store');
     * Route::get('/goods/{user}/edit', 'GoodsController@edit')->name('goods.edit');
     * Route::patch('/goods/{user}', 'GoodsController@update')->name('goods.update');
     * Route::delete('/goods/{user}', 'GoodsController@destroy')->name('goods.destroy');
     *
     * @see https://laravel.com/docs/5.5/controllers#resource-controllers
     */
    Route::get('goods/list', 'GoodsController@list');
    Route::resource('goods', 'GoodsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy','list']]);

    Route::resource('search', 'SearchController');

    Route::resource('user', 'UserController');

    Route::resource('order', 'OrderController');

    Route::resource('cart', 'CartController');

});