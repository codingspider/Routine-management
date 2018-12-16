<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllStudentController extends Controller
{
    public function index(){

    	$allstudents = DB::table('students')
    					->get();
    	
    	// $all_students = view('admin.student.allstudent')
    	// ->with('allstudents', $allstudents);
    	return view('admin.student.allstudent', compact('allstudents'));
    }

    public function profile($id){

    	$datas=DB::table('students')
    	->select('*')
    	->where('id', $id)
    	->first();
    	
    	return view('admin.student.profile', compact('datas'));
    }

    public function edit($id){

    	$datas=DB::table('students')
    	->select('*')
    	->where('id', $id)
    	->first();
    	
    	return view('admin.student.edit', compact('datas'));
    }

     public function update(Request $request, $id){
            
        $data = array();
    	$data['name']=$request->first_name;
   
    	
             
        DB::table('students')
        ->where('id', $id)
        ->update($data);
        
    return redirect()->back()->with('success', 'Student Updated Successfully'); 
    
    }
}

