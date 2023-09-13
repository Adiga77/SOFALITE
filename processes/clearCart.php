<?php
include "../classes/Cart.php";
$cartInstance = new Cart();
$result = $cartInstance->deleteCart();
header('location:../cart.php');

?>