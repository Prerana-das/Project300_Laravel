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
}
