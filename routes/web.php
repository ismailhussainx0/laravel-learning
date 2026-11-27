<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// import controller
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    return "This is about page";
});



// Route::get('/register', function () {

//     return view('register');

// });

// Route::post('/student/save', function (Request $req) {

//     $name = $req->input('student_name') ?: 'Ismail';
//     $email = $req->input('student_email');
//     $age = $req->input('student_age') ?: 18;

//     return "Student Details <br> Name: $name <br> Email:$email <br> Age: $age";


// });

// Students registeration form show 
Route::get('/student/register', [StudentController::class, 'showRegisterForm']);

// Store Student Registration data
Route::post('/student/register', [studentController::class, 'store']);
