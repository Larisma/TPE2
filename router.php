<?php

require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
require_once 'app/controllers/product.controller.php';
require_once 'app/controllers/category.controller.php';
require_once 'app/controllers/auth.controller.php';



//defino la base url para la construccion de links semanticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
// leemos la accion que viene por parametro
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'showHome'; //accion por defecto si no envian
}

// parsea la accion Ej: dev/juan --> ['dev', juan] (ejemplo del video)
$params = explode('/', $action);
//Instancio el unico controlador que tengo ahora
$controller = new ProductController();
// $authController = new AuthController(); //Lo puse en cada una porque me saltaban errores asi
// $controllerCategory = new CategoryController();

// tabla de ruteo
// determina que camino seguir según la acción
switch ($params[0]) {
        //Login
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
        //Categoria
    case 'showHome':
        $controllerCategory = new CategoryController();
        $controllerCategory->showCategories();
        break;
    case 'category':
        $controllerCategory = new CategoryController();
        $controllerCategory->showProductsTheCategory($params[1]);
        break;
    case 'categories':
        $controllerCategory = new CategoryController();
        $controllerCategory->showCategories();
        break;
    case 'createCategory':
        $controllerCategory->createCategory();
        break;
    case 'edits':
        $controllerCategory = new CategoryController();
        $id = $params[1];
        $controllerCategory->showEditCategory($id);
        break;
    case 'editCategory':
        $controllerCategory = new CategoryController();
        $id = $params[1];
        $controllerCategory->editCategory($id);
        break;
    case 'deleteCategory':
        $controllerCategory = new CategoryController();
        $controllerCategory->deleteCategory($params[1]);
        break;
        //Producto
    case 'showproducto':
        $controller->showProducts();
        break;
    case 'showProduct':
        $controller->showProduct($params[1]);
        break;
    case 'insert':
        $controller->createProduct();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $controller->deleteProduct($params[1]);
        break;
    case 'edit':
        $id = $params[1];
        $controller->showEditProducts($id);
        break;
    case 'editProduct':
        $id = $params[1];
        $controller->editProduct($id);
        break;
    default:
        echo ('No te asustes este error lo generas vos 404 Page not found');
        break;
}
