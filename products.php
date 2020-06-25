<!DOCTYPE html>
<html lang="en">

<head>
<head>

	<?php
	$PageTitle = "LiveInsights-Products";
	include 'include/Head.php';

	?>

</head>

<body>



  <!-- ======= Header ======= -->
    <!-- start header -->
	<?php
	$HomePage = "";
	$ContactPage = "";
	$ProductsPage = "active";
    $CompanyPage = "";
	include 'include/Header.php';

	?>
    <!-- end header -->



  <main id="main" style = "padding-top:30px;">
	<section id="product-title" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>See All Your <span class = "colored">Data Insights</span>  In <span class = "colored">One Place</span></h2>
		  <p class = "topmargin50">It's time to stop wasting time in collecting data, sharing spreadsheets, or going back and forth on where the data is coming from or which calculation is right. Our online platform powers analytics, forecasting and planning. The platform can be used by cross-functional teams across the Organization, including sales, supply chain, operations, and marketing.
		  </p>
        </div>
	  </div>
	</section>

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
				<h3>SAAS Solution for <span class="colored"> CPG Companies</span></h3>
				
				
				<div class="text content" style = "text-align:left">
					<ul>
						<li><i class="icofont-check-circled"></i>See all your data in one place</li>
						<li><i class="icofont-check-circled"></i>Flexible Pricing - You pay for what you use</li>
						<li><i class="icofont-check-circled"></i>Allows to add multiple accounts</li>
						<li><i class="icofont-check-circled"></i>Customizable - Can be customized to serve yours and your clients needs better</li>
						<li><i class="icofont-check-circled"></i>Secured - We know data security is paramount. That's why LiveInsights uses services provided by Amazon Web Services (AWS)</li>
				</div>

            </div>
          </div>
        </div>
	  </div>
    </section>
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><span class = "colored">Value</span> Proposition</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-analyse"></i></div>
              <h4><a href="">ANALYZE</a></h4>
              <p>Actionable insights from orders and POS analytics; automated reporting, and smart alerts. Live Insights simplify data collection and cleansing, so you can get straight to insights</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-trending-up"></i></div>
              <h4><a href="">PREDICT</a></h4>
              <p>Zoom into opportunities by focusing on what’s selling where, real-time forecasted demand, to name a few. Live Insights dynamically recommends top opportunity areas to direct your resources</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-repost"></i></div>
              <h4><a href="">REPEAT</a></h4>
              <p>Forecasts are updated in real-time and machine learning self-tunes demand models based on new data</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Solution Is <span class = "colored">Ideal For</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div>
			 
					<h4>CPG <span class = "colored">Brokers</span></h4>
					<div>
						
						<p>
						  
						  Add multiple accounts
						</p>
						<p>
						  Cloud Infrastructure
						</p>
					</div>
			    </div>
            
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" style = "padding-right:50px">
			<div>
			 
				<h4>CPG <span class = "colored">Manufacturers</span></h4>
				<div>
					
                    <p>
						One platform for all your business intelligence and forecasting needs
                    </p>
					
					<p>
						Scope to improve demand forecasting and hence improving Supply Chain efficiencies
                    </p>
					
					<p>
						Connects directly to your ERP
                    </p>
				</div>
			</div>
			  
            
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
           <div>
			 
				<h4>CPG <span class = "colored">Small / Mid Sized Companies</span></h4>
				<div>
					
                    <p>
                      See all your data in one place
                    </p>
					
					<p>
                      No more excel overload
                    </p>
					
					<p>
                       Easier to use and saves time
                    </p>
				</div>
			  
            </div>
          </div>

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