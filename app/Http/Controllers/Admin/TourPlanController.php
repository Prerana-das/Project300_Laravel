<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Tour_plan;
use App\Tours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourPlanController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Tour_plan::orderBy('plan_ID','ASC')->get();
        return view('admin.tour_plan')->with(['user'=>$user,'table'=>$table]);
    }


     public function add_TourPlan(){
         $user = User::all();
        $tour = Tours::orderBy('tour_ID','ASC')->get();
        $table = Tour_plan::orderBy('plan_ID','ASC')->get();
        return view('admin.add.add_tour_plan')->with(['table'=>$table,
        	'user'=>$user,'tour'=>$tour]);
    }

    public function save(Request $request){
        $table = new Tour_plan();
        $table->tour_ID = $request->tour_ID;
        $table->plan_title = $request->plan_title;
        $table->description = $request->description;
        $table->others_details = $request->others_details;

         $table->save();
        return redirect()->to('tourPlan/view');
} 	

}
