<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function admin_view()
    {
    	return view('admin/admin');
    }
    
}
