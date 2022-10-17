<?php

require_once 'app/model/auth.model.php';
require_once 'app/view/auth.view.php';
require_once 'app/model/product.model.php';
require_once 'app/model/category.model.php';



class AuthController
{

    private $view;
    private $model;
    private $authHelper;
    private $viewProduct;
    private $viewCategory;
    private $modelCategory;

    public function __construct()
    {
        $this->model = new AuthModel();
        $this->view = new AuthView();
        $this->viewProduct = new ProductView();
        $this->viewCategory = new CategoryView();
        $this->modelCategory = new CategoryModel();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin()
    {
        $admin = $this->authHelper->isLoggedIn();
        $this->view->showLogin($admin);
    }

    public function validateUser()
    {
        // agarro los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // busco el usuario por email
        $user = $this->model->getUser($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->password)) {
            // inicio una sesion para este usuario
            session_start();
            // guarda los datos de la session (estado)
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true; //si es true esta logueado

            // si la contraseña es correcta entra a la home
            $categories = $this->modelCategory->showCategory();
            $this->viewCategory->showCategory($categories, $_SESSION['IS_LOGGED']);
        } else {
            
            // si los datos son incorrectos muestro el form con un errorque va por parametro
            $admin = false;
            $this->view->showLogin($admin, "El usuario o la contraseña no existe.");
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
