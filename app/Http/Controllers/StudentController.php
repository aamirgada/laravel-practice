<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students(){
        
      return view('students');
    }
    public function student($name){
        
        return view('student', ['name' => $name]);
    }
    public function course($course=null){
        return view('course', ['course' => $course? $course : 'No course selected']);
}
}
