<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
                ->with('name', 'Mark')
                ->with('age', 22);
    }

    public function login() {
        if(View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
            // return response()->view('error.404');
        }        
    }

    public function register() {
        return view('user.register');
    }
}
