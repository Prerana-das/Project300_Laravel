<?php

namespace App\Http\Controllers\SingleTour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
     public function index()
    {
    	return view('user/singleTour/single_tour_information');
 
    }
}
