@extends('layouts/master')
@section('title')
	Info

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
							<span><a href="index.html">Home</a> > <a href="tour.html">Tour</a> > <a href="single_tour_information.html">Explore Las Vegas</a></span>
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
		<section class="info-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="info-header">
									<ul>
										<li><a href=""><i class="fas fa-file-alt"></i>6days</a></li>
										<li><a href=""><i class="fas fa-clipboard-list"></i>Las Vegas USA</a></li>
										<li><a href=""><i class="fas fa-map-marker-alt"></i>LOCATION</a></li>
										<li><a href=""><i class="fas fa-camera"></i>GALLERY</a></li>
										<li><a href=""><i class="far fa-thumbs-up"></i>REVIEWS</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="information">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									@foreach($tour as $row)
									<div class="info-title">
										
										<h1>{{$row->tour_name}}</h1>
										<h6>$1075 <span>/ Per person<span></h6>
										<ul>
											<li>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</li>
											<li>( 4 Review )</li>
										</ul>
										<p></p>
										
									</div>
									@endforeach
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-gutters">
									<div class="info-list">
										<ul class="info-left">
											<li>Destination</li>
											<li>Departour/Return </li>
											<li>Departour Time</li>
											<li>Return Time </li>
											<li>Included</li>
											<li>Exclude</li>
										</ul>
										@foreach($tour as $row)
										<ul class="info-right">

											<li>{{$row->tour_name}}</li>
											<li>{{$row->start_place}}</li>
											<li>{{$row->start_time}}</li>
											<li>{{$row->return_time}}</li>
											<li>
												<ul>

													<li><i class="far fa-check-circle"></i> Airfares</li>
													<li><i class="far fa-check-circle"></i> Tour Guide</li>
												</ul>
												<ul>
													<li><i class="far fa-check-circle"></i> Hotel Accomodations</li>
													<li><i class="far fa-check-circle"></i> Local Transportation</li>
												</ul>
											</li>
											<li>
												<ul>
													<li><i class="far fa-times-circle"></i> Departour Taxes</li>
													<li><i class="far fa-times-circle"></i> Entrance Fees</li>
												</ul>
												<ul>
													<li><i class="far fa-times-circle"></i> No Insurance Policy</li>
													<li></li>
												</ul>
											</li>
											
										</ul>
										@endforeach
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
								<form  method="POST" action="{{action('BookingController@save')}}">
									 {{ csrf_field() }}
									
									<input type="hidden" placeholder="" name="tour_ID" />
									<input type="name" placeholder="&#xf007;  Name" name="name" />
									<input type="email" placeholder="&#xf0e0; Email"  name="email" />
									<input type="text" placeholder="&#xf095;  Phone number"  name="phone" />
									<input type="text" name="no_of_person" placeholder="&#xf0c0;  Number of person" />
									<input type="text" name="requestval" placeholder="&#xf171;  Special Request" />
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