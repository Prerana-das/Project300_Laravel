@extends('layouts/admin_master')
@section('title')
Category
@endsection

@section('content')
	<div class="col-lg-10">
		<div class="row">
			<div class="admin-content">
				<div class="row">
					<div class="col-lg-12">
						<div class="category-content">
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Category Name</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">1</th>
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