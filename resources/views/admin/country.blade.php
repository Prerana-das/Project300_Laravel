@extends('layouts/admin_master')
@section('title')
Country 
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="country-content">
							 <a class="add-btn" href="{{action('Admin\CountryController@add_country')}}">Add Country</a>
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Country Name</th>
								  <th scope="col">Country Image</th>
								  <th scope="col">Country Region</th>
								  <th scope="col">Details</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	@foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->countryID}}</th>
								  <td>{{$row->country_name}}</td>
								  <td><img style="width: 60px; height: 40px" src="{{asset('public/uploads/Country/'.$row->country_img)}}"></td>
								  <td>{{$row->country_region}}</td>
								  <td>{{$row->other_details}}<br/></td>
								  <td>
								  	<a href="{{action('Admin\CountryController@edit_country', ['id' => $row->countryID])}}"><i class="fas fa-edit"></i></a>
								  	<a href="{{action('Admin\CountryController@del', ['id' => $row->countryID])}}" onclick="return confirm('Are you sure to delete?')" title="Delete">
								  		<i class="far fa-trash-alt"></i></a></td>
								</tr>
								 @endforeach
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection