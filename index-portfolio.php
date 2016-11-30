
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home - Portfolio Layout 1 | Canvas</title>

</head>
<?php
include_once "dbConnect.php";
?>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="index.html"><div>Home</div></a>

							</li>

						</ul>


						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='images/videos/explore.mp4' type='video/mp4' />
									<source src='images/videos/explore.webm' type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<a class="button button-full button-purple center tright header-stick bottommargin-lg">
					<div class="container clearfix">
						Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="container clearfix">

					<div class="heading-block center nobottomborder bottommargin-lg">
						<h1>New York based Creative Agency</h1>
						<span>Specializes in creating Brand Identity for emerging Startups</span>
					</div>

					<div class="col_one_third nobottommargin">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Why choose <span>Us</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third nobottommargin">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Our <span>VISI</span>.</h4>
						</div>

						<p>
							<?php
							$query1= "SELECT isi FROM visi WHERE  id_isi=1";
							$data1=mysqli_query($db,$query1);
							$rowData=mysqli_fetch_assoc($data1);
							foreach ($data1 as $rowData){
								echo "".$rowData['isi'];
							}

							?>
						</p>

					</div>

					<div class="col_one_third nobottommargin col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>What we <span>Do</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="clear"></div>

				</div>

				<div class="section nobottommargin">

					<div class="container clearfix">

						<!-- Portfolio Filter
						============================================= -->
						<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".pf-icons">Icons</a></li>
							<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
							<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
							<li><a href="#" data-filter=".pf-media">Media</a></li>
							<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

						</ul><!-- #portfolio-filter end -->

						<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Open Imagination</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-illustrations">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
									<span><a href="#">Illustrations</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-graphics pf-uielements">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay">
										<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-icons pf-illustrations">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-uielements pf-media">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/5.jpg" alt="Console Activity">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-graphics pf-illustrations">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-1.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-2.jpg" alt="Shake It"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-3.jpg" alt="Shake It"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-uielements pf-icons">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
									</a>
									<div class="portfolio-overlay">
										<a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-graphics">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
									<span><a href="#">Graphics</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-illustrations pf-icons">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9.jpg" alt="Bridge Side"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-1.jpg" alt="Bridge Side"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-2.jpg" alt="Bridge Side"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-graphics pf-media pf-uielements">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/4/10.jpg" alt="Study Table">
									</a>
									<div class="portfolio-overlay">
										<a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Study Table</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/11.jpg" alt="Workspace Stuff">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
							</article>

							<article class="portfolio-item pf-illustrations pf-graphics">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12.jpg" alt="Fixed Aperture"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12-1.jpg" alt="Fixed Aperture"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/12.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/12-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</article>

						</div><!-- #portfolio end -->


					</div>

				</div>

				<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false"data-items-xxs="3" data-items-xs="4" data-items-sm="5" data-items-md="6" data-items-lg="7" style="padding: 30px 0;">

					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/1.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/2.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/3.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/4.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/5.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/6.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/7.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/8.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/9.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/10.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/11.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/12.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/13.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="http://logofury.com/"><img src="images/clients/14.png" alt="Clients"></a></div>

				</div>


			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>