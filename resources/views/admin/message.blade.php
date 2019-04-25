@extends('layouts/admin_master')
@section('title')
Messages
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="message-content">
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								  <th scope="col">Email</th>
								  <th scope="col">Messages</th>
								  <th scope="col">Date</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	 @foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->messageID}}</th>
								  <td>{{$row->name}}</td>
								  <td>{{$row->email}}</td>
								  <td>{{$row->description}}</td>
								  <td>{{$row->created_at}}</td>
								  <td>
								  	<a href="{{action('Admin\MessageController@del', ['id' => $row->messageID])}}" onclick="return confirm('Are you sure to delete?')" title="Delete">
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