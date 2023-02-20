<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $admin = Admin::all();
        return view('admin', compact('admin'));
    }

    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
        $admin->save();
        return redirect()->back()->with('success', 'Admin added succesfully');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return response()->json([
            'status' => 200,
            'admin' => $admin,
        ]);
    }

    public function update(Request $request)
    {
        $admin_id = $request->input('admin_id');
        $admin = Admin::find($admin_id);
        $admin->name = $request->input('name');
        $admin->username = $request->input('username');
        $admin->update();
        return redirect()->back()->with('success', 'Admin update succesfully');
    }

    public function destroy(Request $request)
    {
        $admin_id = $request->input('delete_admin_id');
        $admin = Admin::find($admin_id);
        $admin->delete();
        return redirect()->back()->with('success', 'Admin deleted succesfully');
    }
}