<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function adminLogin(Request $request)
    {

        $credentials=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        $login=Auth::attempt($credentials);

        if ($login){
            return redirect('admin/dashboard');
        }else{
            Session::flash('failed','Login Failed');
            return redirect()->back();
        }


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
