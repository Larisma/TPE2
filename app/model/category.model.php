<?php

class CategoryModel
{

    private $db;

    //Abre la coneccion a la base de datos;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_puntohome;chaset=utf8', 'root', '');
    }

    //Muestra en el Home las categorias
    public function showCategory()
    {
        //1. Como se repite se hace una funcion que abre la base de datos para no repetir codigo
        //2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        //3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); //arreglo de tareas 

        return $categorias;
    }

    public function showCategoryId($id)
    {

        //2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM categorias WHERE id_categoria =?');
        $query->execute([$id]);
        //3. Obtengo la respuesta con un fetch (porque es un solo registro)
        $categoria = $query->fetch(PDO::FETCH_OBJ);

        return $categoria;
    }

    public function showProductsTheCategory($id)
    {

        $query = $this->db->prepare('SELECT * FROM productos WHERE id_categoria = ?');
        $query->execute([$id]);

        $productTheCategory = $query->fetchAll(PDO::FETCH_OBJ);
        return $productTheCategory;
    }

    function editCategory($category, $id)
    {

        $query = $this->db->prepare('UPDATE categorias SET categoria =? WHERE id_categoria = ?');
        $query->execute([$category, $id]);
    }

    function insertCategory($categoria)
    {

        $query = $this->db->prepare("INSERT INTO `categorias`(`categoria`) VALUES (?)");
        $query->execute([$categoria]);

        return $this->db->lastInsertId();
    }

    function deleteCategory($id)
    {

        $query = $this->db->prepare("DELETE FROM `categorias` WHERE `categorias`.`id_categoria` = ?");
        $query->execute([$id]);
    }
}
