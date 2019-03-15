<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
     public function faq_view()
    {
    	return view('user/pages/faq');
    }
}
