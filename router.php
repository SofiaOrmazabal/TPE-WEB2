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
    case 'viewproduct': 
        $productsController->detailProduct($params[1]);
        break; 
    case 'viewcategory': 
        $productsController->productsFromCategory($params[1]);
        break;  
    case 'insertproduct': 
        $productsController->insertProduct();
        break;
    case 'insertcategory': 
        $categoryController->insertCategory();
        break;      
    case 'showProductsAdmin':
        $productsController->showProductsAdmin();
        break; 
    case 'showCategoriesAdmin':
        $categoryController->showCategoriesAdmin();
        break;    
    case 'delete':
        $id = $params[1];
        $productsController->deleteProduct($id);
        break;    
    case 'deleteCategory':
        $id = $params[1];
        $categoryController->deleteCategory($id);
        break;
    case 'editFormProduct':
        $id = $params[1];
        $productsController->formEditProduct($id);
        break;
    case 'editFormCategory':
        $id = $params[1];
        $categoryController->formEditCategory($id);
        break;
    case 'editProduct':
        $id = $params[1];
        $productsController->editProduct($id);
        break;
    case 'editCategory':
        $id = $params[1];
        $categoryController->editCategory($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
