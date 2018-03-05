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

/* Backend Routes */
require __DIR__.'/backend.php';

/* Frontend Routes */
require __DIR__.'/frontend.php';

/* Mobile Routes */
require __DIR__.'/mobile.php';
