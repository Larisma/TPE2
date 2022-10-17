<?php


include_once 'app/model/product.model.php';
include_once 'app/view/product.view.php';
include_once 'app/model/category.model.php';
include_once 'app/helper/auth.helper.php';



class ProductController
{

    private $modelProduct;
    private $viewProduct;
    private $modelCategory;
    private $authHelper;


    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->viewProduct = new ProductView();
        $this->modelCategory = new CategoryModel();
        $this->authHelper = new AuthHelper();
    }

    //imprime la tabla de productos
    public function showProducts()
    {
        $admin = $this->authHelper->isLoggedIn();;
        //obtiene las tareas del modelo
        $products = $this->modelProduct->showProducts();
        $categories = $this->modelCategory->showCategory();
        //actualizo la vista
        $this->viewProduct->showProducts($products, $categories, $admin);
    }

    public function showProduct($id)
    {

        $admin = $this->authHelper->isLoggedIn();
        $product = $this->modelProduct->showProduct($id);
        $this->viewProduct->showProduct($product, $admin);
    }

    // agregar
    function createProduct()
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        // TODO: validar entrada de datos
        // $products = $this->model->addProduct();
        // $this->view->addProduct();

        $destino = null;
        if (isset($_FILES['img'])) {
            $uploads = getcwd() . "/uploads/";
            $destino = tempnam($uploads, $_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $destino);
            $destino = basename($destino);
        }

        $name = $_POST['nombre'];
        $category = $_POST['id_categoria'];
        $material = $_POST['material'];
        $color = $_POST['color'];
        $detaile = $_POST['descripcion'];
        $photo = $_POST['foto'];
        $price = $_POST['precio'];

        $id = $this->modelProduct->insertProduct($name, $category, $material, $color, $detaile, $photo, $price);
        //redirigo al listando
        header('Location: ' . BASE_URL . 'showproducto');
    }

    //editar
    function showEditProducts($id)
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $productEdit = $this->modelProduct->showProduct($id);
        $categories = $this->modelCategory->showCategory();
        $this->viewProduct->editProduct($productEdit, $categories, $admin);
    }

    function editProduct($id)
    {
        $destino = null;
        if (isset($_FILES['img'])) {
            $uploads = getcwd() . "/uploads/";
            $destino = tempnam($uploads, $_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $destino);
            $destino = basename($destino);
        }
        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        // TODO: validar entrada de datos
        $name = $_POST['nombre'];
        $id_category = $_POST['id_categoria'];
        $material = $_POST['material'];
        $color = $_POST['color'];
        //$photo = $_POST['foto'];
        $detaile = $_POST['descripcion'];
        $price = $_POST['precio'];

        $id = $this->modelProduct->editProduct($name, $id_category, $material, $color, $detaile, $destino, $price, $id);
        header("Location: " . BASE_URL . 'showproducto');
    }

    //eliminar
    function deleteProduct($id)
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $this->modelProduct->deleteProduct($id);
        header("Location: " . BASE_URL . 'showproducto');
    }
}
