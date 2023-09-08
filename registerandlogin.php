<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Customized bootstrap login forms with multiple variants. Easy to customize.">
	<meta name="keywords" content="Bootstrap Modal, Login Form, Modal Login, Registration Form, Form, Bootstrap, Login, Registration">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration and Login page</title>

	<!-- font awesome v5.5.0 free version -->
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- bootstrap-->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- custom css -->
	<link href="assets/css/reg_log_style.css" rel="stylesheet">
</head>
<body>
	<div class="main-container">
		<h3 class="text-center mt-4">Login and Registration form </h3>
	
		<div class="row text-center mt-3">
			<div class="col-sm-4 "></div>
			<div class="col-sm-4 ">
				<div class="button-card mt-4">
					<p class="h6"> Click the button to preview</p>
					<div class="action-buttons mb-3 mt-2">
						<!-- action button for modal style 2 start -->
						<a href="#loginModal2" data-toggle="modal" class="btn btn-theme btn-primary text-white"> Login</a>
						<a href="#registerModal2" data-toggle="modal" class="btn btn-theme btn-success text-white">Register</a>
						<!-- action button for modal style 2 end -->
					</div>
					<img src="assets/demo/style-2-demo-dark.jpg">
				</div>
			</div>
			<div class="col-sm-4 "></div>
		</div>
	</div>



	<!-- login modal -->
	<div id="loginModal2" class="modal-style-2 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Login</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="" method="" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="username" placeholder="Enter your username" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="row pl-1 pr-1">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right hint-text pt-0">
                                <a href="" class="text-danger">Forgot Password?</a>
                            </div>
                        </div>
						<div class="form-group text-center mt-2 mb-0">
							<button type="submit" class="btn btn-primary btn-sm">Login</button>
							
						</div>
						<!-- social icons -->
						<p class="hint-text mt-0">or login with</p>
						<div class="social-login text-center">
							<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
							<a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
							<a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
						</div>
					</form>
				</div>
				<div class="modal-footer">Don't have an account? <a href="#registerModal2" data-dismiss="modal" data-toggle="modal"> Register</a></div>
			</div>
		</div>
	</div>  
	<!-- register modal -->
	<div id="registerModal2" class="modal-style-2 dark modal ">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header p-0">				
					<h4 class="modal-title">Register</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" class="mt-3">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="text" class="form-control" name="email" placeholder="Enter email address" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Enter password" required="required" autocomplete="on">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
								<input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required="required" autocomplete="on">
							</div>
						</div>

						<div class="form-group text-center">
							<button id="signup-button" type="submit" class="btn btn-primary btn-sm">Register</button>
							
						</div>
					</form>

				</div>
				<!-- social icons -->
				<p class="hint-text">or register with</p>
				<div class="social-login text-center mb-2">
					<a class=" btn-facebook  text-uppercase" href="redirect/facebook"><i class="fab fa-facebook-f mr-2 ml-2"></i> </a>
					<a class=" btn-facebook  text-uppercase" href="redirect/google"><i class="fab fa-google mr-2 ml-2"></i></a>
					<a class=" btn-facebook  text-uppercase" href="redirect/twitter"><i class="fab fa-twitter mr-2 ml-2"></i></a>
				</div>
				<div class="modal-footer">Already have an account? <a href="#loginModal2" data-dismiss="modal" data-toggle="modal"> Login</a></div>
			</div>
		</div>
	</div> 
    <p class="m-0 p-0 text-center text-muted text-12 mt-4 ">project  &copy; OTA group 2</p>

		<!-- link to redirect to home page -->
		<ul class="navbar-nav text-center">
			<li class="nav-item"><a href="landing_page.php" class="nav-link">Home</a></li>
		</ul>

    

	<!-- jQuery v3.5.0 -->
	<script src="assets/js/jquery-3.5.1.min.js" ></script>
	<!-- bootstrap js -->
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>
