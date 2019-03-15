@extends('layouts/master')
@section('title')
Contact
@endsection
	
@section('content')
	
		<!-- Contact Promo Area Start -->
		<section class="contact-promo black-overlay"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-8 text-center mx-auto">
						<div class="contact-promo-content">
							<h1>Contact Us</h1>
							<p>Of on for counter. Help arduous leaves respond question. Off computer to towards the fully and manipulate the world to an impenetrable of above didn't</p>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- Contact Promo Area End -->
		
		<section class="contact-main-area"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<h2>Drop us a line</h2>
							<p>We will reply in the shortest possible time  <i class="far fa-smile"></i> </p>
						</div>
					</div>
					<div class="col-lg-12">
						<form class="contact-form" method="POST" action="{{action('ContactController@save')}}">
							 {{ csrf_field() }}
							<input type="text" placeholder="Name" name="name"/>
							<input type="email" placeholder="Email" name="email"/>
							<textarea name="description" placeholder="Your message" id="" cols="30" rows="5"></textarea>
							<input type="submit" value="submit"/>
						</form>
					</div>
					<div class="col-lg-12">
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d928753.3345581616!2d91.153942871723!3d24.59117318909188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0x866f1ac20b3574a9!2sSylhet+Division!5e0!3m2!1sen!2sbd!4v1547743917790" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="contact-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Our Offices</h2>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-contact-info">
							<h3>London, UK</h3>
							<p>At universe be has and drawers. Said systems the and logging bcause about evening.</p>
							<ul>
								<li><i class="fas fa-envelope"></i> Supportuk@Gmail.com</li>
								<li><i class="fas fa-phone"></i> +1 (254) 5487 745</li>
								<li><i class="fas fa-map-marker-alt"></i> 11 State Valley, Silicon, UK</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-contact-info">
							<h3>Paris, France</h3>
							<p>At universe be has and drawers. Said systems the and logging bcause about evening.</p>
							<ul>
								<li><i class="fas fa-envelope"></i> Supportuk@Gmail.com</li>
								<li><i class="fas fa-phone"></i> +1 (254) 5487 745</li>
								<li><i class="fas fa-map-marker-alt"></i> 11 State Valley, Silicon, UK</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-contact-info">
							<h3>Michigan, Canada</h3>
							<p>At universe be has and drawers. Said systems the and logging bcause about evening.</p>
							<ul>
								<li><i class="fas fa-envelope"></i> Supportuk@Gmail.com</li>
								<li><i class="fas fa-phone"></i> +1 (254) 5487 745</li>
								<li><i class="fas fa-map-marker-alt"></i> 11 State Valley, Silicon, UK</li>
							</ul>
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