<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;
use App\allclass;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;


session_start();


class AddStudentController extends Controller
{
    public function index(){
    	
    	return view('admin.student.index');
    }


    public function create(){

    	// $classes = allclass::all();
        return view('admin.student.create');
    
    }

    public function store(Request $request){

        $validation = Validator::make($request->all(), [
        'email'=>'required',
        'username'=> 'required',
        'status' => 'required|integer',
        'name' => 'required',
        'semster_id' => 'required|integer',
        'password' => 'required|min 3'
         
      ]);

        $user = new User([
        'email' => $request->get('email'),
        'username'=> $request->get('username'),
        'share_qty'=> $request->get('share_qty'),
        'status'=> $request->get('status'),
        'password'=> Hash::make($request->input('password'))
      ]);
             $user->save();
             $lastInsertedId = $user->id;


        $student = new Student([
        'name' => $request->get('name'),
        'username'=> $request->get('username'),
        'semster_id'=> $request->get('semster_id'),
        'user_id'=>$lastInsertedId,
      ]);


  
      $student->save();
      
        // $user = new User();
        // $user->email = Input::get('email');
        // $user->username = Input::get('username');
        // $user->password   = Hash::make($request->input('password'));
        // $user->status = Input::get('status');
        // $user->save();
        // $lastInsertedId = $user->id;

        // // DD($lastInsertedId);

    

        // $student = new Student();
        // $student->name = Input::get('name');
        // $student->semster_id = Input::get('semster_id');
        // $student= array('user_id'=>$lastInsertedId);

         // 'user_id' => $request->get('user_id'),
 

        
        // $student->save();
  
        return redirect()->back()->with('success', 'Student Added Succesfully');
        
    }

   
         public function delete($id){
        DB::table('students')
        ->where('id', $id)
        ->delete();

         return redirect()->back()->with('success', 'Student Deleted Successfully'); 

     
    }
    
}


