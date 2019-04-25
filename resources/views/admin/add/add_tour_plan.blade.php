@extends('layouts/admin_master')

@section('title')
    Add Tour Plan
@endsection
@section('content')
<div class="col-lg-10">
    <div class="row">
        <div class="admin-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="add-category-form">
                        <h4>New Tour Plan</h4><br/>
                        <form action="{{action('Admin\TourPlanController@save')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            <label>Select Tour</label>
                            <select name="tour_ID" required="">
                                <option value="">Select a Tour</option>
                                @foreach($tour as $row)
                                <option value="{{$row->tour_ID}}">{{$row->tour_ID}}</option>
                                @endforeach
                            </select>

                            <label>Plan Title</label>
                            <input type="text" id="" name="plan_title" placeholder=""><br/>

                            <label>Description</label>
                            <input type="text" id="" name="description" placeholder=""><br/>

                            <label>Others Details</label>
                            <input type="text" id="" name="others_details" placeholder=""><br/>
                            <input type="submit" value="Submit">

                        </form>
                    </div>
                 </div>
            </div>
    

@endsection