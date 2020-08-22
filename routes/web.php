<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/series', 'SeriesController@index');

$router->group(['prefix' => '/api'], function () use ($router) {
    $router->get('/series', 'SeriesController@index');
});