<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/AuthHelper.php';
require_once './app/models/category.model.php';

class ProductController {
    private $model;
    private $view;
    private $authHelper;
    private $categoryModel;

    function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->authHelper = new AuthHelper();
        $this->categoryModel = new CategoryModel();
    }

    function showProducts() {
        $products = $this->model->getAllProducts();
        $this->view->showProducts($products);
    }
    function showProductsAdmin() {
        $this->authHelper->checkLoggedIn();
        $products = $this->model->getAllProducts();
        $this->view->showProductsAdmin($products);
    }

    function abmProducts() {
        $products = $this->model->getAllProducts();
        $this->view->abmProducts($products);
    }

    function detailProduct($id){
        
        $detail = $this->model->detailProduct($id);
        $category = $this->categoryModel->nameCategory($detail->id_category);
        $this->view->detailProduct($detail, $category);
    }
    
    function productsFromCategory($id){
        $detail = $this->model-> productsFromCategory($id);
        $this->view->productsFromCategory($detail);
    }
    
    function insertProduct() {
        $this->authHelper->checkLoggedIn();

        if(isset($_POST['description'])&&isset($_POST['price'])&&isset($_POST['size'])){
            $description = $_POST['description'];
            $price = $_POST['price'];
            $size = $_POST['size'];
            $id_category = $_POST['id_category'];
            $this->model->insertProduct($description, $price, $size, $id_category);
            header("Location: " . BASE_URL.'adminHome');
        }else{
            var_dump('Error: Falta ingresas datos'); 
            die();
        }
    }

    function deleteProduct($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProduct($id);
        header("Location: " . BASE_URL.'adminHome');
    }
    function formEditProduct($id) {
        $this->authHelper->checkLoggedIn();
        $detail = $this->model->detailProduct($id);
        $categories = $this->categoryModel->getAllCategories();
        $this->view->formEditProduct($detail, $categories);
    }
    function editProduct($id){
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['description'])&&isset($_POST['price'])&&isset($_POST['size'])){
            $description = $_POST['description'];
            $price = $_POST['price'];
            $size = $_POST['size'];
            $id_category = $_POST['id_category'];
            $this->model->editProduct($description, $price, $size, $id_category, $id);
            header("Location: " . BASE_URL.'adminHome');
        }else{
            var_dump('Error: Falta ingresas datos'); 
            die();
        }
        header("Location: " . BASE_URL.'adminHome');
    }
    
}
