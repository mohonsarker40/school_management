<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $admins['admins'] = Admin::all();
        return view('admin.admin.list')->with( $admins);
    }

    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'nid' => 'required',
        ]);

        Admin::create($request->all());
        return view('admin.admin.list');

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
