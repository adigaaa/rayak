<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace'=> 'App\Api\Controllers','middleware' => 'api.auth'],function($router){
        $router->get('/','PostsController@index');
    });
    
});
