<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $course, $student;
    public function enroll($id)
    {
        $this->course = Course::find($id);
        return view('website.enroll.enroll', ['course' => $this->course]);
    }
    public function newEnroll(Request $request, $id)
    {
        $this->validate($request,[
           'name' => 'required',
           'email' => 'required|unique:students,email',
           'mobile' => 'required|unique:students,email',
        ],[
            'email.unique' => 'vai eta chaira den ami kainda bachi',
        ]);
        $this->student = Student::newStudent($request);
        Enroll::newEnroll($request, $this->student->id, $id);
        return redirect('/enroll-now/'.$id)->with('message', 'your application submitted successfully');
    }

}
