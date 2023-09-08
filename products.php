<?php 
include "config/db_connect.php";

$sql = "SELECT * FROM products";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Products</title>
</head>
<body>
<?php include "components/navbar.php" ?>
    <div class=" container mt-5">
        <!-- header -->
        <h4>PRODUCTS</h4>
        <hr>
    </div>
   
    <!-- products in card -->
    <div class="container mt-5 ">
        <div class="row g-4">
        <?php foreach($products as $product){?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <!-- card -->
                <div class="card  w-100 h-100">
                    <div class="text-center mt-3"><img src="uploads/<?php echo $product['product_image']; ?>" style="width: 200px; height:200px;" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                        <h5 class="card-title">$<?php echo $product['product_price']; ?></h5>
                        <p class="card-text  text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <!-- bootstrap 5 script -->
    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
</body>
</html>