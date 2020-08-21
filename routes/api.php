<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

app('Dingo\Api\Routing\Router')->version('v1', [
    'middleware' => ['bindings'],
    'namespace'  => 'App\Http\Controllers',
], function ($route) {

    // test api
    $route->get('test', 'TestController@test');

    $route->group(['middleware' => 'auth:api'], function ($route) {
        # must login
    });

});

