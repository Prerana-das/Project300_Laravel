@extends('layouts/admin_master')
@section('title')
City
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="city-content">
							 <a class="add-btn" href="{{action('Admin\CityController@add_city')}}">Add City</a>
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">City Name</th>
								  <th scope="col">Country Name</th>
								  <th scope="col">Details</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	@foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->cityID}}</th>
								  <td>{{$row->city_name}}</td>
								  <td>{{$row->country['country_name']}}</td>
								  <td>{{$row->other_details}}</td>
								  <td>
								  	<a href="{{action('Admin\CityController@edit_city', ['id' => $row->cityID])}}"><i class="fas fa-edit"></i></a>
								  	<a href="{{action('Admin\CityController@del', ['id' => $row->cityID])}}" onclick="return confirm('Are you sure to delete?')" title="Delete">
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