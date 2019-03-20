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
							<form action="{{action('Admin\CountryController@edit')}}" method="post" enctype="multipart/form-data">
                						{{csrf_field()}}
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Country Name</th> 
								  <th scope="col">Country Region</th> 
								  <th scope="col">Country Details</th> 	
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">1</th>
								   <input type="hidden" name="countryID" value="{{$table->countryID}}">
								  <td><input type="text" name="country_name" value="{{$table->country_name}}" placeholder="Enter Country Name.."></td>
								  <td><input type="text" name="country_region" value="{{$table->country_region}}" placeholder="Enter Country Region.."></td>
								  <td><input type="text" name="other_details" value="{{$table->other_details}}" placeholder="Enter Country Details.."></td>
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