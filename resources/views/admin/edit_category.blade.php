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
							<form action="{{action('Admin\CategoryController@edit')}}" method="post" enctype="multipart/form-data">
                						{{csrf_field()}}
							<table class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <th scope="row">1</th>
								   <input type="hidden" name="categoryID" value="{{$table->categoryID}}">
								  <td><input type="text" id="category" name="name" value="{{$table->name}}" placeholder="Enter Category Name.."></td>
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