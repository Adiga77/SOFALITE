    <!-- start of container -->
    <div class="container product_data mt-5 bg-light py-5 mb-5">

        <div class="row"><!-- start of row -->
        <form action="" method="post">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 "> <!-- column that is holding product image for the dynamic view -->
                <img src="uploads/<?php echo $product['product_image']; ?>" id="img" alt="" style="width: 300px; height:300px; " >
            </div>
            <div class="col-md-8"><!-- column that is holding product image for the dynamic view -->
                <h5 class="text-start" id="name"><?php echo $product['product_name']; ?></h5>
                <h5 class="card-title" id="price" >$<?php echo $product['product_price']; ?>.00</h5>
                <p class="lead"><?php echo $product['product_description']; ?></p>
                <a href="products.php" class="btn btn-primary ">View Products</a>
            </div>
        </form>    
        </div><!-- end of row -->
    </div> <!--end of container  -->