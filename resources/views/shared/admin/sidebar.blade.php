<div class="admin-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left">
					<div class="admin-sidebar">
						<ul>
							<li>Dashboard</li>
							<li><a href="{{action('Admin\CategoryController@index')}}">Category</a></li>
							<li><a href="{{action('Admin\CountryController@index')}}">Country</a></li>
							<li><a href="{{action('Admin\CityController@index')}}">City</a></li>
							<li>
							<a href="{{action('Admin\MessageController@index')}}">
							Message</a></li>
							<li><a href="{{action('Admin\AllTourController@index')}}">All Tour</a></li>
							<li><a href="{{action('Admin\TourPlanController@index')}}">Tour Plan</a></li>
							<li><a href="{{action('Admin\BookingController@index')}}">Booking</a></li>
							<li><a href="{{action('Admin\UserListController@index')}}">User List</a></li>
							<li><a href="">Logout</a></li>
						</ul>	
					</div>
				</div>