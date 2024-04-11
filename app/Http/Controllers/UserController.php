<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hello world';
    }

    public function show($id) {
        // $data = array(
        //     "name" => "Mark",
        //     "age" => 23,
        //     "email" => "test@hello.com",
        //     "id" => $id
        // );

        // return view('user', ['data' => $data]);

        return view('user')
                ->with('name', 'Mark');
    }
}
