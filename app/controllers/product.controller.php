<?php

include_once 'app/model/product.model.php';
include_once 'app/view/product.view.php';

    
class ProductController{

    private $model;
    private $view;

    function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    /**
     * imprime la lista de tareas
     */

     function showProducts() {

        //obtiene las tareas del modelo
        $products = $this->model->showProducts();
    
        //actualizo la vista
        $this->view->showProducts($products);
        /**
        *echo '<ul class="list-group">';
        *foreach ($productos as $producto) {
      */
    }

    // agregar
    function addProduct() {
        // TODO: validar entrada de datos
    
        $name = $_POST['nombre'];
        $category = $_POST['categoria'];
        $material = $_POST['material'];
        $color = $_POST['color'];
        $price= $_POST['precio'];
        
        //verifico campos obligatorios
        if (empty($name) || empty ($category)) {
            $this->view->showError('Faltan datos obligatorios');
            die();
        }

        //inserto la tarea en la DB
        $id = $this->model->addProduct($name, $category, $material, $color, $price);
        
        //redirigo al listando
        header("Location: " . BASE_URL); 
    }
    
    //eliminar
    function deleteProduct($id) {
        $this->model->deleteProduct($id);
        header("Location: " . BASE_URL); 
    }





}