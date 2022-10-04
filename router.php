<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/user.controller.php';
require_once './app/controllers/category.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$productsController = new ProductController();
$loginController = new UserController();
$categoryController = new CategoryController();

switch ($params[0]) {
    case 'login':
        $loginController->login();
        break;
    case 'logout':
        $loginController->logout();
         break;
    case 'newAdmin':
        $loginController->newAdmin();
        break;  
    case 'verify': 
        $loginController->verifyLogin();
        break; 
      
    case 'adminHome': 
        $loginController->adminHome();
        break;     
    case 'publicHome': 
        $loginController->publicHome();
        break;     
    case 'showProducts': 
        $productsController->showProducts();
        break; 
    case 'showCategories': 
        $categoryController->showCategories();
        break;       

    // case 'delete':
    //     $id = $params[1];
    //     $taskController->deleteTask($id);
    //     break;
    // default:
    //     echo('404 Page not found');
    //     break;
}
