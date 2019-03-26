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
								  <th scope="col">Tour length</th>	 	 	
								  <th scope="col">Description </th>
								  <th scope="col">Image </th>
								  <th scope="col">Description </th>
								  <th scope="col">Start Place </th>
								  <th scope="col">Start Time </th>
								  <th scope="col">Return Time </th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td>Mark</td>
								  <td><a href=""><i class="fas fa-edit"></i></a><a href=""><i class="far fa-trash-alt"></i></a></td>
								</tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection