<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $course, $message;
    public function manageCourse()
    {
        $this->course = Course::orderBy('id', 'desc')->take(50)->get();
        return view('admin.course.manage',  ['course' => $this->course]);
    }
    public function courseDetail($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.detail', ['course'=>$this->course]);
    }
    public function updateStatus($id)
    {
        $this->message = Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message', $this->message);
    }
}
