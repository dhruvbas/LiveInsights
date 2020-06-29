  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
      
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
			<li class= "<?php echo $HomePage ?>"><a href="index.php">Home</a></li>
			<li class="dropdown <?php echo $ProductsPage ?>">
			  <a href="products.php">Platform</a>
			</li>
			<li class="dropdown <?php echo $CompanyPage ?>">
			  <a href="company.php">Company</a>
			</li>
			<li class="dropdown <?php echo $Blog ?>">
			  <a href="https://medium.com/@LiveInsights" target="_blank">Blog</a>
			</li>
			<li class="dropdown <?php echo $ContactPage ?>">
			  <a href="contact.php">Contact</a>
			</li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->