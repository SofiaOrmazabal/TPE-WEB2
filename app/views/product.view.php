<?php
require_once('libs/Smarty.class.php');

class ProductView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products) {        
        $this->smarty->assign('titulo', 'Lista de productos');        
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/showProducts.tpl');
    }
}