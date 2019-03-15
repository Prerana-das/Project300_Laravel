	<header id="mainNav"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto text-center">
					<!-- Main menu Area start -->
					<div class="main-menu">
						<div class="navbar-collapse">
						<a href="#" class="toggle-menu">&#9776;</a>
							<ul class="nav-list" id="nav">
								<li class="nav-item"><a class="js-scroll-trigger current" href="{{action('mainController@index')}}">Home</a></li>
								<li class="nav-item"><a class="js-scroll-trigger" href="{{action('TourController@tour_view')}}">Tour</a></li>
								<li class="nav-item"><a class="js-scroll-trigger" href="{{action('DestinationController@destination_view')}}">Destination</a></li>
								<li class="nav-item"><a class="js-scroll-trigger" href="team.html">
								<img src="{{asset('public/images/travello.png')}}" alt="travello" /></a></li>
								<li class="nav-item dropdown">
									<a class="js-scroll-trigger" href="blog.html">Pages <i class="fas fa-sort-down"></i>
										<div class="dropdown-content">
										  <a href="{{action('FaqController@faq_view')}}">Faq</a>
										  <a href="{{action('GalleryController@gallery_view')}}">Gallery</a>
										  <a href="404.html">Error 404</a>
										  </div>
									</a>
								</li>
								<li class="nav-item"><a class="js-scroll-trigger" href="{{action('BlogController@blog_view')}}">Blog</a></li>
								<li class="nav-item"><a class="js-scroll-trigger" href="{{action('ContactController@contact_view')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					<!-- Main menu Area End -->
				</div>
			</div>
		</div>
	</header>
	<!-- Header Area End -->