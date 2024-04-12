<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index () 
    {
        // $data = Students::all();
        // $data = Students::where('id', 1)->get();
        // $data = Students::where('first_name', 'like', '%bert%')->get();
        // $data = Students::where('age', '>=', 19)->orderBy('first_name', 'asc')->limit(5)->get();

        // $data = DB::table('students')
        //             ->select(DB::raw('count(*) as gender_count, gender'))
        //             ->groupBy('gender')->get();

        $data = Students::where('id', 101)->firstOrFail();

        return view('students.index', ['students' => $data]);
    }

    public function show($id) {
        $data = Students::where('id', 101)->findOrFail();

        return view('students.index', ['students' => $data]);
    }
}
