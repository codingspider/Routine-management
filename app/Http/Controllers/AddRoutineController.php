<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Teacher;
use App\Routine;
use Auth;
use DateTime;
use DatePeriod;
use DateIntercal;
use DB;

class AddRoutineController extends Controller
{
	public function index(){
        

                 
                    //print_r($data);
        
		
		return view('admin.routine.index');
	}


    public function create(){

    	$semesters = Semester::all();
        $teachers = Teacher::all();

    	return view('admin.routine.create_routine', compact('semesters', 'teachers'));
    }

    public function store(Request $request){
    	
    	
        $routine = new Routine([
        'room_no' => $request->get('room_no'),
        'day' => $request->get('day'),
        'time_slot' => $request->get('time_slot'),
        'teacher_id' => $request->get('teacher_id'),
        'semester_id' => $request->get('semester_id')

      ]);


      $routine->save();

      return redirect()->back()->with('success', 'Routine Added Succesfully');
        
    }

    public function myroutine(){

        $data = DB::table('routines')
            ->join('teachers', 'teachers.id', '=', 'routines.teacher_id')
            ->join('semesters', 'semesters.id', '=', 'routines.semester_id')
            ->select('routines.*', 'teachers.name', 'semesters.name as sname')
            //->where('routines.time_slot',$j)
            ->get();

    return view('admin.routine.myroutine', compact('data'));
    }
}
