<?php
require_once "./app/models/user.model.php";
require_once "./app/views/login.view.php";
require_once './app/models/category.model.php';
require_once './app/helpers/AuthHelper.php';

class UserController {

    private $model;
    private $modelCategory;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new UserModel();
        $this->modelCategory = new CategoryModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }


    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Sesión finalizada");
    }

    function login(){
        $this->view->showLogin();
    }

    function verifyLogin(){
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $email = $_POST['user'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->password)) {
                session_start();
                $_SESSION["user"] = $email;

                $this->view->adminLogin();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function newAdmin(){
        $this->view->newAdmin();
        if (!empty($_POST['userNew']) && !empty($_POST['passwordNew'])) {
            $email = $_POST['userNew'];
            $password = password_hash($_POST['passwordNew'], PASSWORD_BCRYPT);
            $this->model->newAdmin($email, $password);
            $categories = $this->modelCategory->getAllCategories();
            $this->view->adminHome($categories);
            $this->view->adminLogin();
        }   
        }
    
    function publicHome() {
        $this->view->publicHome();
    }   
    
    function adminHome() {
        $this->authHelper->checkLoggedIn();
        $categories = $this->modelCategory->getAllCategories();
        $this->view->adminHome($categories);
    } 
    
    function adminLogin() {
        $this->view->adminLogin();
    } 
}