<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Cities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index(){
        $user = User::all();
        $table =Cities::orderBy('cityID','ASC')->get();
        return view('admin.city')->with(['user'=>$user,'table'=>$table]);
    }
}
