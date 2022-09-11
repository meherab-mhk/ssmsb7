<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherAuthController extends Controller
{
    private $teacher;
    public function login()
    {
        return view('teacher.auth.login');
    }
    public function loginCheck(Request $request)
    {
        $this->teacher = Teacher::where('email', $request->email)->first();
        if($this->teacher)
        {
            if(password_verify($request->password, $this->teacher->password))
            {
                return 'success';
            }
            else
            {
                return 'wrong password';
            }
        }
        else
        {
            return 'wrong email';
        }
    }
}
