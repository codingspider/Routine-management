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

      
        $user = new User();
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password   = Hash::make($request->input('password'));
        $user->status = Input::get('status');
        $user->save();
        $insertid = $user->id;

        dd($id);
  
        $student = new Student();
        $student->name = Input::get('email');
        $student->semster_id = Input::get('semster_id');
        $student->user_id = Input::get('user_id');
        
        $student->save();
        
    	// DB::table('students')->insert($data);
    	// Session::put('success', 'Student Added Succesfully');
    	// return redirect()->back()->with('success', 'Student Added Succesfully');
    }


    public function delete($id){
        DB::table('students')
        ->where('id', $id)
        ->delete();

         return redirect()->back()->with('success', 'Student Deleted Successfully'); 

     
    }
    
}

