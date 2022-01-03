<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Branch;
use App\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $student = Student::paginate(4);
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchs = Branch::all();
        $courses = Course::all();
        return view('student.create',compact(['branchs','courses']));
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
            'fName' => 'required|min:2|max:12',
            'lName' => 'required|min:2|max:12',
            'phone' => 'required|min:11|max:11',
            'email' => 'required|unique:students|max:255',
            'branchId' => 'required',
            'course_id' => 'required',
            'teacherId' => 'required',
            'image'=>'mimes:jpeg,png,jpg',
        ]);
        $student = new Student;
        $student->fName = $request->fName;
        $student->lName = $request->lName;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->branchId = $request->branchId;
        $student->course_id  = $request->course_id ;
        $student->teacherId  = $request->teacherId ;
        $student->image = $request->file('image')->getClientOriginalName();
        $student->save();
        $request->image->move(public_path('post_Image'), $student->image);

        session()->flash('done',"logged in successfully");
return redirect('student/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $branchId = Student::find($id)->branchId;
        $course_id = Student::find($id)->course_id;
        $branch = Branch::find($branchId);
        $course = Course::find($course_id);
        return view('student.show', compact('student','branch','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fName' => 'required|min:2|max:12',
            'lName' => 'required|min:2|max:12',
            'phone' => 'required|min:11|max:11',

        ]);
        $student =  Student::find($id);
        $student->fName = $request->fName;
        $student->lName = $request->lName;
        $student->phone = $request->phone;
        $student->save();

        session()->flash('done',"update in successfully");
return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        session()->flash('delete',"delete in successfully");
        return redirect('student');
    }
    public function getcours(Request $request)
    {
        $id = $request->id;
        $data['Course'] = Course::where('branchId',$id)->get();
        return json_encode($data);
    }
    public function getTeacher(Request $request)
{
    $id = $request->id;
    $data['Teacher'] = Teacher::where('course_id',$id)->get();
    return json_encode($data);
    }
}
