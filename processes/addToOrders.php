<?php
include "../classes/Order.php";
include "../classes/Cart.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $ordersInstance = new Order();
    $cartInstance = new Cart();
    $orders = $ordersInstance->orders();
    $result = $cartInstance->deleteCart();
    header('location:../orders.php');
}

?>