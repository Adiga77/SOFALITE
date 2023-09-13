<?php
include "../classes/Order.php";
include "../classes/Cart.php";
$ordersInstance = new Order();
$orders = $ordersInstance->orders();
$cartInstance = new Cart();
$result = $cartInstance->deleteCart();

if($orders){
    header('location:../orders.php');
}


?>