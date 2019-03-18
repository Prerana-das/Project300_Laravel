<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Cities;
use App\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(){
        $user = User::all();
        $user = Countries::all();
        $table =Cities::orderBy('cityID','ASC')->get();
        return view('admin.city')->with(['user'=>$user,'table'=>$table]);
    }

    public function add_city(){
        return view('admin.add_city');
    }

     public function save(Request $request){
        $table = new Cities();
        //$table->countryID = $request->countryID;
        $table->city_name = $request->city_name 	 	;
        $table->other_details = $request->other_details;
        $table->save();
        return redirect('country/view');
    }

}
