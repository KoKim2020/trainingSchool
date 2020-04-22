<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Course;
class FrontendController extends Controller
{
    public function index($value='')
    {
    	return view('frontend.index');
    }
     public function studentRegister($value='')
    {
    	  $subjects = Subject::all();
         return view('frontend.registerform',
         compact('subjects'));
    }
    // --------------------------
    public function frontendcourse($value='')
    {
         $courses = Course::all();
         return view('frontend.frontendcourse',
         compact('courses'));
    }
     public function csr($value='')
    {
        return view('frontend.csr');
    }
}
