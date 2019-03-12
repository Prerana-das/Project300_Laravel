<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
    	return view('user/index');
    }

    public function index2()
    {
    	return view('user/index');
    }
}
