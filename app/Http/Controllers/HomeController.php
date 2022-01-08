<?php

namespace App\Http\Controllers;
use App\Student;
use App\Course;
use App\Branch;
use App\Teacher;

use Illuminate\Support\Facades\DB;
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

        $studentsCount = DB::table("students")->count();
        $teachersCount = DB::table("teachers")->count();
        $coursesCount = DB::table("courses")->count();
        $branchsCount = DB::table("branches")->count();
        $teachers = Teacher::all();
        $students = Student::all();

        return view('home',compact('studentsCount','teachersCount','coursesCount','branchsCount','teachers','students'));
    }
}
