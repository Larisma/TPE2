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
        $admin = $this->authHelper->isLoggedIn();
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
        if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png")
        $destino= 'uploads/'. uniqid() . basename($_FILES['foto']['name']);
       

        if (move_uploaded_file($_FILES['foto']['tmp_name'],$destino)){
        $name = $_POST['nombre'];
        $category = $_POST['id_categoria'];
        $material = $_POST['material'];
        $color = $_POST['color'];
        $detaile = $_POST['descripcion'];
        $foto = $destino;
        $price = $_POST['precio'];

        }
            
        $id = $this->modelProduct->insertProduct($name, $category, $material, $color, $detaile, $foto, $price);
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
        
        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();

        if (!empty($_FILES) && 
                            ($_FILES['foto']['type'] == "image/jpeg" || 
                            $_FILES['foto']['type'] == "image/jpg" || 
                            $_FILES['foto']['type'] == "image/png" || 
                            $_FILES['foto']['type'] == "image/gif")){
                            $destino= 'uploads/'. uniqid() . basename($_FILES['foto']['name']);
                            move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
                            $foto = $destino;
                            }
                            else{ $foto= $_POST['fotoAnterior'];
                            }
        $name = $_POST['nombre'];
        $id_category = $_POST['id_categoria'];
        $material = $_POST['material'];
        $color = $_POST['color'];
        $detaile = $_POST['descripcion'];
        
        $price = $_POST['precio'];
        
        $id = $this->modelProduct->editProduct($name, $id_category, $material, $color, $detaile, $foto, $price, $id);
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
