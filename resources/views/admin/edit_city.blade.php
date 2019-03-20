@extends('layouts/admin_master')
@section('title')
Edit Messages
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="message-content">
							<h4>Edit Category</h4>
							<form action="{{action('Admin\CityController@edit')}}" method="post" enctype="multipart/form-data">
                						{{csrf_field()}}
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Country Name</th>
								  <th scope="col">City Name</th>
								  <th scope="col">City Details</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">1</th>
								   <input type="hidden" name="cityID" value="{{$table->cityID}}">
								  <td><input type="text" name="counrty_name" value="{{$table->country_name}}" placeholder="Country Name.."></td>
								  <td><input type="text" name="city_name" value="{{$table->city_name}}" placeholder="Enter City Name.."></td>
								  <td><input type="text" name="other_details" value="{{$table->other_details}}" placeholder="Enter City Details.."></td>
								</tr>
							  </tbody>
							</table>
							 <input type="submit" value="Submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection