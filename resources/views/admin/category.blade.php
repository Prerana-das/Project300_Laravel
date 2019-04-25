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
							 <a class="add-btn" href="{{action('Admin\CategoryController@add_category')}}">Add Category</a>
							<table id="dataTable" class="table table-bordered">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Category Name</th>
								  <th scope="col">Date</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	 @foreach($table as $row)
								<tr>
								  <th scope="row">{{$row->categoryID}}</th>
								  <td>{{$row->name}}</td>
								  <td>{{$row->created_at}}</td>
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

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "ASC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [1]}//For Column Order
                ]
            });
        });
    </script>

@endsection