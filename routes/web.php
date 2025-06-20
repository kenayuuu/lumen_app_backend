<?php

$router->group(['prefix' => 'api/dosen'], function () use ($router) {
    $router->get('/', 'DosenController@index');         // Get all
    $router->get('{no}', 'DosenController@show');       // Get by ID
    $router->post('/', 'DosenController@store');        // Create
    $router->put('{no}', 'DosenController@update');     // Update
    $router->delete('{no}', 'DosenController@destroy'); // Delete
});

