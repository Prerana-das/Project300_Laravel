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

                             <label>Country Image</label>
                            <input type="file" name="country_img" placeholder=""><br/>

                            <label>Country Region</label>
                            <input type="text"  name="country_region" placeholder=""><br/>
                            <label>Other Details</label>
                            <input type="text"  name="other_details" placeholder=""><br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>
            </div>
    

@endsection