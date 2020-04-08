<!DOCTYPE html>

<!--
   Template:   Sepia - Photography Portfolio HTML Website Template
   Author:     Themetorium
   URL:        https://themetorium.net  
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Contact - Sepia - Photography Portfolio HTML Website Template</title>

<?php 
include("includes/header.php");
?>

	</head>

	<!-- ===========
	///// Body /////
	================
	* Use class "animsition" to enable page transition while page loads.
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	-->
	<body id="body" class="animsition tt-boxed">


<?php 

include("includes/nav-bar.php");

?>


		<!-- *************************************
		*********** Begin body content *********** 
		************************************** -->
		<div id="body-content">


			<!-- ========================
			///// Begin page header /////
			=============================
			* Use classes "ph-xs", "ph-sm", "ph-lg" or "ph-xlg" to set page header size.
			* Use class "ph-center" or "ph-right" to align page header caption.
			-->
			<section id="page-header" class="ph-sm">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url(assets/img/misc/page-header-bg-5.jpg);">
					
					<!-- Element cover 
					===================
					* You can use prepared background transparent classes depends on brightness of your page header image. More info: file "helper.css".
					-->
					<div class="cover bg-transparent-5-dark"></div>
					
				</div>
				<!-- End page header image -->

				<!-- Begin page header inner -->
				<div class="page-header-inner tt-wrap">

					<!-- Begin page header caption 
					===============================
					* Use classes "ph-caption-xs", "ph-caption-sm", "ph-caption-lg" or "ph-caption-xlg" to set page header size.
					* Use class "parallax-1" up to "parallax-6" to enable parallax effect.
					* Use class "fade-out-scroll-1" up to "fade-out-scroll-6" to enable fade out effect if page scroll.
					-->
					<div class="page-header-caption ph-caption-lg parallax-4 fade-out-scroll-3">
						<h1 class="page-header-title">Contact</h1>
						<hr class="hr-short">
												
						<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
						<div class="page-header-description" data-max-words="40">
							<p>Please contact us with any questions, comments, or concerns. For immediate issues, please call or talk to a staff member directly.</p>
						</div>

					</div>
					<!-- End page header caption -->

				</div> 
				<!-- End page header inner -->

			</section>
			<!-- End page header -->


			<!-- ============================
			///// Begin contact section /////
			============================= -->
			<section id="contact-section">
				<div class="contact-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->
					
					<!-- ======================
					///// Begin split box /////
					based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					======================= -->
					<div class="split-box">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height full-height-vh">

									<!-- Column -->
									<div class="col-lg-6 col-lg-height col-lg-middle bg-image" style="background-image: url(assets/img/misc/contact-bg.jpg); background-position: 50% 50%;">

										<!-- Element cover -->
										<div class="cover"></div>

										<!-- Begin split box content -->
										<div class="split-box-content text-left no-padding-left no-padding-right">

											<!-- Begin contact info -->
											<div class="contact-info-wrap">
												<div class="contact-info">
													<p><i class="fas fa-home"></i> address: 121 King Street, Melbourne, Australia</p>
													<p><i class="fas fa-phone"></i> phone: +123 456 789 000</p>
													<p><i class="fas fa-envelope"></i> email: <a href="mailto:company@email.com" target="_blank">company@email.com</a></p>
												</div>

												<!-- Begin social buttons -->
												<div class="social-buttons margin-top-20">
													<ul>
														<li><a href="https://www.facebook.com/themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
														<li><a href="https://twitter.com/Themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
														<li><a href="https://plus.google.com/+SiiliOnu" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Google+" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
														<li><a href="https://www.pinterest.com/themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
														<li><a href="https://dribbble.com/Themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a></li>
													</ul>
												</div>
												<!-- End social buttons -->

											</div>
											<!-- End contact info -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->

									<!-- Column -->
									<div class="col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content -->
										<div class="split-box-content">

											<!-- Begin contact form 
											========================= -->
											<form id="contact-form">
												<div class="contact-form-inner text-left">

													<div class="contact-form-info">

														<!-- Begin tt-heading 
														====================== 
														* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
														* Use class "text-center" or "text-right" to align tt-heading.
														* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
														-->
														<div class="tt-heading">
															<div class="tt-heading-inner">
																<h1 class="tt-heading-title">Drop Me a Line</h1>
																<!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
																<hr class="hr-short">
															</div> <!-- /.tt-heading-inner -->
														</div>
														<!-- End tt-heading -->

														<div class="margin-top-30">
															<p>Please fill out this form with your question or comment and we will do our best to respond promptly.</p>
														</div>

													</div> <!-- /.contact-form-info -->

													<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
													<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
													<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
													<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
													<!-- End Hidden Required Fields -->

													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<input type="text" class="form-control" name="name" placeholder="Your Name" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<input type="email" class="form-control" name="email" placeholder="Your Email" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<input type="text" class="form-control" name="subject" placeholder="Subject" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<select class="form-control" name="option" required>
																	<option value="" disabled selected>Select an option</option>
																	<option value="Say Hello">Say hello</option>
																	<option value="New Project">New project</option>
																	<option value="Feedback">Feedback</option>
																	<option value="Other">Other</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
															</div>
														</div>
													</div>

													<div class="small text-gray"><em>* All fields are required!</em></div>

												</div> <!-- /.contact-form-inner -->

												<div class="row">
													<div class="col-lg-12">
														<button type="submit" class="btn btn-primary btn-lg margin-top-40">Send Message</button>
													</div>
												</div>
											</form>
											<!-- End contact form -->

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->
								</div> <!-- /.row-height -->
							</div> <!-- /.row -->

							<div class="row">
								<div class="col-lg-12 no-padding">

									<!-- Begin custom Google Map 
									=============================
									* Tutorial: https://developers.google.com/maps/documentation/javascript/tutorial
									* Styles: https://snazzymaps.com/
									-->
									<div id="map"></div>
									<!-- End custom Google Map -->

								</div> <!-- /.col -->
							</div> <!-- /.row -->
							
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.contact-section-inner -->
			</section>
			<!-- End contact section -->


			<!-- ===========================
			///// Begin footer section /////
			================================
			* Use class "footer-dark" to enable dark footer.
			* Use class "no-margin-top" if needed. 
			-->
			<section id="footer" class="footer-dark no-margin-top"> <!-- margin class is optional -->
				<div class="footer-inner">
					<div class="footer-container tt-wrap">
						<div class="row">
							<div class="col-md-3">

								<!-- Begin footer logo -->
								<div id="footer-logo">
									<a href="index.html" class="logo-dark"><img src="assets/img/logo-dark.png" alt="logo"></a>
									<a href="index.html" class="logo-light"><img src="assets/img/logo-light.png" alt="logo"></a>

									<!-- for small screens -->
									<a href="index.html" class="logo-dark-m"><img src="assets/img/logo-dark-m.png" alt="logo"></a>
									<a href="index.html" class="logo-light-m"><img src="assets/img/logo-light-m.png" alt="logo"></a>
								</div>
								<!-- End footer logo -->

							</div> <!-- /.col -->

							<div class="col-md-5">

								<!-- Begin footer text -->
								<div class="footer-text">
									<h4>- Creative Photo Studio</h4>
									Sed non auctor magna. Nunc eu ultrices orci. Donec commodo ligula in massa ultricies volutpat. Fusce vel cursus lectus. Cras commodo odio mi, eu cursus nibh iaculis ut.
								</div>
								<!-- End footer text -->

							</div> <!-- /.col -->

							<div class="col-md-4">

								<!-- Begin social buttons -->
								<div class="social-buttons">
									<ul>
										<li><a href="https://www.facebook.com/themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/Themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://plus.google.com/+SiiliOnu" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Google+" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="https://www.pinterest.com/themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="https://dribbble.com/Themetorium" class="btn btn-social-min btn-default btn-rounded-full" title="Follow me on Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a></li>
										<li><a href="contact.html" class="btn btn-social-min btn-default btn-rounded-full" title="Drop me a line" target="_blank"><i class="fas fa-envelope"></i></a></li>
									</ul>
								</div>
								<!-- End social buttons -->

								<!-- Begin footer subscribe form -->
								<form id="footer-subscribe-form" class="form-btn-inside">
									<div class="form-group">
										<input type="email" class="form-control no-bg" id="footer-subscribe" name="subscribe" placeholder="Subscribe. Enter your email address..." required="">
										<button type="submit"><i class="fas fa-paper-plane"></i></button>
									</div>
								</form>
								<!-- End footer subscribe form -->

							</div> <!-- /.col -->

						</div> <!-- /.row -->
					</div> <!-- /.footer-container -->

					<div class="footer-bottom">
						<div class="footer-container tt-wrap">
							<div class="row">
								<div class="col-md-6 col-md-push-6">

									<!-- Begin footer menu -->
									<ul class="footer-menu">
										<li><a href="index.html">Home</a></li>
										<li><a href="about-me.html">About</a></li>
										<li><a href="albums-grid-fluid-2.html">Portfolio</a></li>
										<li><a href="blog-list-grid.html">Blog</a></li>
										<li><a href="page-faq.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
									<!-- End footer menu -->

								</div> <!-- /.col -->

								<div class="col-md-6 col-md-pull-6">

									<!-- Begin footer copyright -->
									<div class="footer-copyright">
										<p>&copy; Sepia 2017 / All rights reserved</p>
										<p>Design by: <a href="https://themeforest.net/item/sepia-photography-portfolio-html-website-template/20195226?ref=Themetorium" target="_blank">Themetorium</a></p>
									</div>
									<!-- End footer copyright -->

								</div> <!-- /.col -->

							</div> <!-- /.row -->
						</div> <!-- /.footer-container -->
					</div> <!-- /.footer-bottom -->

				</div> <!-- /.footer-inner -->

				<!-- Scroll to top button -->
				<a href="#body" class="scrolltotop sm-scroll" title="Scroll to top"><i class="fas fa-chevron-up"></i></a>

			</section>
			<!-- End footer section -->

		</div>
		<!-- End body content -->



        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/animsition/js/animsition.min.js"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
		<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

		<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Google maps JS (https://developers.google.com/maps/documentation/javascript/tutorial). Only for contact page!!! -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo5b533IB2iuDcTn2razvfjyc_rpZdiRw&callback=initMap"></script> 
		<script src="assets/vendor/map.js"></script> 

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>

</html>