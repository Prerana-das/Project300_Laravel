<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Tours;
use App\Countries;
use App\Cities;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllTourController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Tours::orderBy('tour_ID','ASC')->get();
        return view('admin.tour_list')->with(['user'=>$user,'table'=>$table]);
    }

    public function add_allTour(){
        $country = Countries::orderBy('countryID','ASC')->get();
        $city = Cities::orderBy('cityID','ASC')->get();
        $category = Category::orderBy('categoryID','ASC')->get();
        return view('admin.tour.add_allTour')->with(['country'=>$country,
        	'city'=>$city,'category'=>$category]);
    }

     public function save(Request $request){
        $table = new Tours();
        $table->categoryID = $request->categoryID;
        $table->countryID = $request->countryID;
        $table->cityID = $request->cityID;
        $table->tour_name = $request->tour_name;
        $table->tour_length = $request->tour_length;
        $table->tour_description = $request->tour_description;

         if ($request->hasFile('imageName')) {

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->imageName = $filename;

            $request->imageName->move('public/uploads/Tours',$filename);
        }

        $table->start_place = $request->start_place;
        $table->start_time = $request->start_time;
        $table->return_time = $request->return_time;

        $table->save();
        return redirect()->to('allTour/view');
    }

}
