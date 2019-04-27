<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Booking;
use App\Tours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index(){
        $user = User::all();
        $tour = Tours::all();
        $table =Booking::orderBy('bookID','ASC')->get();
        return view('admin.booking_list')->with(['user'=>$user,'table'=>$table,'tour'=>$tour]);
    }
}
