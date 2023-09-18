<?php 
session_start();
include "classes/Product.php";
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
// creating an instance of Product Class
$productInstance = new Product();
$products = $productInstance->getAllProducts();
date_default_timezone_set("Africa/Lagos");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body id="top">
    <?php include "components/navbar.php" ?>
    <div class=" container mt-5">

    <div class="text-center mb-3">
        <!-- header -->
        <h4>PRODUCTS</h4>
        <hr>
        <h3 class="text-end mb-4"><?php echo date("l, M d, Y h:i a") ; ?></h3> 
    </div>
    <?php include "components/productsCard.php"; ?>
    <div class="container"><a href="#top" class="btn btn-outline-warning mb-3 float-end">Go to top</a></div>

    <!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>	
					</div>
					<p>
						&copy;copyright. designed by OTA group 2 project
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->
			
        </footer><!--/.footer-->
		<!--footer end-->

    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>