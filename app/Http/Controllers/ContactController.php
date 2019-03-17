<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function contact_view()
    {
    	return view('user/contact');
    }

    public function save(Request $request){
        $table = new Message();
        $table->userID = $request->userID;
        $table->name = $request->name;
        //$table->email = $request->users['email'];
        $table->email = $request->email;
        $table->description = $request->description;
        $table->save(); //table must be save

        return redirect()->back();
    }
}
