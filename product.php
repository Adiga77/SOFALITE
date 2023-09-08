<?php
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
    <title>product</title>
</head>
<body>
    <?php include "components/navbar.php" ;?>

    <div class="container mt-5 bg-light py-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="uploads/<?php echo $product['product_image']; ?>" alt="" class="img-fluid" >
            </div>
            <div class="col-md-8">
                <h5 class="text-start"><?php echo $product['product_name']; ?></h5>
                <h5 class="card-title">$<?php echo $product['product_price']; ?></h5>
                <p class="lead"><?php echo $product['product_description']; ?></p>
                <a href="" class="btn btn-primary">Add to cart</a>
            </div>
        </div>
    </div>
    
    <script src="assets/bootstrap5//bootstrap.bundle.js"></script>
</body>
</html>