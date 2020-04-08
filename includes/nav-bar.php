	<!-- =================
		//// Begin header //// 
		======================
		* Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
		* Use class "header-fixed-top" to set header to fixed position.
		* Use class "header-transparent" to set header to transparent.
		* Use class "menu-align-left" to align menu to left.
		* Use class "menu-align-right" to align menu to right.
		* Use class "menu-align-center" to align menu to center (do not use with header classes!).
		-->
		<header id="header" class="header-show-hide-on-scroll menu-align-right">

			<!-- Begin header inner -->
			<div class="header-inner tt-wrap"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag! ) -->

				<!-- Begin logo 
				================ -->
				<div id="logo">
					<a href="index.html" class="logo-dark"><img src="assets/img/logo-dark.png" alt="logo"></a>
					<a href="index.html" class="logo-light"><img src="assets/img/logo-light.png" alt="logo"></a>

					<!-- for small screens -->
					<a href="index.html" class="logo-dark-m"><img src="assets/img/logo-dark-m.png" alt="logo"></a>
					<a href="index.html" class="logo-light-m"><img src="assets/img/logo-light-m.png" alt="logo"></a>
				</div>
				<!-- End logo -->

				<!-- ====================
				//// Begin main menu ////
				===================== -->
				<nav class="tt-main-menu">

					<!-- Begin mobile menu toggle button -->
					<div id="tt-m-menu-toggle-btn">
						<span></span>
					</div>
					<!-- End mobile menu toggle button -->

					<!-- Begin menu tools 
					====================== -->
					<div class="tt-menu-tools">
						<ul>
							<!-- Begin search -->
							<li>
								<a href="#" class="tt-clobal-search-trigger"><i class="fas fa-search"></i></a>
								<div class="tt-clobal-search">
									<div class="tt-clobal-search-inner">
										<span class="tt-clobal-search-title">Search</span>
										<form id="tt-clobal-search-form" class="form-btn-inside" method="get" action="search-results.html">
											<input type="text" id="tt-clobal-search-input" name="search" placeholder="Type your keywords ...">
											<button type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div> <!-- /.tt-clobal-search-inner -->
									<div class="tt-clobal-search-close"><i class="tt-close-btn tt-close-light"></i></div>
								</div> <!-- /.tt-clobal-search -->
							</li>
							<!-- End search -->

							<!-- Begin tt-dropdown (languages) 
							===================================
							* Use class "tt-dropdown-dark" to enable dropdown dark style.
							-->
							<li class="tt-dropdown-wrap tt-dropdown-master tt-dropdown-dark tt-dropdown-right tt-tools-lang">
								<a href="#0"><img src="assets/img/flags/gb.png" alt="English"> EN</a>
								<ul class="tt-dropdown">
									<li><a href="" title="English"><img src="assets/img/flags/gb.png" alt="English"> EN</a></li>
									<li><a href="" title="French"><img src="assets/img/flags/fr.png" alt="French"> FR</a></li>
									<li><a href="" title="Deutsch"><img src="assets/img/flags/de.png" alt="Deutsch"> DE</a></li>
								</ul> <!-- /.tt-dropdown -->
							</li>
							<!-- End tt-dropdown -->

							<!-- Begin call to action button -->
							<li>
								<a href="https://themeforest.net/item/sepia-photography-portfolio-html-website-template/20195226?ref=Themetorium" class="tt-tools-button" target="_blank">Buy<span class="hide-from-sm"> This Theme</span>!</a>
							</li>
							<!-- End call to action button -->
						</ul>
					</div>
					<!-- End menu tools -->

					<!-- Collect the nav links for toggling 
					========================================
					* Use class "tt-submenu-dark" to enable submenu dark style.
					-->
					<div class="tt-menu-collapse tt-submenu-dark">
						<ul class="tt-menu-nav">

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="">
								<a href="index.php">Home</a>
							</li>
							<!-- End submenu (sub-master) -->

							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="tt-submenu-wrap tt-submenu-master">
								<a href="about.php">More Information</a>
								<ul class="tt-submenu">
									<li><a href="eventGoal.php">Goal of the event</a></li>
									<li><a href="eventRules.php">Event Rules</a></li>
									<li><a href="location.php">Location and Travel Guide</a></li>
									<li><a href="#4">About Me 2 Fluid</a></li>
								</ul> <!-- /.tt-submenu -->
							</li>
							<!-- End submenu (sub-master) -->



							<!-- Begin submenu (submenu master)
							==================================== -->
							<li class="">
								<a href="contact.php">Contact</a>
							</li>
							<!-- End submenu (sub-master) -->



						</ul> <!-- /.tt-menu-nav -->
					</div> <!-- /.tt-menu-collapse -->

				</nav> 
				<!-- End main menu -->

			</div>
			<!-- End header inner -->

		</header>
		<!-- End header -->
