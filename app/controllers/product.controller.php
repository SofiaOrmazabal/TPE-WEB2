<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';

class ProductController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    function showProducts() {
        $products = $this->model->getAllProducts();
        $this->view->showProducts($products);
    }

    function detailProduct($id){
        $detail = $this->model->detailProduct($id);
        $this->view->detailProduct($detail);
    }
    function productsFromCategory($id){
        $detail = $this->model-> productsFromCategory($id);
        $this->view->productsFromCategory($detail);
    }
    





    // public function showTasks() {
    //     $tareas = $this->model->getAllTasks();
    //     $this->view->showTasks($tareas);
    // }

    
    // function addTask() {
    //     // TODO: validar entrada de datos

    //     $title = $_POST['title'];
    //     $description = $_POST['description'];
    //     $priority = $_POST['priority'];

    //     $id = $this->model->insertTask($title, $description, $priority);

    //     header("Location: " . BASE_URL); 
    // }
   
    // function deleteTask($id) {
    //     $this->model->deleteTaskById($id);
    //     header("Location: " . BASE_URL);
    // }

}
