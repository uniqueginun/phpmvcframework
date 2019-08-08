<?php

/*
 * setup application constants and env functions
 */


$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$dotenv = \Dotenv\Dotenv::create(BASE_URL);
$dotenv->load();