<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class studentController extends Controller
{
    public function viewForm(){
        return view('student-reg');
    }

    public function addstudent(Request $request){
       //dd($request->all()); 
       //Student::create($request->all());
$parttime = $request->has('parttime') ? 1 : 0;

    Student::create([
        'name'        => $request->name,
        'email'       => $request->email,
        'phone'       => $request->phone,
        'address'     => $request->address,
        'gender'      => $request->gender,
        'department'  => $request->department,
        'parttime'    => $parttime,
        'joined_date' => $request->joined_date,
    ]);

    
    return redirect()->route('home')->with('success', 'Student created successfully!');
     
}
}
