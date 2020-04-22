<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Course;
use App\Batch;


class StudentController extends Controller
{   
    public  function __construct($value='')
    {
        $this->middleware('role:Admin')->except('store');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
         return view('students.index',
         compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

            $subjects = Subject::all();
             $courses = Course::all();
              $batches = Batch::all();

        return view('students.create',compact('subjects','courses','batches'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);

        //Validation;
        $request->validate([
            "namee" =>'
                required|min:5|max:100',
            "namem" => 'required',
            "email" => 'required',
            "phone" => 'required|max:100',
            "address" =>'required',
             "education" =>'required',
              "city" =>'required',
             "accepted_year" =>'required',
              "dob" =>'required',
               "subjects" =>'required',
             "batch_id" =>'required',
              "p1" =>'required',
             "p1_phone" =>'required',
              "p1_relationship" =>'required',
                  "p2" =>'required',
             "p2_phone" =>'required',
              "p2_relationship" =>'required',
              "because" =>'required'


        ]);
        
        //if exit file,upload file
       // dd($request);

        //save data
         $student = new Student;
         $student->namee= request('namee');
         $student->namem= request('namem');        
         $student->email= request('email');
         $student->phone= request('phone');
        $student->address= request('address');
        $student->education= request('education');
        $student->city= request('city');
        $student->accepted_year= request('accepted_year');
        $student->dob= request('dob');
        $student->gender= request('gender');
        $student->batch_id= request('batch_id');
        $student->p1= request('p1');
        $student->p1_phone= request('p1_phone');
        $student->p1_relationship= request('p1_relationship');
         $student->p2= request('p2');
        $student->p2_phone= request('p2_phone');
        $student->p2_relationship= request('p2_relationship');
         $student->because= request('because');

$student->save();
        //return
//save student_ subject
    $subjects =  request('subjects');
    $student->subjects()->attach($subjects);

    if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'students.create'){
         return redirect()->route('students.index'); 
     }else{

       return back()->with('status','Register Successfully!');    
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
        $student = Student::find($id);
        return view ('students.show',compact('student'));
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
