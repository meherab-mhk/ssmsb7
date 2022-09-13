<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.home.index');
    }

}
