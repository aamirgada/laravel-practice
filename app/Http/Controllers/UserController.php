<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        
        $mesg = "Welcome to the User page!";
        $age = 30;
        $email = "aamir@gmail.com";
        return view('user', ['name' => $name, 'age' => $age, 'email' => $email]);
        
    }
}
