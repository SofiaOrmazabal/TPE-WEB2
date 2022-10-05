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
    function detailProduct($detail) {        
        $this->smarty->assign('titulo', 'Detalle producto');        
        $this->smarty->assign('detail', $detail);
        $this->smarty->display('templates/detailProduct.tpl');
    }
    function productsFromCategory($detail) {        
        $this->smarty->assign('titulo', 'Detalle por Categoria');        
        $this->smarty->assign('detail', $detail);
        $this->smarty->display('templates/productsFromCategory.tpl');
    }
}