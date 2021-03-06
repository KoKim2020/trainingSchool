<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mentor;
use Illuminate\Support\Facades\Hash;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $mentors = Mentor::all();
         return view('mentors.index',
         compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mentors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            "name" =>'required',
            "email" => 'required|unique:users',
            "address" => 'required',
            "phone" => 'required',
            "portfolio" =>'required'
           
        ]);
            $user = new User;
            $user->name= request('name');
            $user->email= request('email'); 
            $user->password=Hash::make('123456789');
            $user->save();
            // dd($user->id);
            $user->assignRole('Mentor');

            $mentor = new Mentor;

            $mentor->user_id = $user->id;
            $mentor->portfolio = request('portfolio');
            $mentor->phone = request('phone');
            $mentor->address=request('address');
            $mentor->save();
            //return

            return redirect()->route('mentors.index');

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
