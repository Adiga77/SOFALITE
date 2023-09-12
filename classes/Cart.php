<?php
class Cart{

    // function to add to cart
    public function insertIntoCart($product_id,  $product_image, $product_name, $price){
        include "../config/db_connect.php";
        $sql = "INSERT INTO carts (product_id,  product_image, product_name, price, quantities) VALUES (?, ?, ?, ?, 1)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$product_id,  $product_image, $product_name, $price]);
        return $result;
    }

    // function to select from cart using product id
    public function selectAllFromCart(){
        include "config/db_connect.php";
        $sql = "SELECT * FROM carts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // function to delete from cart
    public function deleteFromCart($product_id){
        include "../config/db_connect.php";
        $sql = "DELETE FROM carts WHERE product_id=?";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$product_id]);
        return $result;
    }

    // function to get product by id
    public function getProductById($product_id){
        include "../config/db_connect.php";
        $sql = "SELECT * FROM products WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$product_id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;
     } 


    // function to increment quantities
    public function incrementquantities($product_id){
        include "../config/db_connect.php";
        $sql = "UPDATE carts SET quantities = quantities + 1 WHERE product_id=?";  
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$product_id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;

    }

    public function decrementquantities($product_id){
        include "../config/db_connect.php";
        $sql = "UPDATE carts SET quantities = quantities - 1 WHERE product_id=?";  
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$product_id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;

    }
    
}

?>