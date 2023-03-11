<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('index');

         // Get all students from the database
    $students = Student::all();

    // Pass the students data to the view
    return view('students.index', ['students' => $students]);
    }
}
