<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    return "This is about page";
});



Route::get('/register', function () {

    return view('register');

});

Route::post('/student/save', function (Request $req) {

    $name = $req->input('student_name');
    $email = $req->input('student_email');
    $age = $req->input('student_age');

    return "Student Details <br> Name: $name <br> Email:$email <br> Age: $age";


});
