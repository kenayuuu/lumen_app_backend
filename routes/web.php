<?php

$router->group(['prefix' => 'api/dosen'], function () use ($router) {
    $router->get('/', 'DosenController@index');         // Get all
    $router->get('{no}', 'DosenController@show');       // Get by ID
    $router->post('/', 'DosenController@store');        // Create
    $router->put('{no}', 'DosenController@update');     // Update
    $router->delete('{no}', 'DosenController@destroy'); // Delete
});

$router->group(['prefix' => 'api/map'], function () use ($router) {
    $router->get('/', 'MapController@index');         // Get all
    $router->get('{id}', 'MapController@show');       // Get by ID
    $router->post('/', 'MapController@store');        // Create
    $router->put('{id}', 'MapController@update');     // Update
    $router->delete('{id}', 'MapController@destroy'); // Delete
});

