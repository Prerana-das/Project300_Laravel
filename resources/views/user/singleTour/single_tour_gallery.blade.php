@extends('layouts/master')
@section('title')
Gallery
@endsection
	
@section('content')
	
		<!-- Tour Promo Area Start -->
		<section class="single-tour-promo black-overlay"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center mx-auto">
						<div class="tour-promo-content">
							<h1>Explore Las Vegas</h1>
							<p>Of on for counter. Help arduous leaves respond question. Off computer to towards the fully and manipulate the world to an impenetrable of above didn't</p>
							<span><a href="index.html">Home</a> > <a href="tour.html">Tour</a> > <a href="single_tour_gallery.html">Explore Las Vegas</a></span>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-12">
						<div class="tour-menu">
							<ul>
								<li><a href="{{action('SingleTour\InformationController@index')}}"><i class="fas fa-file-alt"></i>INFORMATION</a></li>

								<li><a href="{{action('SingleTour\TourPlanController@index')}}"><i class="fas fa-clipboard-list"></i>TOUR PLAN</a></li>

								<li><a href="{{action('SingleTour\TourMapController@index')}}"><i class="fas fa-map-marker-alt"></i>LOCATION</a></li>

								<li><a href="{{action('SingleTour\TourGalleryController@index')}}"><i class="fas fa-camera"></i>GALLERY</a></li>
								
								<li><a href="{{action('SingleTour\TourReviewController@index')}}"><i class="far fa-thumbs-up"></i>REVIEWS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Tour Promo Area End -->
		
		<!-- Gallery Area Start -->
		<section class="single-tour-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-left">
						<div class="section-title">
							<h2>Tour Gallery</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="gallery">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour1.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour2.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour3.jpg" alt="tour1" />
									</div>
								</div>	
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour4.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour5.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour6.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour7.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour8.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour9.jpg" alt="tour1" />
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 grid-item">
									<div class="single-gallery">
										<img src="images/tour/tour10.jpg" alt="tour1" />
									</div>
								</div>	
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="gallery-social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="single-tour-sidebar">
							<div class="post-request">
								<h4>Book a tour Now!</h4>
								<form action="">
									<input type="name" placeholder="&#xf007;  Name" />
									<input type="email" placeholder="&#xf0e0;  Email" />
									<input type="name" placeholder="&#xf095;  Phone number" />
									<input type="name" placeholder="&#xf073;  15/11/2018" />
									<input type="name" placeholder="&#xf0c0;  Number of person" />
									<input type="name" placeholder="&#xf171;  Special Request" />
									<input type="submit" value="submit"/>
								</form>
							</div>
							<div class="add">
								<p>50% Off  on</p>
								<h4>Black Friday</h4>
								<img src="images/hd-travel.png" alt="add" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Gallery Area End -->
		
		<!-- Tour Feature Area Start -->
		<section class="feature-area gallery-feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="section-title">
									<h2>Related Tours</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="single-feature">
									<div class="feature-img">
										<img src="images/bangladesh.jpg" alt="feature" />
									</div>
									<div class="feature-content">
										<span>$250</span>
										<p><i class="fas fa-folder"></i>  Cultural, Relax</p>
										<ul>
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>(5)
											</li>
										</ul>
									</div>
									<div class="gallery-feature-content">
										<h4>Florence, Italy</h4>
										<ul>
											<li><i class="fas fa-calendar-alt"></i>  24 Nov 2018</li>
											<li><i class="fas fa-users"></i>  Availability: 12</li>
										</ul>
										<p>Queen, indulged you project I in it getting come in myself their...</p>
										<a href="#">View Details</a>
									</div>
								</div>
							</div>	
							<div class="col-lg-4">
								<div class="single-feature">
									<div class="feature-img">
										<img src="images/shillong.jpg" alt="feature" />
									</div>
									<div class="feature-content">
										<span>$250</span>
										<p><i class="fas fa-folder"></i>  Cultural, Relax</p>
										<ul>
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>(5)
											</li>
										</ul>
									</div>
									<div class="gallery-feature-content">
										<h4>Florence, Italy</h4>
										<ul>
											<li><i class="fas fa-calendar-alt"></i>  24 Nov 2018</li>
											<li><i class="fas fa-users"></i>  Availability: 12</li>
										</ul>
										<p>Queen, indulged you project I in it getting come in myself their...</p>
										<a href="#">View Details</a>
									</div>
								</div>
							</div>	
							<div class="col-lg-4">
								<div class="single-feature">
									<div class="feature-img">
										<img src="images/srilanka.jpg" alt="feature" />
									</div>
									<div class="feature-content">
										<span>$250</span>
										<p><i class="fas fa-folder"></i>  Cultural, Relax</p>
										<ul>
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>(5)
											</li>
										</ul>
									</div>
									<div class="gallery-feature-content">
										<h4>Florence, Italy</h4>
										<ul>
											<li><i class="fas fa-calendar-alt"></i>  24 Nov 2018</li>
											<li><i class="fas fa-users"></i>  Availability: 12</li>
										</ul>
										<p>Queen, indulged you project I in it getting come in myself their...</p>
										<a href="#">View Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Tour Feature Area Start -->
		
		<!-- Contact Area Start -->
		<section class="contact-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="contact">
							<p><span><i class="fas fa-phone"></i> Call Now:</span>+1 (254) 784 9651</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Area End -->
		
@endsection
