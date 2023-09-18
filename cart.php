<?php
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
$totalPrice = $cartInstance->getCartTotal();
date_default_timezone_set("Africa/Lagos");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="assets/services/css/tiny-slider.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Cart</title>
    <style>
        input[type=text]{
            width: 50px;
        }
    </style>
</head>
<body>
    <?php include "components/navbar.php"; ?>
    <!-- header -->
    
    <div class="container mt-5">
        <h2>Cart</h2>
        <hr>
        <h3 class="text-end mb-4"><?php echo date("l, M d, Y h:i a") ; ?></h3> 
    </div>
    
    <div class="container mt-5 mb-5">

        <!-- cart information section -->
        <table class="table table-striped table-responsive">
            <!-- table head start -->
            <thead>
                <tr>
                    <th>Product image</th>
                    <th>Product Name</th>
                    <th>Quantities</th>
                    <th>Price</th>
                </tr>
            </thead>
            <!-- table head end -->
            
            <!-- table body start -->
            <tbody>
                 <?php foreach($cartProducts as $cartproduct){?>
                <tr>
                    <td><img src="uploads/<?php echo $cartproduct['product_image']; ?>" style="width:100px; height:100px;" alt=""></td>
                    <td><?php echo $cartproduct['product_name']; ?></td>
                    <td>
                        <div class="input-group mb-3" >
                            <a href="processes/decrementQty.php?id=<?php echo $cartproduct['product_id']; ?>" class="inpt-group-text btn btn-warning btn-sm">-</a>
                            <input type="text" class="text-center" value="<?php echo $cartproduct['quantities']; ?>" disabled>
                            <a href="processes/incrementQty.php?id=<?php echo $cartproduct['product_id']; ?>" class="inpt-group-text btn btn-success btn-sm">+</a>
                        </div>
                    </td>
                    <td>$<?php echo $cartproduct['price']; ?>.00</td>
                    <td><a href="processes/deleteFromCart.php?id=<?php echo $cartproduct['product_id']; ?>" class="btn btn-danger btn-sm float-end">Remove</a></td>
                </tr>
                <?php }?>
            </tbody>
            <!-- table body end -->
        </table>
        <!-- End of cart information section -->
        <div >
            <a href="#processes/addToOrders.php" class="inpt-group-text btn btn-success btn-sm">Place Order</a>
            <a href="orders.php" class="inpt-group-text btn btn-success btn-sm">View Order</a>
            <a href="processes/clearCart.php" class="inpt-group-text btn btn-danger btn-sm">Clear cart</a>
        </div>

        <div class="row mt-5">
        <div class="col-md-6"></div>
        <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                        <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                    </div>
                    <!-- <div class="row mb-3">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 text-right"></div>
                    </div> -->
                    <div class="row mb-5">
                    <div class="col-md-6">
                        <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <strong class="text-black">$<?php echo array_sum($totalPrice); ?>.00</strong>
                    </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>