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
	$ContactPage = "active";
	$CompanyPage = "";
    $ProductsPage = "";
	include 'include/Header.php';

	?>
    <!-- end header -->

  <main id="main" style = "padding-top:30px;">
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>We'd <span class = "colored">Love</span> To Hear From<span class = "colored">You</span></h2>
		  <p class = "topmargin50">Whether you have a  question about pricing, features, trial, need a demo, or anything else, our team is there to help you
        </div>
	  </div>
	</section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
	
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>LiveInsights, 33 Lombard Street, Toronto M5C 3H8 Canada</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@liveinsights.ai</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 416 825 9636 / +1 416 816 4636</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.8343064250075!2d-79.37752308499394!3d43.65161556055208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb33c7c3c6a3%3A0x425fd1baae8a03e5!2s33%20Lombard%20St%2C%20Toronto%2C%20ON%20M5C%203H8!5e0!3m2!1sen!2sca!4v1592954570016!5m2!1sen!2sca" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">We have received your email. Our team will get back to you soon.  Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
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