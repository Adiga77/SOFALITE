<?php
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
if(isset($_GET['id'])){
    include "classes/Product.php";
    $product_id = $_GET['id'];
    

    // creating an instance of Product class
    $productInstance = new Product();
    $product =  $productInstance->getProductById($product_id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>product</title>
<body>
    <?php include "components/navbar.php" ;?>
    <div class=" container mt-5">
        <!-- header -->
        <h4>PRODUCT:</h4><p class="lead"><?php echo $product['product_name']; ?></p>
        <hr>
    </div>

    <?php include "components/productCard.php"; ?>
    
    <script src="assets/bootstrap5//bootstrap.bundle.js"></script>
    <script src="assets/js/custom2.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>