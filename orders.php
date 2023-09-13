<?php 
include "classes/Order.php";
include "classes/Cart.php";
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();
$ordersInstance = new Order();
$ordersProducts = $ordersInstance->allOrders();
date_default_timezone_set("Africa/Lagos");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="assets/bootstrap5//bootstrap.min.css">
    <link rel="stylesheet" href="assets/css//style2.css">
</head>
<body>
<?php include "components/navbar.php"; ?>
    
    <div class="container mt-5">
        <h3>Orders</h3>
        <hr>
        <h3 class="text-end mb-4"><?php echo date("l, M d, Y h:i a") ; ?></h3> 
    </div>
    <div class="container mt-5">
    <table class="table  table-responsive">
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
                 <?php foreach($ordersProducts as $orderproduct){?>
                <tr>
                    <td><img src="uploads/<?php echo $orderproduct['product_image']; ?>" style="width:100px; height:100px;" alt=""></td>
                    <td><?php echo $orderproduct['product_name']; ?></td>
                    <td><?php echo $orderproduct['quantities']; ?></td>
                    <td>$<?php echo $orderproduct['price']; ?>.00</td>
                </tr>
                <?php }?>
            </tbody>
            <!-- table body end -->
        </table>
    </div>

    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
</body>
</html>