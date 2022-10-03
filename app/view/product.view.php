<?php 

class ProductView {

    
    function showProducts($products) {
        $smarty = new Smarty;
        $smarty->assign('products',$products);
        $smarty->display('templates/header.tpl');
        $smarty->display('templates/productList.tpl');
        $smarty->display('templates/footer.tpl');
     
        
        //$products = getProducts();
    
        
        
       /*echo '<ul class="list-group">';
        foreach ($products as $product) {
           echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>$product->titulo</b> - $product->descripcion (prioridad $product->prioridad) </span>
                    <a href='delete/$product->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
                </li>";
        }
        echo "</ul>";
        */
        
    }

    function showError($msg) {
        echo "<h1> ERROR!!!!</h1>";
        echo "<h2> $msg </h2>";
    }
}