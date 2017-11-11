<?php

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

Route::get('/', 'HomeController@index');

/*
 * Demo 路由
 */
Route::group(['prefix' => 'demo'], function () {
    Route::get('/', 'DemoController@index');
    Route::get('category', 'DemoController@category');
});


