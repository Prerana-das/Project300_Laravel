<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
     public function tour_view()
    {
    	return view('user/tour');
    }

}
