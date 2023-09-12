<?php
include "classes/Cart.php";
// the cart class is been included bedause we want the cart items to shown across all the pages
$cartInstance = new Cart();
$cartProducts = $cartInstance->selectAllFromCart();

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
    <link href="assets/services/css/style.css" rel="stylesheet">
    <title>Contact Us</title>
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
                        <h1>Contact Us</h1>
                        <p class="mb-4">Welcome to our contact, you can write to us directly</p>
                        <p><a href="products.php" class="btn btn-secondary me-2">Shop Now</a></p>
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

    <section class="bg-light">
        <div class="container mb-5 ">
            <div class="row mt-5 mb-5">
                <div class="col-lg-4">
                    <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mt-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                        <p>Along David Mark Way, Otukpo, Benue State, Nigeria</p>
                    </div> <!-- /.service-contents-->
                    </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                    <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mt-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                        <p>OTAgroup2project@info.com</p>
                    </div> <!-- /.service-contents-->
                    </div> <!-- /.service -->
                </div>

                <div class="col-lg-4">
                    <div  class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                    <div class="service-icon color-1 mt-5 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div> <!-- /.icon -->
                    <div class="service-contents">
                        <p>+234-9048-6830-54</p>
                    </div> <!-- /.service-contents-->
                    </div> <!-- /.service -->
                </div>
            </div>
        
            <form method="post" action="" >
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label class="text-black" for="fname">First name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label class="text-black" for="lname">Last name</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-black" for="email">Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group mb-5">
                    <label class="text-black" for="message">Message</label>
                    <textarea name="message" class="form-control" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary-hover-outline mb-4">Send Message</button>
            </form>
            <!-- End Contact Form -->
        </div>  
    </section> 

    <!-- start of footer section -->
    <footer class="footer-section">
			<div class="container relative">

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
                                    <li><a href="#">Contact us</a></li>
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

    <script src="assets/bootstrap5/bootstrap.bundle.js"></script>
</body>
</html>