<?php
require_once('libs/Smarty.class.php');

class CategoryView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showCategories($categories) {        
        $this->smarty->assign('titulo', 'Lista de categorias');        
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/showCategories.tpl');
    }
    function showCategoriesAdmin($categories) {        
        $this->smarty->assign('titulo', 'Lista de categorias');        
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/showCategoriesAdmin.tpl');
    }    
    function formEditCategory($detailCategory) {        
        $this->smarty->assign('titulo', 'Editar categoria');        
        $this->smarty->assign('detailCategory', $detailCategory);
        $this->smarty->display('templates/formEditCategory.tpl');
    }

}