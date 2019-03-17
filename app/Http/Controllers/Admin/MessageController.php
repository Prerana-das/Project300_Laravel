<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

     public function index(){
        $user = User::all();
        $table = Message::orderBy('messageID','ASC')->get();
        return view('admin.message')->with(['user'=>$user,'table'=>$table]);
    }

    public function edit_message($id){
        $table = Message::find($id);
        return view('admin.edit_message')->with(['table' => $table]);
    }
    
    public function edit(Request $request){
        $table = Message::find($request->messageID);
        $table->name = $request->name;
        $table->email = $request->email;
        $table->description = $request->description;
        $table->save();

        return redirect()->to('/');
    }

     public function del($id){
        $table = Message::find($id);
        $table->delete();

        //return redirect()->back()->with(config('custom.del'));
        return redirect()->back();
    }
}
