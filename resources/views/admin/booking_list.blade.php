@extends('layouts/admin_master')
@section('title')
Booking List
@endsection

@section('content')
<div class="col-lg-10">
	<div class="row">
		<div class="admin-content">
			<div class="row">
				<div class="col-lg-12">
					<div class="booking-list-content">
						<table class="table table-bordered">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Name </th>
							   <th scope="col">Email </th>
							    <th scope="col">Phone </th>
							  <th scope="col">No of Person</th> 	
							  <th scope="col">Special Request </th>
							   <th scope="col">Date </th>
							  <th scope="col">Action</th>
							   <th scope="col">tour name</th>
							</tr>
						  </thead>
						  <tbody>
						  	 @foreach($table as $row)
							<tr>
							  <th scope="row">{{$row->bookID}}</th>
							  <td>{{$row->name}}</td>
							  <td>{{$row->email}}</td>
							  <td>{{$row->phone}}</td>
							  <td>{{$row->no_of_person}}</td>
							  <td>{{$row->request}}</td>
							   <td>{{$row->created_at}}</td>
							  <td><a href=""><i class="fas fa-edit"></i></a><a href=""><i class="far fa-trash-alt"></i></a></td>
							  <td> @foreach($tour as $row)
                                <p>{{$row->tour_name}}</p>
                                @endforeach</td>
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