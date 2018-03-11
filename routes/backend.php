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

Route::namespace('Backend')->prefix(env('BACKEND_PREFIX_URL_NAME'))->group(function () {

    Route::get('/auth/login', 'AuthController@showLoginForm')->name('backend.auth.login');
    Route::post('/auth/login', 'AuthController@login')->name('backend.auth.login.handler');
    Route::post('/auth/logout', 'AuthController@logout')->name('backend.auth.logout');

    Route::get('/', 'DefaultController@index')->name('backend.default.index');

});