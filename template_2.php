<!DOCTYPE html>

<!--
   Template:   Sepia - Photography Portfolio HTML Website Template
   Author:     Themetorium
   URL:        https://themetorium.net  
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Dummy Page - Sepia - Photography Portfolio HTML Website Template</title>

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
			<section id="page-header">

				<!-- Begin page header image 
				============================= 
				* Use class "parallax-bg-1" up to "parallax-bg-6" to enable background image parallax effect.
				* Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
				* Use class "hide-ph-image" to hide page header image without removing the code.
				-->
				<div class="page-header-image parallax-bg-3 bg-image" style="background-image: url(assets/img/misc/page-header-bg-8.jpg);">
					
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
						<h1 class="page-header-title">Dummy Page</h1>
						<hr class="hr-short">
												
						<!-- Use data attributes to set text maximum characters or words (example: data-max-characters="120" or data-max-words="40") -->
						<div class="page-header-description" data-max-words="40">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloribus natus porro, laudantium tenetur explicabo laborum aliquam maxime iusto, similique distinctio sint praesentium! Nobis molestiae modi, assumenda pariatur eum neque.</p>
						</div>

					</div>
					<!-- End page header caption -->

				</div> 
				<!-- End page header inner -->

			</section>
			<!-- End page header -->


			<!-- =========================
			///// Begin page section /////
			========================== -->
			<section id="page-section">
				<div class="page-section-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

					<!-- Begin split box
					=====================
					Based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					-->
					<div class="split-box">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height">

									<!-- Column -->
									<div class="col-lg-6 col-lg-height split-box-image no-padding bg-image" style="background-image: url(assets/img/misc/misc-1.jpg); background-position: 50% 50%;">

										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info.
										* Note: class "sbi-height" is required.
										-->
										<div class="sbi-height padding-height-100"></div>

									</div> <!-- /.col -->

									<!-- Column -->
									<div class="col-lg-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content 
										============================= 
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
										<div class="split-box-content sb-content-right">

											<!-- Begin tt-heading 
											====================== 
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
											<div class="tt-heading tt-heading-sm">
												<div class="tt-heading-inner">
													<h1 class="tt-heading-title">Your Content Here</h1>
													<!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
													<hr class="hr-short">
												</div> <!-- /.tt-heading-inner -->
											</div>
											<!-- End tt-heading -->

											<div class="margin-top-30">
												<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada felis, sit amet aliquet nibh laoreet et.</p>

												<p>Nunc pellentesque erat metus, euismod feugiat purus semper ut. Quisque rutrum, nibh quis blandit lacinia, nibh lorem condimentum neque, quis vestibulum mi felis non lectus. Ut at lectus euismod, pharetra libero quis, vestibulum est. Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et imperdiet metus. Phasellus et posuere justo. Donec quis enim eu ex tincidunt rhoncus sit amet et libero.</p>
											</div>

										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->
								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

					<!-- Begin split box
					=====================
					Based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
					-->
					<div class="split-box sb-content-left">
						<div class="container-fluid">
							<div class="row">
								<div class="row-lg-height">
									
									<!-- Column -->
									<div class="col-lg-6 col-lg-push-6 col-lg-height split-box-image no-padding bg-image" style="background-image: url(assets/img/misc/misc-2.jpg); background-position: 50% 50%;">
										
										<!-- Split box image height
										============================
										* You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info.
										* Note: class "sbi-height" is required.
										-->
										<div class="sbi-height"></div>

									</div> <!-- /.col -->

									<!-- Column -->
									<div class="col-lg-6 col-lg-pull-6 col-lg-height col-lg-middle no-padding">

										<!-- Begin split box content 
										============================= 
										* Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
										-->
										<div class="split-box-content sb-content-left">
											
											<!-- Begin tt-heading 
											====================== 
											* Use class "padding-on" to enable heading paddings (useful if you use tt-heading as stand alone element).
											* Use class "text-center" or "text-right" to align tt-heading.
											* Use classes "tt-heading-xs", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set tt-heading size.
											-->
											<div class="tt-heading tt-heading-sm">
												<div class="tt-heading-inner">
													<h1 class="tt-heading-title">Your Content Here</h1>
													<!-- <div class="tt-heading-subtitle">Subtitle Here</div> -->
													<hr class="hr-short">
												</div> <!-- /.tt-heading-inner -->
											</div>
											<!-- End tt-heading -->

											<div class="margin-top-30">
												<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada felis, sit amet aliquet nibh laoreet et.</p>

												<p>Nunc pellentesque erat metus, euismod feugiat purus semper ut. Quisque rutrum, nibh quis blandit lacinia, nibh lorem condimentum neque, quis vestibulum mi felis non lectus. Ut at lectus euismod, pharetra libero quis, vestibulum est. Fusce et velit sed augue rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et imperdiet metus. Phasellus et posuere justo. Donec quis enim eu ex tincidunt rhoncus sit amet et libero.</p>

												<blockquote>Non mauris nullam. Wisi gravida quis quisque mattis dolor. Etiam sociis turpis nesciunt sed lacus sed hendrerit diam. Accumsan varius venenatis arcu maecenas nulla. Aliquet tempus lobortis. Tortor nibh erat vel gravida est accumsan ut ad. Orci malesuada morbi. Luctus pharetra lectus.</blockquote>

												<p>Morbi malesuada feugiat nisl. Donec dapibus felis vitae vestibulum laoreet. Quisque scelerisque, nisl at ornare rutrum, orci purus convallis ipsum, et tincidunt ligula est vel turpis. Nunc at finibus elit, vel fringilla ligula. Duis accumsan nibh eget mauris elementum porttitor. Aliquam erat volutpat. Quisque rutrum vulputate metus non aliquet. Nullam vulputate scelerisque tortor nec porttitor.</p>

												<p>Nunc scelerisque bibendum laoreet. Aenean eleifend quam a dui ullamcorper bibendum. Maecenas blandit at odio nec tempus. Integer nec elit ac nunc aliquam commodo. Pellentesque sed tincidunt neque, in tempor turpis.</p>

												<p>:)</p>
											</div>
											
										</div>
										<!-- End split box content -->

									</div> <!-- /.col -->
								</div> <!-- /.row-height -->
							</div> <!-- /.row -->
						</div> <!-- /.container -->
					</div>
					<!-- End split box -->

				</div> <!-- /.page-section-inner -->
			</section>
			<!-- End section -->


<?php 
include("includes/footer.php");
?>

	


	</body>

</html>