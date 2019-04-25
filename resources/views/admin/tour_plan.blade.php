@extends('layouts/admin_master')
@section('title')
Tour Plan
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="tour-plan-content">
							<a class="add-btn" href="{{action('Admin\TourPlanController@add_TourPlan')}}">Add Tour Plan</a>
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Plan Title</th>	 	
								  <th scope="col">Description</th>
								  <th scope="col">Others Details</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
								  	@foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->plan_ID}}</th>
								  <td>{{$row->plan_title}}</td>
								  <td>{{$row->description}}</td>
								  <td>{{$row->others_details}}</td>
								  <td>
								  	<a href=""><i class="fas fa-edit"></i></a>
								  	</td>
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
			
			