<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';

class ProductController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    public function showProducts() {
        $products = $this->model->getAllProducts();
        $this->view->showProducts($products);
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
