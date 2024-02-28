<?php

namespace App\Http\Controllers;

use \App\Models\track;

use \App\Models\User;

use \App\Models\student;      //

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class categorycontrol extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }


    function index (){
        $tracks = track::all();
        return view('categories.categoryshow',['tra'=> $tracks]);
     }



    function create (){
        return view('categories.categoryform');
    }

    
    function details ($id){
        $filters= track::find($id);
      return view('categories.categorydetails',['data'=> $filters]);
        
     }


     function edit ($id){
        $track= track::find($id);
      return view('categories.categoryedit',['tracking'=> $track]);
        
     }

     function destroy($id){
        $target= track::find($id);
        $target->delete();
        return redirect('/category/data');
    }

    
    function update($id){

        request()->validate([
            "title" => "required",
            "description" => "required",
        ]);
    
        $student = track::findOrFail($id);
        $student->tilte = request()->input('title');
        $student->description = request()->input('description');
        $student->save();
        
        return redirect('/category/data');
    }


    function store(){

        request()->validate([
            "title"=>"required",
            "description"=>"required"
        ]);

       $student= new track;
       $student->tilte =request()->input('title');
       $student->description =request()->input('description');
       $student->user_id=Auth::id();
       $student->save();
       return redirect('/category/data');

        }

}
