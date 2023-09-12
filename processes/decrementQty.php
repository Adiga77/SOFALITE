<?php
if(isset($_GET['id'])){
    $product_id = $_GET['id'];
    include "../classes/Cart.php";
    $cartInstance = new Cart();
    
    if($cartInstance){
        $cartInstance->decrementquantities($product_id);
        header('location: ../cart.php');
    }

}

?>