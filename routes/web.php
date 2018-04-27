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

/* Frontend */
Route::namespace('Frontend')->group(function () {
    Route::get('/', 'MainController@index')->name('frontend.index');
});

/* Backend */
Route::namespace('Backend')->prefix('admin')->group(function () {
    Route::get('/', 'MainController@index')->name('backend.index');
});

/* Mobile */
Route::namespace('Mobile')->prefix('mobile')->group(function () {
    Route::get('/', 'MainController@index')->name('mobile.index');
});

/* Api */
Route::namespace('Api\V1')->prefix('api/v1')->group(function () {
    Route::get('/', 'MainController@index');
});
