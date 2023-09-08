<?php 
class Product{

    // function to get all products from  products table  in sofalite database
   public function getAllProducts(){
        include "config/db_connect.php";
        $sql = "SELECT * FROM products";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        /* the products is been stored in the products variable($products) 
        in an Associative array form and it's been returned */
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
   }

    //  function to get product by id
    public function getProductById($product_id){
        include "config/db_connect.php";
        $sql = "SELECT * FROM products WHERE id=?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$product_id]);
        $product = $statement->fetch(PDO::FETCH_ASSOC);
        return $product;
     } 

}

?>