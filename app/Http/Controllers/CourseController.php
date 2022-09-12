<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $course;
    public function add()
    {
        return view('teacher.course.add');
    }
    public function manage(Request $request)
    {
        $this->course = Course::where('teacher_id', Session::get('teacher_id'))->get();
        return view('teacher.course.manage', ['course'=>$this->course]);
    }
    public function create(Request $request)
    {
        Course::addCourse($request);
        return redirect('/course/add')->with('message', 'Course Create Successfully');
    }
    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.edit', ['course'=>$this->course]);
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.detail',['course'=>$this->course]);
    }
    public function update(Request $request,$id)
    {
        Course::updateCourse($request,$id);
        return redirect('/course/manage')->with('message', 'Course update successfully');
    }
    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect('/course/manage')->with('message' , 'Course delete successfully');
    }
}
