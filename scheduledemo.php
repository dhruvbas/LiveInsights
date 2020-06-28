<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$PageTitle = "LiveInsights - Products";
	include 'include/Head.php';

	?>


</head>

<body>

  <div id="wrapper">

    <!-- start header -->
	<?php
	$HomePage = "";
	$ContactPage = "";
	$CompanyPage = "";
    $ProductsPage = "";
	include 'include/Header.php';

	?>
    <!-- end header -->

  <main id="main" style = "padding-top:30px;">
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Watch a</span> Demo<span class = "colored"></h2>
		  <p class = "topmargin50">See how LiveInsights' Platform helps to improve your business and provides seamless experience with your data analytics needs. It all starts with a few simple steps - pick a date and time and fill in the details. See you soon!
        </div>
	  </div>
	</section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
	
		<!-- Calendly inline widget begin -->
		<div class="calendly-inline-widget" data-url="https://calendly.com/liveinsights/30min?hide_event_type_details=1&text_color=444444&primary_color=e96b56" style="min-width:320px;height:630px;"></div>
		<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
		<!-- Calendly inline widget end -->
    </section><!-- End Contact Section -->

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