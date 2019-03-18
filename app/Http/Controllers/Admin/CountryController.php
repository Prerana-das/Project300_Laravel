<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Countries::orderBy('countryID','ASC')->get();
        return view('admin.country')->with(['user'=>$user,'table'=>$table]);
    }

    public function add_country(){
        return view('admin.add_country');
    }

     public function save(Request $request){
        $table = new Countries();
        $table->country_name = $request->country_name 	 	;
        $table->country_region = $request->country_region;
        $table->other_details = $request->other_details;
        $table->save();
        return redirect('country/view');
    }
}
