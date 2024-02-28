<?php

namespace App\Http\Controllers;

use \App\Models\student;

use \App\Models\track;


use Illuminate\Http\Request;

class studcontrol extends Controller
{
    //


    function welcome(){
        return view('welcome');
        }




    function index (){
       $students= Student::all();
       return view('students.stushow',['peo'=> $students]);
    }


    function create(){
        $tracks= track::all();
        return view('students.stuform',['peo'=> $tracks]);
        }


    
    function details ($id){
        $filters= Student::find($id);
      return view('students.studetails',['data'=> $filters]);
        
     }

     function edit ($id){
        $filters= Student::find($id);
      return view('students.stuedit',['data'=> $filters]);
        
     }




     function update($id){

        request()->validate([
            "name" => "required",
            "grade" => "required",
            "email" => "required"
        ]);
    
        $student = Student::findOrFail($id);

        $student->name = request()->input('name');
        $student->Email = request()->input('email');
        $student->grade = request()->input('grade');
        $student->save();
        
        return redirect('/data');
    }
    
    
          

   

    public function store(Request  $request)


    {

    
        // Validate request
        request()->validate([
            "name" => "required",
            "grade" => "required",
            "email" => "required",
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Handle image upload
        $imagePath = null;
        if (request()->hasFile('image')) {

            $imageName =time().".".request()->image->extension();
            request()->image->move(public_path("imgs"), $imageName);
        
    
        // Create new Student instance
        $student = new Student;
        $student->name = request()->input('name');
        $student->Email = request()->input('email');
        $student->grade = request()->input('grade');
        $student->track_id = request()->input('track_id'); // Assuming you have this field in your form
        $student->image = $imageName; // Assign the image path to the image attribute
        $student->save();
        }


        return redirect('/data');  
    }



            function destroy($id){
                $target= Student::find($id);
                $target->delete();
                return redirect('/data');
            }


    



//   private  $student=[
//         ['id'=>1,'name'=>'mohamed','img'=>'download (1).png'],
//         ['id'=>2,'name'=>'Amr','img'=>'download (2).png'],
//         ['id'=>3,'name'=>'Ali','img'=>'download.png'],
//         ['id'=>4,'name'=>'hala','img'=>'download.png'],

//     ];

    
//  function ted(){
//     return view('iti',['stds'=>$this->student]);
//     }


    
//     /* web */
//     function moh1 () {
//         $student=[
//             ['id'=>1,'name'=>'mohamed'],
//             ['id'=>2,'name'=>'Amr'],
//             ['id'=>3,'name'=>'Ali'],
//             ['id'=>4,'name'=>'hala'],
    
//         ];
//         return $student;
        
//     }


//     function moh2 ($id) {
//         $student=[
//             ['id'=>1,'name'=>'mohamed'],
//             ['id'=>2,'name'=>'Amr'],
//             ['id'=>3,'name'=>'Ali'],
//             ['id'=>4,'name'=>'hala'],
    
//         ];
    
//         foreach($student as $stu){
//             if($stu['id'] == $id ){
//                 return $stu;
//             }
           
//         }
        
//     }
}
