<?php
$pageTitle = 'Contact';
include('header.php');
error_reporting(-1);
ini_set('display_errors', 'On');
 ?>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contact Me /</h1>
                        <p>Here is how you can contact me</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                    <p>
	                    Use this form to contact me <span class="violet">personally</span> with any questions related to
                       <span class="violet">me, my research or this site.</span>
                      For questions regarding projects or upcoming events, please go to the <a href="/portfolio.php">Projects</a>
                       page, and follow the links to the relevant site for your questions <br>
	                    	Thank you!
	                    </p>
	                    <form role="form" action="assets/sendmail.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Name</label>
	                        	<input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Subject</label>
	                        	<input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                    </form>
	                </div>
	              <div class="col-sm-5 contact-address wow fadeInUp">

	                  <h3>Here I Am</h3>
	                    <div class="map"></div>
	                    <h3>Address <i class="fa fa-home"></i> <i class="fa fa-envelope"></i></h3>
	                    <p>Vester Vænge Alle 33 <br> 9000, Aalborg.<br>
                        Denmark</p>
	                    <p>Phone: (+45) 42175065</p>
	                </div>
	            </div>
	        </div>
        </div>

                 <?php
                 include('footer.php');
                  ?>
