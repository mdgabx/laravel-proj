<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function (Request $request) {
//     dd($request);
//     return null;
// });

Route::get('/get-text', function () {
    return response('Hello world', 200)
            ->header('Content-Type', 'text/plain');
});


Route::get('/user/{id}/{group}', function ($id, $group) {
    return response($id. '-' . $group, 200);
});

Route::get('/request-json', function () {
    return response()->json(['name' => 'Mark', 'age' => 22]);
});


// file download
Route::get('/request-download', function () {
    $path = public_path().'/sample.txt';
    $name = 'sample.txt';
    $headers = array(
        'Content-type : application/text-plain',
    );

    return response()->download($path, $name, $headers);
});