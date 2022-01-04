<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\Student;
use App\Course;
use App\Branch;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        $teacher = Teacher::paginate(2);
        return view('teacher.index', compact('teacher'));
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
        return view('teacher.create',compact(['branchs','courses']));
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
            'branchId' => 'required',
            'course_id' => 'required',
            'image'=>'mimes:jpeg,png,jpg',
        ]);
        $teacher = new Teacher;
        $teacher->fName = $request->fName;
        $teacher->lName = $request->lName;
        $teacher->phone = $request->phone;
        $teacher->branchId = $request->branchId;
        $teacher->course_id  = $request->course_id ;
        $teacher->image = $request->file('image')->getClientOriginalName();
        $teacher->save();
        $request->image->move(public_path('post_Image'), $teacher->image);

        session()->flash('done',"logged in successfully");
return redirect('teacher/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $branchId = Teacher::find($id)->branchId;
        $course_id = Teacher::find($id)->course_id;
        $countStudent = DB::table("students")->where('teacherId',$id)->count();
        $branch = Branch::find($branchId);
        $course = Course::find($course_id);
        return view('teacher.show', compact('teacher','branch','course','countStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $teacher = Teacher::find($id);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fName' => 'required|min:2|max:12',
            'lName' => 'required|min:2|max:12',
            'phone' => 'required|min:11|max:11',

        ]);
        $teacher =  Teacher::find($id);
        $teacher->fName = $request->fName;
        $teacher->lName = $request->lName;
        $teacher->phone = $request->phone;
        $teacher->save();

        session()->flash('done',"update in successfully");
return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        session()->flash('delete',"delete in successfully");
        return redirect('teacher');
    }
    public function getcours(Request $request)
{
    $id = $request->id;
    $data['Course'] = Course::where('branchId',$id)->get();
    return json_encode($data);
    }
    public function ajax_show(Request $request)
    {
        if($request->ajax()){
            $search = $request->get('search');
            $search = str_replace(" ","%",$search);
            $teacher = Teacher::where('fName','like','%'.$search.'%')->paginate(2);
            return view('teacher.teacherDetails_ajax',compact('teacher'));
        }
        }
}
