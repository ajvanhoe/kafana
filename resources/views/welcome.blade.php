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
						<a href="{{route('welcome')}}" class="standard-logo" data-dark-logo="images/gradimir-logo.png"><img src="images/gradimir-logo.png" alt="Mrtav Gladan Logo"></a>
						<a href="{{route('welcome')}}" class="retina-logo" data-dark-logo="images/gradimir-logox2.png"><img src="images/gradimir-logox2.png" alt="Mrtav Gladan Logo"></a>
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
							<h2 data-animate="fadeInUp">@lang('content.service_section_headline')</h2>
							<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">@lang('content.service_section_text')</p>
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

                <!-- Subcontent -->
                <!-- //include -->

				<div class="container clearfix">

					<div class="col_one_fourth nobottommargin">

						<div class="fancy-title title-border">
							<h4>@lang('content.open_hours_title')</h4>
						</div>

						<p>@lang('content.open_hours_text')</p>

						<ul class="iconlist nobottommargin">
							<li><i class="icon-time color"></i> @lang('content.open_hours_workdays')</li>
							<li><i class="icon-time color"></i> @lang('content.open_hours_saturday')</li>
							<li><i class="icon-time text-danger"></i> @lang('content.open_hours_sundays')</li>
						</ul>

					</div>

					<div class="col_one_fourth nobottommargin">

						<div class="fancy-title title-border">
							<h4>@lang('content.sub_section_menu_title')</h4>
						</div>

						<p>@lang('content.sub_section_menu_text')</p>

						<a href="#" class="button button-rounded button-dark noleftmargin"><i class="icon-file-alt"></i> @lang('content.sub_section_menu_button')</a>

					</div>

					<div class="col_half nobottommargin col_last">

						<div class="fancy-title title-border">
							<h4>@lang('content.sub_section_gallery_title')</h4>
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

                <!-- Reviews -->
                @include('partials.reviews')

			</div>

		</section><!-- #content end -->

		<!-- Footer -->
        @include('partials.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>



@endsection
