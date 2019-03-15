@extends('layouts/master')
@section('title')
Tour
@endsection
	
@section('content')
	
		<!-- Tour Promo Area Start -->
		<section class="tour-promo black-overlay"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center mx-auto">
						<div class="tour-promo-content">
							<h1>Tour List</h1>
							<p>Of on for counter. Help arduous leaves respond question. Off computer to towards the fully and manipulate the world to an impenetrable of above didn't</p>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- Tour Promo Area End -->
		
		<section class="tour-content-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="tour-sidebar">
							<div class="filter-board">
								<p>FILER BOARD</p>
							</div>
							<div class="destination">
								<p>Destination</p>
							</div>
							<div class="departour">
								<p>Departour Date</p>
							</div>
							<div class="categories">
								<p>Categories</p>
								 <form action="">
								 <ul>
								 	<li><input type="checkbox" name="" value="">History</li>
								 	<li><input type="checkbox" name="" value="">Agritourism</li>
								 	<li><input type="checkbox" name="" value="">Neutral</li>
								 </ul>
								 <ul>
								 	<li><input type="checkbox" name="" value="">Culture</li>
								 	<li><input type="checkbox" name="" value="">Urban Tour</li>
								 	<li><input type="checkbox" name="" value="">Relax</li>
								 </ul>
								</form> 
							</div>
							<div class="price-table">
								<p>Price Table</p>
								<ul>
									<li>$350</li>
									<li>$1000</li>
								</ul>
								<span></span>
								<a href="#">Filter</a>
							</div>
							<div class="duration">
								<p>Duration</p>
								<form action="">
								  <ul>
								 	<li><input type="checkbox" name="" value="">1-3 Days</li>
								 	<li><input type="checkbox" name="" value="">5-7 Days</li>
								 </ul>
								 <ul>
								 	<li><input type="checkbox" name="" value="">1-3 Days</li>
								 	<li><input type="checkbox" name="" value="">5-7 Days</li>
								 </ul>
								</form> 
							</div>
							
						</div>
					</div>
					
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="tour-main-content">
							<div class="tour-header">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3">
												<div class="tour-list">
													<ul>
														<li><i class="fas fa-th"></i>Grid</li>
														<li><i class="fas fa-list-ul"></i>List</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-5">
												<div class="sorting">
													<span>Sort by</span>
													<select>
													  <option value="">Default sorting</option>
													  <option value="">Saab</option>
													  <option value="">Opel</option>
													  <option value="">Audi</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="tour-header-right">
													<p>Showing 1–6 of 42 results</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tour-details">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/bangladesh.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/shillong.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/srilanka.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/maxresdefault.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/Tasman_Lake.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="single-tour-details">
											<div class="row">
												<div class="col-lg-5">
													<div class="tour-img">
														<img src="{{asset('public/images/Hero_RomeItaly.jpg')}}" alt="feature" />
													</div>
													<div class="tour-img-cont">
														<span>$250</span>
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
												</div>
												<div class="col-lg-7">
													<div class="tour-content">
														<h4>Explore Silong, India</h4>
														<ul>
															<li><i class="fas fa-calendar-alt"></i> 24 Nov 2018</li>
															<li><i class="fas fa-location-arrow"></i> Cultural, Relax</li>
															<li><i class="fas fa-users"></i> Availability: 12</li>
														</ul>
														<p>Into derived more gm pointing, out and same was the duty commas, made control do some stupid of diet, line then be would.</p>
														<a class="border-btn" href="#">View Details</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
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