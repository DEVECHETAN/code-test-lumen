<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* Default */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* Member */
$router->get('members', 'MemberController@retriveMembers');
/* End Member */