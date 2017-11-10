<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/user', 'UserController@index');
    $router->post('/user', 'UserController@store');
    $router->get('/user/create', 'UserController@create');
    $router->any('/user/{$id}/edit', 'UserController@edit');

});
