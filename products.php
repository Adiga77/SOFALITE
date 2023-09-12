<?php 
include "classes/Product.php";
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
// creating an instance of Product Class
$productInstance = new Product();
$products = $productInstance->getAllProducts();

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
        <!-- header -->
        <h4>PRODUCTS</h4>
        <hr>
    </div>
   
    <!-- products in card -->
    <div class="container product_data mt-5 mb-5">
        <div class="row product_data g-4">
        <?php foreach($products as $product){?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <!-- card -->
                <div class="card  w-100 h-100">
                    <div class="text-center mt-3"><img src="uploads/<?php echo $product['product_image']; ?>" style="width: 200px; height:200px;" alt="..."></div>
                        <form action="" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                                <h5 class="card-title">$<?php echo $product['product_price']; ?>.00</h5>
                                <p class="card-text  text-truncate"><?php echo $product['product_description']; ?></p>
                                <div class="">
                                    <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-secondary">View more</a>
                                    <a href="processes/addToCart.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-success ">Add to cart</a>
                                </div>   
                            </div>
                     </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
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

    <!-- bootstrap 5 script -->
    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
</body>
</html>