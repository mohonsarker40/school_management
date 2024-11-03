<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(!empty(Auth::check()))
        {
            if(Auth::user()->user_type == 1)
            {
                return view('admin.admin.dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return view('admin.teacher.dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return view('admin.student.dashboard');
            }
            else if(Auth::user()->user_type == 4)
            {
                return view('admin.parent.dashboard');
            }
        }
    }

}
