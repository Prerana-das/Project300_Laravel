<?php

namespace App\Http\Controllers\SingleTour;
use App\Cities;
use App\Countries;
use App\Tours;
use App\Tour_plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourPlanController extends Controller
{
     public function index()
    {
    	 $city = Cities::all();
    	 $country =Countries::all();
    	 $tour = Tours::all();
    	  $tour_plan = Tour_plan::all();
    	return view('user.singleTour.single_tour_plan')->with(['city'=>$city,'country'=>$country,'tour'=>$tour,'tour_plan'=>$tour_plan]);
 
    }
}
