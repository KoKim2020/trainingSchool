<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $courses = Course::all();
        // $courses=Course::withTrashed()->get();
        //   $courses=Course::onlyTrashed()->get();
         return view('courses.index',
         compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('courses.create');
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
            "name" =>'
                required|min:5|max:100',
            "outlines" => 'required',
            "fees" => 'required',
            "during" => 'required|max:100',
            "duration" =>'required|max:100',
            "logo" => 'required|mimes:jpeg,bmp,png'
        ]);
        //if exit file,upload file
       if ($request->hasfile('logo')) {
           $logo = $request->file('logo');
           $upload_dir = public_path().'/storage/images/';
           $name = time().'.'.$logo->getClientOriginalExtension();
           $logo-> move($upload_dir,$name);// into the folder
           $path = '/storage/images/'.$name; // path into database
       }else{
        $path='';
       }

        //save data
         $course = new Course;
         $course->name= request('name');
         $course->logo= $path;
          $course->outline= request('outlines'); 
          $course->fees= request('fees');
          $course->during= request('during') ;
          $course->duration= request('duration') ;

          $course->save();
        //return

            return redirect()->route('courses.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('courses.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $course = Course::find($id); //obj
        return view('courses.edit',compact('course'));
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
         // dd($request);

        //Validation;
        $request->validate([
            "name" =>'
                required|min:5|max:100',
            "outlines" => 'required',
            "fees" => 'required',
            "during" => 'required|max:100',
            "duration" =>'required|max:100'
        ]);
        //if exit file,upload file
       

        //update data
         $course =  Course::find($id);
         $course->name= request('name');
          $course->outline= request('outlines'); 
          $course->fees= request('fees');
          $course->during= request('during') ;
          $course->duration= request('duration') ;

          $course->save();
        //return

            return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
