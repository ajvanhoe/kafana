@extends('layouts.main')

@section('content')


<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        <!--  THEMEPUNCH BANNER -->
        @include('partials.slider')

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{route('welcome')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo-resto.png" alt="Mrtav Gladan Logo"></a>
						<a href="{{route('welcome')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Mrtav Gladan Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation -->
					@include('partials.navigation')

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/4.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/5.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

					<div class="clear my-2"></div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/4.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/5.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

					<div class="clear my-2"></div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/4.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/5.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

					<div class="clear my-2"></div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/4.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="images/restaurant/new/5.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

					<div class="clear my-2"></div>

				</div>

				<div class="section dark bottommargin-lg" style="height: 500px;">
					<div class="container-fluid center clearfix vertical-middle">

						<i class="i-plain i-xlarge icon-food2 divcenter bottommargin"></i>

						<div class="slider-caption slider-caption-center">
							<h2 data-animate="fadeInUp">Brilliant Service</h2>
							<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">"Momentum poverty tackling fellows social impact. Expanding community ownership, future affiliate protect civil society. Bloomberg."</p>
						</div>

					</div>
					<div class="video-wrap">
						<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
							<source src='images/videos/explore.mp4' type='video/mp4' />
							<source src='images/videos/explore.webm' type='video/webm' />
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.35);"></div>
					</div>
				</div>

				
				<div class="clear my-2"></div>

				<div class="section nobg topmargin-lg nobottommargin">
					<div class="container clearfix">

						<div class="col_half nobottommargin center">

							<img src="images/restaurant/20.png" alt="Image" data-animate="fadeInLeft">

						</div>

						<div class="col_half nobottommargin col_last">

							<div class="heading-block" style="padding-top: 40px;">

								<h2>Fresh from the Garden.</h2>
								<span>Duis mollis, est non commodo luctus. Donec sed odio dui</span>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, repudiandae, maxime, earum, sapiente assumenda non odit laborum qui vero vel quos sint excepturi in laudantium.</p>

							<a href="#" class="button button-border button-large button-rounded topmargin-sm noleftmargin">View Recipes</a>

						</div>

					</div>
				</div>

				<div class="section nobg notopmargin noborder bottommargin-sm">
					<div class="container clearfix">

						<div class="col_half nobottommargin">

							<div class="heading-block" style="padding-top: 40px;">

								<h2>You'll be Lovin' It.</h2>
								<span>Duis mollis, est non commodo luctus. Donec sed odio dui</span>

							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, repudiandae, maxime, earum, sapiente assumenda non odit laborum qui vero vel quos sint excepturi in laudantium.</p>

							<a href="#" class="button button-border button-large button-rounded topmargin-sm noleftmargin">More Details</a>

						</div>

						<div class="col_half bottommargin-sm center col_last">

							<img src="images/restaurant/22.png" alt="Image" data-animate="fadeInRight">

						</div>

					</div>
				</div>

				<div class="container clearfix">

					<div class="col_one_fourth nobottommargin">

						<div class="fancy-title title-border">
							<h4>Opening Hours</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur facilis cumque amet suscipit odio.</p>

						<ul class="iconlist nobottommargin">
							<li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to 7PM</li>
							<li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
							<li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
						</ul>

					</div>

					<div class="col_one_fourth nobottommargin">

						<div class="fancy-title title-border">
							<h4>Our Buffet Menu</h4>
						</div>

						<p>Our Buffet Menu is unique &amp; filling consisting of different types of 5 Starters, 12 Full-Course Dishes, 9 Desserts &amp; 3 Mocktails which you are gonna relish to the core.</p>

						<a href="#" class="button button-rounded button-dark noleftmargin"><i class="icon-file-alt"></i> Browse Menu</a>

					</div>

					<div class="col_half nobottommargin col_last">

						<div class="fancy-title title-border">
							<h4>Gallery</h4>
						</div>

						<div class="masonry-thumbs grid-4 clearfix" data-lightbox="gallery" style="width: 100.3%;">
							<a href="images/restaurant/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/3.jpg" alt="Gallery Thumb 1" data-animate="zoomIn"></a>
							<a href="images/restaurant/5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/5.jpg" alt="Gallery Thumb 2" data-animate="zoomIn" data-delay="100"></a>
							<a href="images/restaurant/6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/6.jpg" alt="Gallery Thumb 3" data-animate="zoomIn" data-delay="200"></a>
							<a href="images/restaurant/7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/7.jpg" alt="Gallery Thumb 4" data-animate="zoomIn" data-delay="300"></a>
							<a href="images/restaurant/8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/8.jpg" alt="Gallery Thumb 5" data-animate="zoomIn" data-delay="400"></a>
							<a href="images/restaurant/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/10.jpg" alt="Gallery Thumb 6" data-animate="zoomIn" data-delay="500"></a>
							<a href="images/restaurant/11.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/11.jpg" alt="Gallery Thumb 7" data-animate="zoomIn" data-delay="600"></a>
							<a href="images/restaurant/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/restaurant/thumb/gallery/12.jpg" alt="Gallery Thumb 8" data-animate="zoomIn" data-delay="700"></a>
						</div>

					</div>

				</div>

				<div class="section parallax noborder dark footer-stick topmargin-lg" style="background-image: url('images/restaurant/4.jpg'); padding: 80px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="container clearfix">
						<div class="col_three_fifth nobottommargin">

							<div class="heading-block nobottomborder">
								<h3>Reviews</h3>
							</div>

							<div class="fslider restaurant-reviews" data-arrows="false" data-animation="slide">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<p class="lead">"Globalization fairness non-partisan visionary, institutions Aga Khan resolve. Results public-private partnerships, international development elevate scalable."</p>
											<span><strong>John Doe</strong>, New York Magazine</span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i>
										</div>
										<div class="slide">
											<p class="lead">"Medicine; experience in the field climate change achieve voice public-private partnerships process our ambitions. Sanitation."</p>
											<span><strong>Mary Jane</strong>, Chicago News</span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i>
										</div>
										<div class="slide">
											<p class="lead">"Healthcare forward-thinking public service, social innovation making progress. Arab Spring social analysis, equality treatment, diversification."</p>
											<span><strong>Luis Frank</strong>, France</span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i>
										</div>
									</div>
								</div>
							</div>

							<style>
								.restaurant-reviews .flex-control-nav {
									top: auto;
									bottom: 25px;
								}
							</style>

						</div>
					</div>
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

					<div class="col_full">

						<div class="heading-block center nobottommargin">
							<h2>Need to make a Reservation? <a href="tel:+381628238507"><strong>Call +381 62 823 8507</strong></a></h2>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2020 HepekSolutions<br>
						<!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">

							<a href="tel:+381628238507" class="social-icon si-small si-borderless si-call">
								<i class="icon-call"></i>
								<i class="icon-call"></i>
							</a>


							<a href="https://www.facebook.com/pages/category/Restaurant/Kafana-Gradimir-378304965635658" class="social-icon si-small si-borderless si-facebook" target="__blank">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>


							
						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>



@endsection
