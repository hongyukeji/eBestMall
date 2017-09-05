<?php

/*
 * Mobile 后端路由
 */
Route::group(['prefix' => 'mobile', 'namespace' => 'Mobile'], function () {
    Route::get('/', 'SiteController@index');
});