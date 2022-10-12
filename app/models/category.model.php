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

    function nameCategory($id_category) {
        
        $query = $this->db->prepare("SELECT name FROM category WHERE id_category=?");
        $query->execute(array($id_category));
        $nameCategory = $query->fetch(PDO::FETCH_OBJ);
        return $nameCategory;
    }
    function insertCategory($description) {
        $query = $this->db->prepare("INSERT INTO category (description) VALUES (?)");
        $params = array($description);
        $query->execute($params);
        return $this->db->lastInsertId();
    }
    function deleteCategory($id_category) {
        $query = $this->db->prepare('DELETE FROM category WHERE id_category = ?');
        $query->execute([$id_category]);
    }
    function editCategory($description, $id_category) {
        $query = $this->db->prepare('UPDATE category SET description = ? WHERE id_category = ?');
        $params = array($description, $id_category);
        $query->execute($params);
    }
    

}


