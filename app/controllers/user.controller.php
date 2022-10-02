<?php
require_once "./app/models/user.model.php";
require_once "./app/views/login.view.php";

class UserController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
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
                $this->view->adminLogin();//me tiene que redirigir a la parte que el admin puede editar
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
            $this->view->adminHome();
        }   
        }
    
    function publicHome() {
        $this->view->publicHome();
    }   
    
    function adminHome() {
        $this->view->adminHome();
    } 
    
    function adminLogin() {
        $this->view->adminLogin();
    } 
}