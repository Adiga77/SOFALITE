<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="#"><strong>Sofa<span style="color:darkgoldenrod">Lite</span></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" arial-current="page" href="index.php"><strong>Home</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><strong>About Us</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php"><strong>Products</strong></a>
        </li>
				  <li>
            <a class="nav-link" href="cart.php"><img src="assets/services/images/cart.svg" style="width: 30px; height: 30px;" ><strong><?php echo count($cartProducts); ?></strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>