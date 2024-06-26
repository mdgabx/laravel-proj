<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function (Request $request) {
//     dd($request);
//     return null;
// });

// Route::get('/get-text', function () {
//     return response('Hello world', 200)
//             ->header('Content-Type', 'text/plain');
// });


// Route::get('/user/{id}/{group}', function ($id, $group) {
//     return response($id. '-' . $group, 200);
// });

// Route::get('/request-json', function () {
//     return response()->json(['name' => 'Mark', 'age' => 22]);
// });

// // file download
// Route::get('/request-download', function () {
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type : application/text-plain',
//     );

//     return response()->download($path, $name, $headers);
// });

// Route::get('/', function () {
//     return view('students.index', [StudentController::class, 'index']);
// });

// Route::get('/users', [UserController::class, 'index'])->name('login');
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);

// Route::get('/sample', function() {
//     return view('sample');
// });


//common naming routes
// index - show all data
// show - display single data
// create = show a form to a new user
// store - store data
// edit - update data
// update - delete data
// destroy - delete data


// Route::get('/users', [UserController::class, 'index'])->name('login');

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/student/{id}', [StudentController::class, 'show']);


Route::get('/', [StudentController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);



