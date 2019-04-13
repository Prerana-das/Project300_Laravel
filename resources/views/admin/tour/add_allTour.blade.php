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
                        <h4>ADD New Tour</h4><br/>
                        <form action="{{action('Admin\AllTourController@save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                             <label>Select Catgory</label>
                            <select name="categoryID" required="">
                                <option value="">Select a Category</option>
                                @foreach($category as $row)
                                <option value="{{$row->categoryID}}">{{$row->name}}</option>
                                @endforeach
                            </select>

                             <label>Select Country</label>
                            <select name="countryID" required="">
                                <option value="">Select a country</option>
                                @foreach($country as $row)
                                <option value="{{$row->countryID}}">{{$row->country_name}}</option>
                                @endforeach
                            </select>

                             <label>Select City</label>
                            <select name="cityID" required="">
                                <option value="">Select a City</option>
                                @foreach($city as $row)
                                <option value="{{$row->cityID}}">{{$row->city_name}}</option>
                                @endforeach
                            </select>

                             <label>Tour name</label>
                            <input type="text" id="" name="tour_name" placeholder="Enter Category Name.."><br/>

                            
                            <label>Tour length</label>
                            <input type="text" name="tour_length" placeholder="Tour length.."><br/>
                            <label>Description</label>
                            <input type="text" name="tour_description" placeholder="Description.."><br/>
                            <label>Image</label>
                    
                            <input onchange="document.getElementById('deptImage').src = window.URL.createObjectURL(this.files[0])" type="file" placeholder="Image" name="imageName" class="form-control" >

                            <label>Start place</label>
                            <input type="text" name="start_place" placeholder="Start place.."><br/>
                            <label>Start time</label>
                            <input type="text" name="start_time" placeholder="Start time.."><br/>
                            <label>Return time</label>
                            <input type="text" name="return_time" placeholder="Return time.."><br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                 </div>
            </div>
    

@endsection