<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $course;
    public function enroll($id)
    {
        $this->course = Course::find($id);
        return view('website.enroll.enroll', ['course' => $this->course]);
    }
    public function newEnroll(Request $request, $id)
    {
        dd($request->all());
    }
}
