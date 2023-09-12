<?php 
if(isset($_GET['id'])){
    include "../classes/Cart.php";
    $product_id = $_GET['id'];
    $cartInstance = new Cart();
    $delete = $cartInstance-> deleteFromCart($product_id);
    if($delete){
        header('location:../cart.php');
    }
}

?>