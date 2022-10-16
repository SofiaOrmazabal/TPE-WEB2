<?php
require_once './app/models/category.model.php';
require_once './app/views/category.view.php';
require_once './app/helpers/AuthHelper.php';

class CategoryController {
    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->authHelper = new AuthHelper();
    }
    function showCategories() {
        $categories = $this->model->getAllCategories();
        $this->view->showCategories($categories);
    }
    function insertCategory() {
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['description'])){
            $description = $_POST['description'];
            $this->model->insertCategory($description);
            header("Location: " . BASE_URL.'adminHome');
        }else{
            var_dump('Error: Falta ingresar datos'); 
            die();
        }
    }    
    function showCategoriesAdmin() {
        $this->authHelper->checkLoggedIn();
        $categories = $this->model->getAllCategories();
        $this->view->showCategoriesAdmin($categories);
    } 
    function deleteCategory($id) {
        $this->authHelper->checkLoggedIn();
        try{
            $this->model->deleteCategory($id);
            header("Location: " . BASE_URL.'showCategoriesAdmin');
        }
        catch (Exception $e){
            $this->view->showCategoriesAdmin(var_dump($e));
            header("Location: " . BASE_URL.'showCategoriesAdmin');
        }
        
    }
    function formEditCategory($id) {
        $this->authHelper->checkLoggedIn();
        $detailCategory = $this->model->idCategory($id);
        $this->view->formEditCategory($detailCategory);
    }
    function editCategory($id_category){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['description'])){
            $description = $_POST['description'];
            $this->model->editCategory($description, $id_category);
            header("Location: " . BASE_URL.'adminHome');
        }else{
            var_dump('Error: Falta ingresas datos'); 
            die();
        }
        header("Location: " . BASE_URL.'adminHome');
    }
} 