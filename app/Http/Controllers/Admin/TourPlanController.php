<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Tour_plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourPlanController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Tour_plan::orderBy('plan_ID','ASC')->get();
        return view('admin.tour_plan')->with(['user'=>$user,'table'=>$table]);
    }
}
