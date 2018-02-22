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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();
Route::prefix('auth')->group(function () {
    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index');
});

Route::prefix('goods')->group(function () {
    Route::get('/', 'GoodsController@index');
});

Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index');
});

Route::prefix('order')->group(function () {
    Route::get('/', 'OrderController@index');
});

/************* Admin *************/

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/auth/login', 'AuthController@login');

    Route::get('/', 'DashboardController@index')->name('backend');
});
