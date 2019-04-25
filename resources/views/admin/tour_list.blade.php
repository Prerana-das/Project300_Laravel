@extends('layouts/admin_master')
@section('title')
Tour List 
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="tour-list-content">
							 <a class="add-btn" href="{{action('Admin\AllTourController@add_allTour')}}">Add Tour</a>
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Tour Name</th> 
								  <th scope="col">Tour length</th>	 	 	
								  <th scope="col">Description </th>
								  <th scope="col">Image </th>
								  <th scope="col">Start Place </th>
								  <th scope="col">Start Time </th>
								  <th scope="col">Return Time </th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>

							  	@foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->tour_ID}}</th>
								   <td>{{$row->tour_name}}</td>
								  <td>{{$row->tour_length}}</td>
								  <td>{{$row->tour_description}}</td>
								  <td><img style="width: 60px; height: 40px" src="{{asset('public/uploads/Tours/'.$row->imageName)}}"></td>
								  <td>{{$row->start_place}}</td>
								  <td>{{$row->start_time}}</td>
								  <td>{{$row->return_time}}</td>
								  <td>
								  	<a href="{{action('Admin\CategoryController@edit_category', ['id' => $row->categoryID])}}"><i class="fas fa-edit"></i></a>
								  	<a href="{{action('Admin\CategoryController@del', ['id' => $row->categoryID])}}" onclick="return confirm('Are you sure to delete?')" title="Delete">
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