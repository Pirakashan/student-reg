<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function viewForm(){
        return view('student-reg');
    }

    public function addstudent(Request $request){
       dd($request->all()); 
    }
}
