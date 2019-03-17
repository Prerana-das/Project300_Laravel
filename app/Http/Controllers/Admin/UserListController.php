<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserListController extends Controller
{
    public function index(){
        $user = User::all();
        $table =User::orderBy('id','ASC')->get();
        return view('admin.user_list')->with(['user'=>$user,'table'=>$table]);
    }
}
