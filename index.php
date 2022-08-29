<?php
require_once('autoload.php');

$router = new Router();

$router->get('/', 'ProductController::list');
$router->post('/create', 'ProductController::create');
$router->post('/delete', 'ProductController::remove');

$router->authenticateRoutes();


