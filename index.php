<!DOCTYPE html>
<html lang="en">

<head>
<head>

	<?php
	$PageTitle = "Welcome to LiveInsights";
	include 'include/Head.php';

	?>

</head>

<body>



  <!-- ======= Header ======= -->
    <!-- start header -->
	<?php
	$HomePage = "active";
	$ContactPage = "";
	$ProductsPage = "";
    $CompanyPage = "";
	include 'include/Header.php';

	?>
    <!-- end header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-container">
              <div class="carousel-content">
				<div class="row">
					<div class="col-lg-6">
						<h2 class="animate__animated animate__fadeInDown">Grow Your Sales with  <span>A.I. Powered Solutions</span></h2>
						<p class="animate__animated animate__fadeInUp" style = "width:80%">Take control of your costs, manage inventory better and improve demand forecast using Live Insights’ cloud platform solutions.</p>
						<a href="contact.php" class="btn-get-started animate__animated animate__fadeInUp">Schedule a Demo</a>
					</div>
					<div class="col-lg-6 animate__animated animate__fadeInDown desktopview delay1">
						<img src="assets/img/slide/screen.png" alt="" class="" />
					</div>
              </div>
            </div>
          </div>



        </div>



      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <section id="content" style="padding-bottom: 50px;" class = "about">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">
            <div class="aligncenter flyLeft">
				<img src="assets/img/dashboard.jpg" alt="" class="img-fluid" />

            </div>
          </div>


          <div class="col-lg-6 margin20">
            <div class = "aligncenter flyRight">
				<h3>Spend <strong><span class = "colored">Less. </span></strong> Grow <strong><span class = "colored">More.</span></strong></h3>
				<h5>With Our <span class = "colored">SAAS Solution for CPG Companies</span></h5>
				
				
				<div class="text content" style = "text-align:left">
					<ul>
						<li><i class="icofont-check-circled"></i>Provides insights on SKUs sold by banners / regions</li>
						<li><i class="icofont-check-circled"></i>Provides intelligence on top selling products, fastest growing products and much more</li>
						<li><i class="icofont-check-circled"></i>Forecasts demand on SKUs and provides current inventory / safety stocks levels</li>
					</ul>
				</div>
				
				<a href="products.php" class = "learn-more">
					Learn More
				</a>
            </div>
          </div>
        </div>
		
		<div class="row topmargin100">




          <div class="col-lg-6 margin20">
            <div class = "aligncenter flyLeft">
				<h3>Engage. <strong><span class="colored">Discuss. </span></strong> Learn. <strong><span class="colored">Benefit.</span></strong></h3>
				<h5>Leverage Our <span class="colored">Technical and Domain Expertise</span></h5>
				<div class="text content" style = "text-align:left">
					<p> We understand you are different and so is your business. Engage our highly competent team to grow your business
					<ul>
						<li><i class="icofont-check-circled"></i>Learn more about industry benchmarks and best practices</li>
						<li><i class="icofont-check-circled"></i>Improve operational efficiency by improving demand forecast accuracy and managing inventory better</li>
						<li><i class="icofont-check-circled"></i>Get better insights on ever-changing customer trends</li>
					</ul>
				</div>
				
				<a href="company.php" class = "learn-more">
					Learn More
				</a>

				

            </div>
          </div>
		  <div class="col-lg-6 margin20">
            <div class="aligncenter flyRight">
				<img src="assets/img/engage.jpg" alt="" class="img-fluid" />

            </div>
          </div>
        </div>
	  </div>
    </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Choose <span class = "colored">LiveInsights</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            
			 
				<h4 style = "text-align: center">High <span class = "colored">Quality</span></h4>
				<div class = " whyus">
					
					<p>
					  
					  Deep roots in artificial and business intelligence
					</p>
					<p>
					  Rich experience and domain expertise
					</p>
					<p>
					  Patnerships with best academic and technology institutions in the world
					</p>
				</div>
			  
            
          </div>

          <div class="col-lg-4">
            
			 
				<h4 style = "text-align: center">Rich <span class = "colored">Features</span></h4>
				<div class = "whyus">
					
                    <p>
						One platform for all your business intelligence and forecasting needs
                    </p>
					
					<p>
						Automated Demand Forecasting Engine
                    </p>
					
					<p>
						Cloud Infrastructure
                    </p>
				</div>
			  
            
          </div>

          <div class="col-lg-4">
            
			 
				<h4 style = "text-align: center">Customized <span class = "colored">Solutions</span></h4>
				<div class = "whyus">
					
                    <p>
                      Flexible options for customized dashboard as per your business needs
                    </p>
					
					<p>
                      Scope to improve forecast accuracy by factoring weeks of coverage, Point of Sales (POS) data, Promotion, Price Elasticity
                    </p>
					
					<p>
                      Leverage the team of data scientists, technology and domain experts to address your company specific analytics requirements
                    </p>
				</div>
			  
            
          </div>>

        </div>

      </div>
    </section><!-- End Services Section -->



  </main><!-- End #main -->


	<?php

	include 'include/Footer.php';

	?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


	<?php

		include 'include/IncludeJS.php';

	?>
  

</body>

</html>