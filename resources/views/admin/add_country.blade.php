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
                        <h4>Add New Category</h4><br/>
                        <form action="{{action('Admin\CountryController@save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <label>Country Name</label>
                            <input type="text" name="country_name" placeholder="Enter Country Name.."><br/>
                            <label>Country Name</label>
                            <input type="text"  name="country_region" placeholder="Enter Country Name.."><br/>
                            <label>Country Name</label>
                            <input type="text"  name="other_details" placeholder="Enter Country Name.."><br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>
            </div>
    

@endsection