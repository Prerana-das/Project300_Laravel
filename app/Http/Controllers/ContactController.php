<?php

namespace App\Http\Controllers;
//use App\Users;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact_view()
    {
    	return view('user/contact');
    }

     public function save(Request $request){
        $users = Users::find($request->userID);

        $table = new Message();
        $table->userID = $request->userID;
        $table->name = $users->users['name'];
        $table->email = $request->users['email'];
        $table->description = $request->description;
        $table->save();

        //return redirect()->back()->with(config('custom.save'));
    }
}
