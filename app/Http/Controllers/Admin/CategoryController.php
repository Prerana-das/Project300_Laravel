<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
     public function index(){
        $user = User::all();
        $table =Category::orderBy('categoryID','ASC')->get();
        return view('admin.category')->with(['user'=>$user,'table'=>$table]);
    }

     public function add_category(){
        return view('admin.add_category');
    }

     public function save(Request $request){
        $table = new Category();
        $table->name = $request->name;
        $table->save();
        return redirect('category/view');
    }

    public function edit_category($id){
        $table = Category::find($id);
        return view('admin.edit_category')->with(['table' => $table]);
    }
    
    public function edit(Request $request){
        $table = Category::find($request->categoryID);
        $table->name = $request->name;
        $table->save();

        return redirect()->back();
    }

     public function del($id){
        $table = Category::find($id);
        $table->delete();

        //return redirect()->back()->with(config('custom.del'));
        return redirect()->back();
    }
}
