<?php

$router = new AltoRouter();

$router->map('GET', '/', 'App\Controllers\HomeController@index', 'home');
$router->map('GET', '/aboutus', 'App\Controllers\HomeController@aboutus', 'aboutus');

