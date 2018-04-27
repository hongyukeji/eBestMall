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
    Route::get('/article', function () {return view('frontend.article.index');});
    Route::get('/search', function () {return view('frontend.search.index');});
    Route::get('/user', function () {return view('frontend.user.index');});
    Route::get('/goods', function () {return view('frontend.goods.index');});
    Route::get('/cart', function () {return view('frontend.cart.index');});
    Route::get('/cart/create', function () {return view('frontend.cart.create');});
    Route::get('/cart/confirm', function () {return view('frontend.cart.confirm');});
    Route::get('/auth/login', function () {return view('frontend.auth.login');});
    Route::get('/auth/register', function () {return view('frontend.auth.register');});
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
Route::namespace('Api')->prefix('api')->group(function () {
    Route::get('/', 'MainController@index');
});

/* Api V1 */
Route::namespace('Api\V1')->prefix('api/v1')->group(function () {
    Route::get('/', 'MainController@index');
});
