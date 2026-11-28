<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // get register form view
    public function showRegisterForm(){
        return view('register');
    }

    // store Data from register form
    public function store(Request $request){

        $request->validate([
            'student_name' => 'required',
            'student_email' => 'email|required',
            'student_age' => 'required|numeric|min:18'
        ]);

        $name = $request->input('student_name');
        $email = $request->input('student_email');
        $age = $request->input('student_age');

        return "Hello $name <br> your email is: $email <br> your age: $age";

    }



}
