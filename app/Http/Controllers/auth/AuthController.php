<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        if(!empty(Auth::check()))
        {
            if(Auth::user()->user_type == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return redirect('student/dashboard');
            }
            else if(Auth::user()->user_type == 4)
            {
                return redirect('parent/dashboard');
            }
        }
        return view('auth.login');
    }

    public function authLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password], $remember))
        {
            if(Auth::user()->user_type == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return redirect('student/dashboard');
            }
            else if(Auth::user()->user_type == 4)
            {
                return redirect('parent/dashboard');
            }

        }else{
            return redirect()->back()->with('error', 'Correction your email or password!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }




    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
