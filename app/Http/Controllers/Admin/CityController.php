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
        
        $table =Cities::orderBy('cityID','ASC')->get();
        return view('admin.city')->with(['user'=>$user,'table'=>$table]);
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

     public function edit_city($id){
        $table = Cities::find($id);
        return view('admin.edit_city')->with(['table' => $table]);
    }
    
    public function edit(Request $request){
        $table = Cities::find($request->cityID);
        $table->city_name = $request->city_name;
        $table->other_details = $request->other_details;
        $table->save();
        return redirect()->to('city/view');
    }

    public function del($id){
        $table = Cities::find($id);
        $table->delete();
        return redirect()->back();
    }

}
