<?php

class CategoryModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_tiendaropa;charset=utf8', 'root', '');
    }
    
    function getAllCategories() {
        
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

//     $query = $db->prepare('SELECT * FROM Products WHERE Product = ?');
//    $query->execute([$transaction->Product]);
//    $product = $query->fetch(PDO::FETCH_OBJ);
//    echo '<li>' . $transaction->Channel . ', ' . $transaction->Product 
//    . ', ' . $transaction->Price . ', ' . $product->Material . ', ' . 
//    $product->Medium . '</li>';

}


