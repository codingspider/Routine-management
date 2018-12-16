<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    public function create(){
    	
    	return view('admin.routine.semester');
    }

    public function store(Request $request){
    	
    	
        $semester = new Semester([
        'name' => $request->get('name')
        
      ]);


  
      $semester->save();

      return redirect()->back()->with('success', 'Semester Added Succesfully');
        
        }
}
