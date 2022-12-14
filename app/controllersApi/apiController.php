<?php


include_once 'app/model/product.model.php';
include_once 'app/view/api.view.php';
include_once 'app/model/category.model.php';


class ApiController
{

    private $modelProduct;
    private $viewApi;


    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->viewApi = new ApiView();
        $this->modelCategory = new CategoryModel();
        $this->data = file_get_contents("php://input");
    }


    public function getAll($params = null)
    {

        try {
            //Para ordenar
            $orderBy = $_GET['orderBy'] ?? null;
            $sort = $_GET['sort'] ?? null;
            //Para paginar
            $startAt = $_GET['startAt'] ?? null;
            $endAt = $_GET['endAt'] ?? null;

            /*=====================================
            Peticiones GET sin filtro
            ===================================*/

            //Sin ordenar y limitar datos
            if (($orderBy == null) && ($sort == null) && ($startAt == null) && ($endAt == null)) {

                $producto = $this->modelProduct->showProducts();
                $this->viewApi->response($producto, 200);
            }


            //Ordenar datos sin limite
            else if (($orderBy != null) && ($sort != null) && ($startAt == null) && ($endAt == null)) {

                $producto = $this->modelProduct->showOrderBy($orderBy, $sort);
                $this->viewApi->response($producto, 200);
            }


            //Ordenar y limitar datos
            else if (($orderBy != null) && ($sort != null) && ($startAt != null) && ($endAt != null)) {

                $producto = $this->modelProduct->showOrderAndPag($orderBy, $sort, $startAt, $endAt);
                $this->viewApi->response($producto, 200);
            }


            //Limitar datos sin ordenar
            else if (($orderBy == null) && ($sort == null) && ($startAt != null) && ($endAt != null)) {

                $producto = $this->modelProduct->showLimit($startAt, $endAt);
                $this->viewApi->response($producto, 200);
            } else {
                $this->viewApi->response("Sin contenido", 204);
            }
        } catch (\Throwable $th) {
            return $this->viewApi->response($th, 500);
        }
    }


    function getById($params = null)
    {
        try {

            if ($params != null) {
                $id = $params[":ID"];
                $producto = $this->modelProduct->showProduct($params[":ID"]);
            }

            if ($producto) {
                $this->viewApi->response($producto, 200);
            } else {
                $this->viewApi->response("El producto con el id= {$id} no existe", 404);
            }
        } catch (\Throwable $th) {
            return $this->viewApi->response($th, 500);
        }
    }


    function delete($params = null)
    {
        try {

            $id = $params[':ID'];
            $producto = $this->modelProduct->showProduct($id);
            if ($producto) {
                $this->modelProduct->deleteProduct($id);
                $this->viewApi->response("El producto fue borrada con exito.", 200);
            } else {
                $this->viewApi->response("{El producto con el id= {$id} no existe}", 404);
            }
        } catch (\Throwable $th) {
            return $this->viewApi->response($th, 500);
        }
    }


    function getData()
    {
        return json_decode($this->data);
    }


    function create($params = null)
    {
        try {

            $producto = $this->getData();

            $id = $this->modelProduct->insertProduct($producto->nombre, $producto->id_categoria, $producto->material, $producto->color, $producto->descripcion, $producto->foto, $producto->precio);
            $producto = $this->modelProduct->showProduct($id);

            if ($producto) {

                $this->viewApi->response($producto, 200);
            } else {
                $this->viewApi->response("El producto no fue creado", 500);
            }
        } catch (\Throwable $th) {
            return $this->viewApi->response($th, 500);
        }
    }
}