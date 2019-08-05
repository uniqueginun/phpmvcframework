<?php
require_once BASE_URL . DS . "vendor" . DS . "autoload.php";
if (!session_start()) session_start();

require_once BASE_URL . DS . "config" . DS . "config.php";
require_once BASE_URL . DS . "routes" . DS . "web.php";

use App\Core\Router;
Router::to($router);