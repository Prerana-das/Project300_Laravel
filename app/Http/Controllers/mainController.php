<?php

namespace App\Http\Controllers;
use App\Cities;
use App\Countries;
use App\Tours;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
    
    	  $city = Cities::all();
    	  $country = Countries::all();
    	  $tour = Tours::all();
    	return view('user.index')->with(['city'=>$city,'country'=>$country,'tour'=>$tour]);
    }
}
