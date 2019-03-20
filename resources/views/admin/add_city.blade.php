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
                            <label>Select Country</label>
                            <select name="countryID" required="">
                                <option value="">Select a country</option>
                                @foreach($country as $row)
                                <option value="{{$row->countryID}}">{{$row->country_name}}</option>
                                @endforeach
                            </select>
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