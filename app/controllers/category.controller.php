<?php


include_once 'app/model/product.model.php';
include_once 'app/model/category.model.php';
include_once 'app/view/category.view.php';
include_once 'app/helper/auth.helper.php';



class CategoryController
{

    private $viewCategory;
    private $modelCategory;
    private $authHelper;

    public function __construct()
    {

        $this->modelProduct = new ProductModel();
        $this->viewCategory = new CategoryView();
        $this->modelCategory = new CategoryModel();
        $this->authHelper = new AuthHelper();
    }

    //funciones de CATEGORIA

    function showCategories()
    {

        $admin = $this->authHelper->isLoggedIn();
        //obtiene las tareas del modelo
        $categorias = $this->modelCategory->showCategory();
        //actualizo la vista
        $this->viewCategory->showCategory($categorias, $admin);
    }

    function showProductsTheCategory($id)
    {

        $admin = $this->authHelper->isLoggedIn();

        if (!isset($category)) {
            $category = $this->modelCategory->showProductsTheCategory($id);
            $this->viewCategory->showProductsTheCategory($category, $admin);
        } else {
            $this->viewCategory->showError('No es categoria');
        }
    }

    function createCategory()
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $categoria = $_POST['categoria'];

        $id = $this->modelCategory->insertCategory($categoria);
        //$this->viewProduct->showProductsTheCategory();
        header('Location: ' . BASE_URL . 'showHome');
    }
    //Eliminar Categoria
    public function deleteCategory($id)
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $this->modelCategory->deleteCategory($id);
        header("Location: " . BASE_URL);
    }

    function showEditCategory($id)
    {

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $categoryEdit = $this->modelCategory->showCategoryId($id);
        $this->viewCategory->editCategory($categoryEdit, $admin);
    }
    function editCategory($id)
    {
        // TODO: validar entrada de datos

        $admin = $this->authHelper->isLoggedIn();
        $this->authHelper->checkLoggedIn();
        $category = $_POST['categoria'];

        $this->modelCategory->editCategory($category, $id);
        header("Location: " . BASE_URL . 'showHome');
    }
}
