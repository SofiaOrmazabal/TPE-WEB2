<?php

class ProductModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bd_tiendaropa;charset=utf8', 'root', '');
    }

    public function getAllProducts() {
        
        $query = $this->db->prepare("SELECT * FROM product");
        $query->execute();

        $product = $query->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    // public function insertTask($description, $price, $size, $id_category) {
    //     $query = $this->db->prepare("INSERT INTO task (descripcion, price, size, id_category) VALUES (?, ?, ?, ?)");
    //     $query->execute([$description, $price, $size, $id_category]);

    //     return $this->db->lastInsertId();
    // }

    // function deleteTaskById($id) {
    //     $query = $this->db->prepare('DELETE FROM product WHERE id = ?');
    //     $query->execute([$id]);
    // }

}
