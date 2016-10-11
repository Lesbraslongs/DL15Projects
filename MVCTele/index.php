<?php
require_once('src/autoload.php');

use Controller\Router;

define('VIEWPATH', __DIR__.'\\SRC\\'.'VIEW\\');

$router = new Router();
$router->routeRequest();