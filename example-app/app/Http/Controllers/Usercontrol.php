<?php

namespace App\Http\Controllers;

use \App\Models\User;

use Illuminate\Http\Request;

class Usercontrol extends Controller
{
    //

    function index (){
        $students= User::all();
        return view('users.usershow',['peo'=> $students]);
     }


     function details ($id){
        $filters= User::find($id);
      return view('users.userdetails',['data'=> $filters]);
        
     }



     function destroy($id){
        $target= User::find($id);
        $target->delete();
        return redirect('user/data');
    }



}
