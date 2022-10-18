<?php

class ProductModel
{

    private $db;

    //Abre la coneccion a la base de datos;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_puntohome;chaset=utf8', 'root', '');
    }

    //Devuelve todas las tareas de la base se datos.

    function showProducts()
    {

        //2. Enviar la consulta (prepare y execute)
        $query = $this->db->prepare("SELECT productos.* , categorias.categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id_categoria");
        //$query = $this->db->prepare('SELECT * FROM productos');
        $query->execute();
        //3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $productos = $query->fetchAll(PDO::FETCH_OBJ); //arreglo de tareas 

        return $productos;
    }

    function showProduct($id)
    {

        //2. Enviar la consulta (prepare y execute)
        $query = $this->db->prepare("SELECT productos.* , categorias.categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id_categoria WHERE productos.id = ?");
        $query->execute([$id]);
        //3. Obtengo la respuesta con un fetch (porque es uno)
        $product = $query->fetch(PDO::FETCH_OBJ);

        return $product;
    }

    // Inserta una tarea en la base de datos.
    function insertProduct($name, $category, $material, $color, $detaile, $foto, $price)
    {

        // 2- Enviar la consulta (prepare y exec)'
        $query = $this->db->prepare("INSERT INTO `productos` ( `nombre`,`id_categoria`, `material`, `color`, `descripcion`, `foto`, `precio`) VALUES (?,?,?,?,?,?,?)");
        $query->execute([$name, $category, $material, $color, $detaile, $foto, $price]);
        // 3- Obtengo y devuelvo el ID de la tarea nueva
        return $this->db->lastInsertId();
    }

    function editProduct($name, $id_category, $material, $color,  $detaile, $foto, $price, $id)
    {

        $query = $this->db->prepare('UPDATE productos SET nombre =?, id_categoria =?, material =?, color =?, descripcion =?, foto =?, precio=? WHERE id = ?');
        $query->execute([ $name, $id_category, $material, $color,  $detaile, $foto, $price, $id]);
    }

    function deleteProduct($id)
    {

        $query = $this->db->prepare('DELETE FROM `productos` WHERE `productos`.`id` = ?');
        $query->execute([$id]);
    }
}
