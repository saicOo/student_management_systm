<?php

namespace App\Http\Controllers;

use App\Course;
use App\Branch;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::select('branches.branchName','courses.coursName','courses.id')
        ->join('branches','courses.branchId','branches.id')
        ->paginate(4);
        return view('course.index', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchs = Branch::all();
        return view('course.create',compact('branchs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'coursName' => 'required',
            'branchId' => 'required',
        ]);
        $course = new Course ;
        $course->coursName = $request->coursName;
        $course->branchId = $request->branchId;
        $course->save();
        session()->flash('done',"update in successfully");
return redirect('course/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit', compact('course'));
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'coursName' => 'required',
            'branchId' => 'required',
        ]);
        $course =  Course::find($id);
        $course->coursName = $request->coursName;
        $course->branchId = $request->branchId;
        $course->save();
        session()->flash('done',"update in successfully");
return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        session()->flash('delete',"delete in successfully");
        return redirect('course');
    }
}
