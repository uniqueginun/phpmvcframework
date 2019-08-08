<?php

use Philo\Blade\Blade;

if (!function_exists('view')) {
    function view($filename, $params = []) {

        $views = BASE_URL . DS . 'resources' . DS . '/views';
        $cache = BASE_URL . DS . 'bootstrap' . DS . '/cache';

        $blade = new Blade($views, $cache);
        echo $blade->view()->make($filename, $params)->render();
    }
}