<?php

class AuthHelper
{

    
    // Verifica que el user este logueado y si no lo está lo redirige al login
    // cada vez que quiero acceder a $_session arriba tengo que poner session_start();
    //  SE HACE sesion_star para iniciar la consulta de la variable $_session
     

    public function checkLoggedIn()
    {

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }
    }

    public function isLoggedIn()
    {

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION['IS_LOGGED'])) {
            return false;
        } else {
            return true;
        }
    }
}
