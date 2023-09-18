<?php
include "../classes/Order.php";
include "../classes/Cart.php";
include "../classes/Users.php";

if(isset($_POST['submit'])){
    $ordersInstance = new Order();
    $cartInstance = new Cart();
    $userInstance = new Users();

    $name = $_POST['name'];
    $address = $_POST['address'];

    if(empty($name || $address)){
        header('location:../cart.php?error');
        exit();
    }
  
    $userInstance->insertIntoUsers($name, $address);
    $orders = $ordersInstance->orders();
    // $userInstance->deleteUsers();
    $result = $cartInstance->deleteCart();
    header('location:../orders.php');
}

?>