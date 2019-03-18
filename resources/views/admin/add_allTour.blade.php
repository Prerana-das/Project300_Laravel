@extends('layouts/admin_master')

@section('title')
    Add Category
@endsection
@section('content')
<div class="col-lg-10">
    <div class="row">
        <div class="admin-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-category-form">
                        <h4>New Category</h4><br/>
                        <form action="{{action('Admin\CategoryController@save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label for="category">Category</label>
                            <input type="text" id="category" name="name" placeholder="Enter Category Name.."><br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>
            </div>
    

@endsection