<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;
use App\allclass;

session_start();

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    

    {
        $classes = allclass::all();
        return view('admin.student.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        // $path = $request->file('photo')->store('images');

      // $this->validate($request, [
      //   'first_name' => 'required|min:3|max:255',
      //   'last_name' => 'required|min:3|max:255',
      //   'phone' => 'required',
      //   'parent_phone' => 'required',
      //   'father_name' => 'required',
      //   'mother_name' => 'required',
      //   'registration' => 'required',
      //   'roll' => 'required',
      //   'address' => 'required',
      //   'status' => 'required',
      //   'emai'=> 'required',
      //   'dob' => 'required',
      //   'sex' => 'required'
      //   ]);

        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name  = $request->last_name;
        $student->sex = $request->sex;
        $student->dob = $request->dob;
        $student->email = $request->email;
        
        $student->status = $request->status;
        $student->address = $request->address;
        $student->roll = $request->roll;
        $student->registration = $request->registration;
        $student->phone = $request->phone;
        $student->class_id = $request->class_id;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->parent_phone = $request->phone;
        

        print_r($student);
            

          // $student->photo = $path;

               
        if($student->save())
        {
         return redirect()->back()->with('success', 'Student Added Succesfully');
        }else{

            echo "something went wrong";
        }
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
