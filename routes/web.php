<?php

$router = new AltoRouter();

$router->map('GET', '/home', 'App\Controllers\HomeController@index', 'home');

