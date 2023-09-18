
  <!-- products in card -->
  <div class="container  mt-5 mb-5">
        <div class="row  g-4">
        <?php foreach($products as $product){?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <!-- card -->
                <div class="card  w-100 h-100">
                    <div class="text-center mt-3"><img src="uploads/<?php echo $product['product_image']; ?>" id="img" style="width: 200px; height:200px;" alt="..."></div>
                        <form action="" method="post">
                            <div class="card-body">
                                <h5 class="card-title" id="name" ><?php echo $product['product_name']; ?></h5>
                                <h5 class="card-title" id="price" >$<?php echo $product['product_price']; ?>.00</h5>
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