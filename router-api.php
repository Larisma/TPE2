<?php
require_once 'libs/router.php';
require_once 'app/controllersApi/apiController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('productos', 'GET', 'apiController', 'getAll');
$router->addRoute('productos/:ID', 'GET', 'apiController', 'getById');

$router->addRoute('productos', 'POST', 'apiController', 'create');
$router->addRoute('productos/:ID', 'DELETE', 'apiController', 'delete');


$router->addRoute('productos/:ID', 'PUT', 'apiController', 'update');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
