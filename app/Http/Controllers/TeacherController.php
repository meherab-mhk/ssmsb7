<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacher;
    public function index()
    {
        return view('admin.teacher.index');
    }
    public function manage()
    {
        $this->teacher = Teacher::all();
        return view('admin.teacher.manage', ['teacher'=>$this->teacher]);
    }
    public function create(Request $request)
    {
        Teacher::addTeacher($request);
        return redirect('teacher/add')->with('message' , 'Teacher add successfully');

    }
    public function edit(Request $request, $id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher'=>$this->teacher]);
    }
}
