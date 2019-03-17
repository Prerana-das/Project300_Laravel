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
}
