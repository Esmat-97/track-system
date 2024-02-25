<?php

namespace App\Http\Controllers;

use \App\Models\track;

use Illuminate\Http\Request;


class categorycontrol extends Controller
{
    //

    function index (){
        $tracks = track::all();
        return view('showcategory',['tra'=> $tracks]);
     }



    function create (){
        return view('formcategory');
    }

    
    function details ($id){
        $filters= track::find($id);
      return view('categorydetails',['data'=> $filters]);
        
     }


     function destroy($id){
        $target= track::find($id);
        $target->delete();
        return redirect('/category/data');
    }


    function store(){

        request()->validate([
            "id"=>"required",
            "title"=>"required",
            "description"=>"required"
        ]);

       $student= new track;
       $student->tilte =request()->input('title');
       $student->id =request()->input('id');
       $student->description =request()->input('description');
       $student->save();
       return redirect('/category/data');

        }

}
