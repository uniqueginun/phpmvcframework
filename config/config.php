<?php

/*
 * setup application constants and env functions
 */


$dotenv = \Dotenv\Dotenv::create(BASE_URL);
$dotenv->load();