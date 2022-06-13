<?php
require_once './vendor/autoload.php';
//$controller = new \App\Controllers\BaseController();
//$controller->hello();

use App\Router;

$router = new Router();
$router->getRoute();


