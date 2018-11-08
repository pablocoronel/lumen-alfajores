<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Routes for resource alfajor
 */
$router->get('alfajor', 'AlfajorsController@all');
$router->get('alfajor/{id}', 'AlfajorsController@get');
$router->post('alfajor', 'AlfajorsController@add');
$router->put('alfajor/{id}', 'AlfajorsController@put');
$router->delete('alfajor/{id}', 'AlfajorsController@remove');

// Subir imagen
$router->post('imagenUpload', 'AlfajorsController@imagenUpload');
