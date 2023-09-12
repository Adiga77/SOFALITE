<?php
include "classes/Cart.php";
// the cart class is been included bedause we want the cart items to be shown across all the pages
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="assets/bootstrap5/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assets/services/css/tiny-slider.css" rel="stylesheet">
		<link href="assets/services/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style2.css">
		<title>About us</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	</head>

	<body>
         <?php include "components/navbar.php"; ?>

        <div class="hero">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="intro-excerpt">
                            <h1>About Us</h1>
                            <p class="mb-4">We have the fastest services across the globe</p>
                            <p><a href="" class="btn btn-secondary me-2">Shop Now</a></p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero-img-wrap">
                            <img src="assets/services/images/couch.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">

				<!--our services header -->
				<h3 class="text-center mb-4" ><strong>Our Services</strong></h3>
				<div class="row my-5">
					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="assets/services/images/truck.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="assets/services/images/bag.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="assets/services/images/support.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-3 mb-4">
						<div class="feature">
							<div class="icon">
								<img src="assets/services/images/return.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
						</div>
					</div>

				</div>
			
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section pt-0">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p><a href="#" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="assets/services/images/product-1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nordic Chair</h3>
							<span class="icon-cross">
								<img src="assets/services/images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="assets/services/images/product-2.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Kruzo Aero Chair</h3>
							<span class="icon-cross">
								<img src="assets/services/images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="#">
							<img src="assets/services/images/product-3.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Ergonomic Chair</h3>
							<span class="icon-cross">
								<img src="assets/services/images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				<h3 class="text-center mb-4" ><strong>Team Members</strong></h3>
				<!-- team members -->
				<div class="row  mb-5">
						<!--team member 1 -->
						<div class="col-md-4">
							<div class="card">
								<img src="uploads/arrivals3.png" class="card-img-top" alt="...">
								<div class="card-body text-center bg-light text-dark">
									<h5 class="card-title">Team member 1</h5>
									<p class="card-text">Adokwu Michael Adiga</p>
								</div>
							</div>
						</div>
						<!--team member 2 -->
						<div class="col-md-4">
							<div class="card">
								<img src="uploads/arrivals3.png" class="card-img-top" alt="...">
								<div class="card-body text-center bg-light text-dark">
									<h5 class="card-title">Team member 2</h5>
									<p class="card-text">Onuh</p>
								</div>
							</div>
						</div>

						<!--team member 3 -->
						<div class="col-md-4">
							<div class="card">
								<img src="uploads/arrivals3.png" class="card-img-top" alt="...">
								<div class="card-body text-center bg-light text-dark">
									<h5 class="card-title">Team member 3 </h5>
									<p class="card-text">Innocent</p>
								</div>
							</div>
						</div>
					</div>


					<div class="row g-5 mb-5">
						<div class="col-lg-4">
							<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Sofalite<span>.</span></a></div>
							<ul class="list-unstyled custom-social">
								<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
								<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							</ul>
						</div>

						<div class="col-lg-8">
							<div class="row links-wrap">
								<div class="col-6 col-sm-6 col-md-3">
									<ul class="list-unstyled">
										<li><a href="about.php">About us</a></li>
									</ul>
								</div>

								<div class="col-6 col-sm-6 col-md-3">
									<ul class="list-unstyled">
										<li><a href="contact.php">Contact us</a></li>
									</ul>
								</div>

								<div class="col-6 col-sm-6 col-md-3">
									<ul class="list-unstyled">
										<li><a href="products.php">products</a></li>
									</ul>
								</div>

								<div class="col-6 col-sm-6 col-md-3">
									<ul class="list-unstyled">
										<li><a href="services.php">Services</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="row pt-4">
						<div class="col-lg-6"></div>
						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="assets/services/js/bootstrap.bundle.min.js"></script>
		<script src="assets/services/js/tiny-slider.js"></script>
		<script src="assets/services/js/custom.js"></script>
	</body>

</html>
