<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Tours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllTourController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Tours::orderBy('tour_ID','ASC')->get();
        return view('admin.tour_list')->with(['user'=>$user,'table'=>$table]);
    }

    public function add_city(){
        $country = Countries::orderBy('country_name','ASC')->get();
        return view('admin.add_city')->with(['country'=>$country]);
    }

     public function save(Request $request){
        $table = new Cities();
        $table->countryID = $request->countryID;
        $table->city_name = $request->city_name;
        $table->other_details = $request->other_details;
        $table->save();
        return redirect()->to('city/view');
    }

}
