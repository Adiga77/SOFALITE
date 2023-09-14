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