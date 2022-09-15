<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $course, $offerCourse;
    public function index()
    {
        $this->course = Course::where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        $this->offerCourse = Course::where('offer_fee', '>', 0)->orderBy('id','desc')->get();
        return view('website.home.index', [
            'course'=>$this->course,
            'offerCourse'=> $this->offerCourse,
            ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function courses()
    {
        return view('website.courses.index');
    }
    public function contact()
    {
        return view('website.contact.index');
    }
    public function auth()
    {
        return view('website.auth.index');
    }
    public function details()
    {
        return view('website.courses.course-details');
    }
}
