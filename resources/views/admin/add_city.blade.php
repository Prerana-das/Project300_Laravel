@extends('layouts/admin_master')

@section('title')
    Add City
@endsection
@section('content')
<div class="col-lg-10">
    <div class="row">
        <div class="admin-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-category-form">
                        <h4>New Category</h4><br/>
                        <form action="{{action('Admin\CityController@save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                             <label>City Name</label>
                            <input type="text"  name="city_name" placeholder="Enter City Name.."><br/>
                            <label>City Details</label>
                            <input type="text"  name="other_details" placeholder="Enter Other Details.."><br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>
            </div>
    

@endsection