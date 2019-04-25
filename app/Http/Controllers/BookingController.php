<?php

namespace App\Http\Controllers;
use App\User;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
     public function save(Request $request){
        $table = new Booking();
        $table->userID = $request->userID;
         $table->name = $request->name;
         $table->email = $request->email;
         $table->phone = $request->phone;
        $table->no_of_person = $request->no_of_person;
        $table->request = $request->requestval;
      
        $table->save(); //table must be save

        return redirect()->back();
    }
}
