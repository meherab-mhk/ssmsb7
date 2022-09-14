<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $course, $message, $offerCourses;
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
    public function offerCourse()
    {
        $this->course = Course::where('status', 1)->orderBy('id', 'desc')->get();
        $this->offerCourses = Course::where('status', 1)->where('offer_fee','>', 0)->orderBy('id', 'desc')->get();
        return view('admin.course.offer', [
            'course' => $this->course,
            'offerCourse'=> $this->offerCourses,
        ]);
    }
    public function offerUpdate(Request $request)
    {

        Course::offerCourseUpdate($request);
        return redirect('/admin/offer-course')->with('message', 'Offer Course Create');

    }
    public function offerEdit($id)
    {
        $this->course = Course::where('status', 1)->orderBy('id', 'desc')->get();
        $this->offerCourses = Course::find($id);
        return view('admin.course.edit-offer', [
            'course' => $this->course,
            'offerCourse'=> $this->offerCourses,
        ]);
    }
    public function updateCourseOffer(Request $request)
    {
        Course::updateCourseOffer($request);
        return redirect('/admin/offer-course')->with('message', 'Offer Course Updated');
    }
}
