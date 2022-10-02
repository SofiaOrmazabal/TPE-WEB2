<?php
require_once('libs/Smarty.class.php');

class LoginView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Log In');   
        $this->smarty->assign('error', $error);      
        $this->smarty->display('templates/login.tpl');
    }

    function newAdmin(){
        $this->smarty->assign('titulo', 'Nuevo Administrador');   
        $this->smarty->display('templates/newAdmin.tpl');
    }

    function publicHome(){
        $this->smarty->display('templates/publicHome.tpl');  
    }
    function adminLogin(){
        header("Location: ".BASE_URL."adminHome");
    }
    function adminHome(){
        $this->smarty->display('templates/adminHome.tpl');  
    }
}
    