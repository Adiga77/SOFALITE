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

    <!-- start of container -->
    <div class="container product_data mt-5 bg-light py-5 mb-5">

        <div class="row"><!-- start of row -->
            <div class="col-md-4"> <!-- column that is holding product image for the dynamic view -->
                <img src="uploads/<?php echo $product['product_image']; ?>" alt="" style="width: 400px; height:400px; " >
            </div>
            <div class="col-md-8"><!-- column that is holding product image for the dynamic view -->
                <h5 class="text-start"><?php echo $product['product_name']; ?></h5>
                <h5 class="card-title">$<?php echo $product['product_price']; ?>.00</h5>
                <p class="lead"><?php echo $product['product_description']; ?></p>
                <a href="processes/addToCart.php?id=<?php echo $product_id; ?>" class="btn btn-outline-success">Add to cart</a>
                <a href="products.php" class="btn btn-outline-primary">View Products</a>
            </div>
        </div><!-- end of row -->
    </div> <!--end of container  -->
    <script src="assets/bootstrap5//bootstrap.bundle.js"></script>
    <script src="assets/js/custom2.js"></script>
    <script src="assets/js/jquery.js"></script>
</body>
</html>