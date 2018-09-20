<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/19/18
 * Time: 10:12 PM
 */

require '../database/database.php';

class Category
{
    protected $sql;
    protected $conn;

    public function __construct()
    {
        $database = new  Database();
        $this->conn = $database->connect('root', 'root', 'applibary');
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM category";
        $query = $this->conn->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function addCategories($categoryName)
    {
        $sql = "INSERT INTO category (name) VALUES ('$categoryName')";
        $query = $this->conn->query($sql);
        return $query;

    }

    public function delete($id)
    {
        $sql = " DELETE FROM category WHERE idcategory = $id ";
        $this->conn->exec($sql);
    }


    public function update($id ,$name){



        $sql = "UPDATE category SET name='$name' WHERE idcategory = $id ";
        $this->conn->exec($sql);

    }
}


