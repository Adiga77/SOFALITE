<?php
session_start();
if(isset($_GET['id'])){
    include "../classes/Cart.php";

    // instance of Cart
    $cartInstance = new Cart();

    // we used the get superglobal variable to get the id we appended to the url
    $product_id = $_GET['id'];
    $_SESSION['product_id'] = $product_id;

    
    $cartProducts = $cartInstance->getCartItemById($product_id);
    $cartProductId = $cartProducts['product_id'];

    //the function is used to to add in the cart
    $product = $cartInstance->getProductById($product_id);
    $product_image = $product['product_image'];
    $product_name = $product['product_name'];
    $price = $product['product_price'];
    
    // the code below is used to prevent existing product to be added to cart  instead you increment the value in the cart page
    if($cartProductId === $product_id){
        $_SESSION['exist'] = "product already exist in cart";
        header('location:../products.php');
    }else
    
    {
        $cartInstance->insertIntoCart($product_id,  $product_image, $product_name, $price);
        $_SESSION['success'] = "successfully added to cart";
        header('location:../products.php');
    }
    
    
    
   
 } 



?>