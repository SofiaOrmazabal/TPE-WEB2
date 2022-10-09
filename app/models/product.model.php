<?php

class ProductModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_tiendaropa;charset=utf8', 'root', '');
    }

    function getAllProducts() {
        
        $query = $this->db->prepare("SELECT * FROM product");
        $query->execute();

        $product = $query->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    function detailProduct($id) {
        
        $query = $this->db->prepare( "SELECT * FROM product WHERE id_product=?" );
        $query->execute(array($id));
        $detailProduct = $query->fetch(PDO::FETCH_OBJ);
        return $detailProduct;
    }

    function productsFromCategory($id){
        $query = $this->db->prepare( "SELECT * FROM product WHERE id_category=?");
        $query->execute(array($id));
        $productsFromCategory = $query->fetchAll(PDO::FETCH_OBJ);
        return $productsFromCategory;
    }
    
    function insertProduct($description, $price, $size, $id_category) {
        $query = $this->db->prepare("INSERT INTO product (description, price, size, id_category) VALUES (?, ?, ?, ?)");
        $params = array($description, $price, $size, $id_category);
        $query->execute($params);
        return $this->db->lastInsertId();
    }

    function deleteProduct($id_category) {
        $query = $this->db->prepare('DELETE FROM product WHERE id_product = ?');
        $query->execute([$id_category]);
    }
    function editProduct($description, $price, $size, $id_category, $id_product) {
        $query = $this->db->prepare('UPDATE product SET description = ?, price = ?, size = ?, id_category = ? WHERE id_product = ?');
        $params = array($description, $price, $size, $id_category, $id_product);
        $query->execute($params);
    }

}
