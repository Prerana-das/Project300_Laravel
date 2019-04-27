@extends('layouts/master')
@section('title')
Home
@endsection
	
@section('content')
		<!-- Header Promo Area Start -->
		<section class="header-promo-area"> 
			<div class="container">
				<div class="row">
					<div class="header-promo">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
									<div class="promo-content">
										<h1>Make your tour amazing with us</h1>
										<p>On into not, sleeping have objects on from it project and but by we indication a he own the office as bed in the hat ideas rippedup.</p>
										<a href="#" class="block-btn">Destinations</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
									<div class="promo-links" style="visibility: hidden">
										<h4>Find your tour now!</h4>
										<form action="">
											<input type="text" placeholder="Find your tour now!" />
											<input type="email" placeholder="Destinations" />
											<input type="text" placeholder="Tour Type" />
											<input type="text" placeholder="15/11/2018" />
											<input type="text" placeholder="Number of person" />
											<input type="submit" value="Find Tours"/>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Header Promo Area End -->
		
		<!-- About Area Start -->
		<section class="about-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="about-content">
							<span>About Us</span>
							<h1>Make your tour memorable and safe<br/> with us</h1>
							<p>The introduced now, the they expect, animals the desk, and catch temple. More seven my couldn't it the character using recommended. Fees, more the them. Saw and deep classes create it brief.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="about-img">
							<img src="{{asset('public/images/about1.jpg')}}" alt="Personal Portfolio">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Area End -->
		
		<!-- Feature Area Start -->
		<section class="feature-area">
			<div class="container">
				<div class="features">
					<div class="row">
						<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
							<div class="section-title">
								<span>The Best of All</span>
								<h2>Featured Tours</h2>
							</div>
						</div>
					</div>
					<div class="row">
						@foreach($tour as $row)
						<div class="col-lg-4 col-md-6  col-sm-12 col-xs-12">
							<div class="single-feature">
								<div class="feature-img">
									<img src="{{asset('public/uploads/Tours/'.$row->imageName)}}" alt="feature" />
								</div>
								<div class="feature-content">
									<span>$250</span>
									<p>{{$row->tour_name}}</p>
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
								<div class="feature-hover-effect">
									<h4>{{$row->tour_name}}</h4>
									<ul>
										<li>{{$row->tour_description}}</li>
										<!--<li>Buffet Lunch and Dinner</li>
										<li>Medical Support</li>
										<li>Updown with Modern Air</li>-->
									</ul>
									<a href="{{action('SingleTour\InformationController@index',['id' => $row->tour_ID])}}">Read More</a>
								</div>
							</div>
						</div>	
						@endforeach
						
					</div>
				</div>
				<div class="col-lg-12  col-md-12  col-sm-12 col-xs-12 text-center">
					<a class="block-btn all-tour-btn" href="web.php">See All Tours</a>
				</div>
			</div>
		</section>
		<!-- Feature Area End -->
		
		<!-- CTA Area Start -->
		<section class="cta-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form action="">
							<span>Destination<br/><input type="text" placeholder="&#xf041;  Find Destination, tours etc" /></span>
							<span>When <br/><input type="text" placeholder="&#xf073;  16/11/18" /></span>
							<span>Guests <br/><input type="text" placeholder="&#xf007;  01" /></span>
							<span><input class="block-btn" type="submit" value="Search Tour"/></span>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- CTA Area End -->
		
		<!-- Destination Area Start -->
		<section class="destination-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
						<div class="section-title">
							<span>Best places of World</span>
							<h2>Destination</h2>
						</div>
					</div>
				</div>
				<div class="row">
					 @foreach($country as $row)
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="single-destination">
							<div class="destination-img">
								<img src="{{asset('public/uploads/Country/'.$row->country_img)}}" alt="destination" />
							</div>
							<h3>{{$row->country_name}}</h3>
							<span>3 Tours</span>
						</div>
					</div>
					 @endforeach
					<!--<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="single-destination">
							<div class="destination-img">
								<img src="{{asset('public/images/Canada.jpg')}}" alt="destination" />
							</div>
							<h3>Canada</h3>
							<span>3 Tours</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="single-destination">
							<div class="destination-img">
								<img src="{{asset('public/images/lonavla.jpg')}}" alt="destination" />
							</div>
							<h3>India</h3>
							<span>3 Tours</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
						<div class="single-destination">
							<div class="destination-img">
								<img src="{{asset('public/images/Koh-Lipe.jpg')}}" alt="destination" />
							</div>
							<h3>Thailand</h3>
							<span>3 Tours</span>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- Destination Area End -->
		
		<!-- Offers Area Start -->
		<section class="offers-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
						<div class="section-title">
							<span>Best Promotion</span>
							<h2>Deals and Discount</h2>
						</div>
					</div>
				</div>
				<div class="offers">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/florence.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% off</span>
								</div>
								<div class="offer-content">
									<h4>Florence, Italy</h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="{{action('SingleTour\InformationController@index')}}">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/shutterstock111.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% <br/>off</span>
								</div>
								<div class="offer-content">
									<h4>Porto, Portugal</h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="#">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/gn-gift_guide_variable.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% off</span>
								</div>
								<div class="offer-content">
									<h4>Bali, Indonesia</h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="#">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/jhmr_events.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% off</span>
								</div>
								<div class="offer-content">
									<h4>Jackson Hole, Island</h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="#">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/event2.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% off</span>
								</div>
								<div class="offer-content">
									<h4>Florence, Italy</h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="#">View Details</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="single-offer">
								<div class="offer-img">
									<img src="{{asset('public/images/987ff5stockhome.jpg')}}" alt="offers" />
									<ul>
										<li>&#36;2060</li>
										<li>&#36;1699</li>
									</ul>
									<span>20% off</span>
								</div>
								<div class="offer-content">
									<h4>Kauai, Hawaii </h4>
									<ul>
										<li>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											(4.5)
										</li>
									</ul>
									<p>Is out produce outcomes said out have bale avoided cities a he detailed immune...</p>
									<a href="#">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Offers Area End -->
		
		<!-- Service Area Start -->
		<section class="service-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
						<div class="section-title">
							<span>Best of Us</span>
							<h2>Why Travel with Travello</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="services  container-fluid">
				<div class="services-bg">
				<div class="container">
					<div class="row"> 
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single-service wow animated slideInUp">
								<img src="{{asset('public/images/service/service1.png')}}" alt="service" />
								<h3>Stay Safe</h3>
								<p>To blonde a for no determined the still on in and raised will each or prepared be in lowest structure write that blind in</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
							<div class="single-service wow animated slideInUp">
								<img src="{{asset('public/images/service/service2.png')}}" alt="service" />
								<h3>Quality Service</h3>
								<p>To blonde a for no determined the still on in and raised will each or prepared be in lowest structure write that blind in </p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single-service wow animated slideInUp">
								<img src="{{asset('public/images/service/service3.png')}}" alt="service" />
								<h3>Save Money</h3>
								<p>To blonde a for no determined the still on in and raised will each or prepared be in lowest structure write that blind in </p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- Service Area End -->
		
		<!-- Blog Area Start -->
		<section class="blog-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 text-center">
						<div class="section-title">
							<span>Events & Blog</span>
							<h2>Travell Tips and Blog</h2>
						</div>
					</div>
				</div>
				<div class="blog">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{asset('public/images/shutterstock.jpg')}}" alt="blog" />
									<span>TRAVEL</span>
								</div>
								<div class="blog-content">
									<ul>
										<li>Denny Chily</li>
										<li>14 Sep 2018</li>
									</ul>
									<h4>Mice rationale posterity so yoself divided suppovmsedly </h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{asset('public/images/Bali.jpg')}}" alt="blog" />
									<span>LIFESTYLE</span>
								</div>
								<div class="blog-content">
									<ul>
										<li>Orpan Doly</li>
										<li>14 Sep 2018</li>
									</ul>
									<h4>With in he tone most fie phase size ideas warned</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single-blog">
								<div class="blog-img">
									<img src="{{asset('public/images/shutterstock-6.jpg')}}" alt="blog" />
									<span>PHOTOGRAPHY</span>
								</div>
								<div class="blog-content">
									<ul>
										<li>Orpan Doly</li>
										<li>14 Sep 2018</li>
									</ul>
									<h4>Has to various not and the what rationalize of he</h4>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</section>
		<!-- Team Area End -->
		
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
		
