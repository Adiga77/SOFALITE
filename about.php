<?php
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="assets/bootstrap5//bootstrap.min.css">
    <title>About page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
<!-- header section with navigations -->
    <?php include "components/navbar.php"; ?>

    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
</body>
</html>
