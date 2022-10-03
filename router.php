<?php

require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
require_once 'app/controllers/product.controller.php';
//require_once 'section.php';


//defino la base url para la construccion de links semanticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// leemos la accion que viene por parametro

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action='show'; //accion por defecto si no envian
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);
$controller = new ProductController();


// tabla de ruteo
switch ($params[0]) {
    case 'show':
        
        $controller -> showProducts();
        break;
    case 'add':
        
        $controller -> addProduts();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        
        $id = $params[1];
        $controller -> deleteProduct($id);
        break;
    default:
        echo('No te asustes este error lo generas vos 404 Page not found');
        break;
}


