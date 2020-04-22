<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $subjects = Subject::all();
         return view('subjects.index',
         compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('subjects.create');
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
                required'
                   ]);
        //if exit file,upload file
       

        //save data
         $subject = new Subject;
         $subject->name= request('name');
    
       
          $subject->save();
        //return
          return redirect()->route('subjects.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $subjects = Subject::find($id); //obj
        
        return view('subjects.edit',compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        

        //Validation;
        $request->validate([
            "name" =>'
                required'
                   ]);
        //if exit file,upload file
       

        //save data
           $subjects =  Subject::find($id);
         $subjects->name= request('name');
    
       
          $subjects->save();
        //return
          return redirect()->route('subjects.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->route('subjects.index');
    }
}
