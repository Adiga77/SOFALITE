<?php
class Order{
    // function to insert into orders
    public function orders(){
        include "../config/db_connect.php";
        $sql = "INSERT INTO orders (product_id, product_image, product_name, price, quantities) SELECT product_id, product_image, product_name, price, quantities FROM carts";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        return $result;

    }

      // function to select all orders 
      public function allOrders(){
        include "config/db_connect.php";
        $sql = "SELECT * FROM orders";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteOrders(){
        include '../config/db_connect.php';
        $sql = "DELETE * FROM orders";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        return $result;
    }

    // function for cart totals
    public function getOrdersTotal(){
        include "config/db_connect.php";
        $sql = "SELECT SUM(quantities * price) FROM orders";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>