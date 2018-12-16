<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use Session;
use App\Semester_subject;
use App\Subject;

class SubjectController extends Controller
{
    public function create(){

    	$semesters = Semester::all();
    	
    	return view('admin.routine.subject', compact('semesters'));
    }

    public function store(Request $request){
    	
    
        $subject = new Subject([
        'subject_name' => $request->get('subject_name'),
        'semester_id'=> $request->get('semester_id')
 
      ]);
             $subject->save();

             $subject_id = $subject->id;
             $semester_id = $subject->semester_id;


        $semester_subject = new Semester_subject([
        
        'semester_id'=>$semester_id,
        'subject_id'=>$subject_id,

      ]);


      $semester_subject->save();
        

      return redirect()->back()->with('success', 'Subject Added Succesfully');
        
        
    }
}
