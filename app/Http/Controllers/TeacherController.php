<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher; 
use Illuminate\Support\Facades\Hash;


class TeacherController extends Controller
{
    public function create(){
    	
    	return view('admin.routine.teacher');
    }

    public function store(Request $request){

        $user = new User([
        'email' => $request->get('email'),
        'username'=> $request->get('username'),
        'status'=> $request->get('status'),
        'password'=> Hash::make($request->input('password'))
      ]);
             $user->save();
             $lastInsertedId = $user->id;

         $teacher = new Teacher([
        'name' => $request->get('name'),
        
        'user_id'=>$lastInsertedId,
      ]);


      $teacher->save();
      

      return redirect()->back()->with('success', 'Teacher Added Succesfully');
        
        
    
    	
    	}
}
