<?php

class ProductModel {
    
    private $db;
    /**
     * *Abre la coneccion a la base de datos;
     */

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_puntohome;chaset=utf8' , 'root', '');
        }
    

    /**
    *Devuelve todas las tareas de la base se datos.
    */
    function showProducts() {
       
        //2. Enviar la consulta (2 sub-pasos: prepare y execute)
        $query = $this->db->prepare('SELECT * FROM productos');
        $query->execute();

        //3. Obtengo la respuesta con un fetchAll (porque son muchos)
        $productos = $query->fetchAll(PDO::FETCH_OBJ); //arreglo de tareas 

        return $productos;
    }

    // Inserta una tarea en la base de datos.
    
   function addProduct ($name, $category, $material, $color, $price) {
       // 1-Abro la conexion
       $db = $this->conect();

       // 2- Enviar la consulta (2sub-pasos prepare y exec)
       $query = $db->prepare("INSERT INTO producto (nombre, categoria, material, color, precio) VALUES (?, ?, ?, ?, ?)");
       $query->execute([$name, $category, $material, $color, $price]);
       
       // 3- Obtengo y devuelvo el ID de la tarea nueva
       return $db->lastInsertId();
   }

   function removeProduct($id) {
    $db = this->connect();

    $query = $db->prepare('DELETE FROM productos WHERE id =?');
    $query->execute([$id]);
   }
   
   

}