@extends('layouts/admin_master')
@section('title')
User List 
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="user-list-content">
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">User Name</th>
								  <th scope="col">Email</th>
								  <th scope="col">User Type</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	 @foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->id}}</th>
								  <td>{{$row->name}}</td>
								  <td>{{$row->email}}</td>
								  <td>{{$row->userType}}</td>
								  <td><a href=""><i class="fas fa-edit"></i></a><a href=""><i class="far fa-trash-alt"></i></a></td>
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