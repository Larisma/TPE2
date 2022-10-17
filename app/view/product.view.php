<?php

class ProductView
{

    private $smarty;

    function showProducts($products, $categories, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('products', $products);
        $smarty->assign('categories', $categories);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/productList.tpl');
    }

    function showProduct($product, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('product', $product);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/product.tpl');
    }

    function showProductsTheProducts($product, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('products', $product);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/category.tpl');
    }

    function editProduct($productEdit, $categories, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('productEdit', $productEdit);
        $smarty->assign('categories', $categories);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/editProduct.tpl');
    }

    function showError($msg)
    {
        echo "<h1> ERROR!!!!</h1>";
        echo "<h2> $msg </h2>";
    }
}
