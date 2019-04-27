<?php

namespace App\Http\Controllers\SingleTour;
use App\Cities;
use App\Countries;
use App\Tours;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
     public function index()
    {
    
    	 $city = Cities::all();
         $country =Countries::all();
         $tour = Tours::all();
        return view('user.singleTour.single_tour_information')->with(['city'=>$city,'country'=>$country,'tour'=>$tour]);
 
    }
}
