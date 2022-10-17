<?php

class AuthModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_puntohome;chaset=utf8', 'root', '');
    }

    public function getUser($email)
    {

        // obtengo al usuario de la base de datos
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
