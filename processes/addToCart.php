<?php
if(isset($_GET['id'])){
    include "../classes/Cart.php";

    // instance of Cart
    $cartInstance = new Cart();

    // we used the get superglobal variable to get the id we appended to the url
    $product_id = $_GET['id'];

    $product = $cartInstance->getProductById($product_id);
    $product_image = $product['product_image'];
    $product_name = $product['product_name'];
    $price = $product['product_price'];
    $result = $cartInstance->insertIntoCart($product_id,  $product_image, $product_name, $price);
    
    if($result){
        header('location:../products.php?msg=Added Successfully');
    }

    
    
   
 } 



?>