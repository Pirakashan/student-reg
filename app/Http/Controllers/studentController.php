<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class studentController extends Controller
{
    public function viewForm(){
        $students = Student::all();
        return view('student-reg' , compact('students'));
    }

    public function addstudent(Request $request){
       //dd($request->all()); 
       Student::create($request->all());


    
    return redirect()->route('home')->with('success', 'Student created successfully!');
     
}
}
