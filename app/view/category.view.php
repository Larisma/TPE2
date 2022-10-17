<?php

class CategoryView
{

    private $smarty;

    function showCategory($categories, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('categories', $categories);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/categoriesList.tpl');
    }

    function showProductsTheCategory($productTheCategory, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('products', $productTheCategory);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/category.tpl');
    }

    function insertCategory($categoria, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('categoria', $categoria);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/categoriesList.tpl');
    }

    function editCategory($categoryEdit, $admin)
    {
        $smarty = new Smarty();
        $smarty->assign('categoryEdit', $categoryEdit);
        $smarty->assign('admin', $admin);
        $smarty->display('templates/editCategory.tpl');
    }

    function showError($msg)
    {
        echo "<h1> ERROR!!!!</h1>";
        echo "<h2> $msg </h2>";
    }
}
