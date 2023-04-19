<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi', compact('divisi'));
    }

    public function store(Request $request)
    {
        $divisi = new Divisi;
        $divisi->name = $request->input('name');
        $divisi->save();
        return redirect()->back()->with('success', 'Divisi added succesfully');
    }

    public function edit($id)
    {
        $divisi = Divisi::find($id);
        return response()->json([
            'status' => 200,
            'divisi' => $divisi,
        ]);
    }

    public function update(Request $request)
    {
        $divisi_id = $request->input('divisi_id');
        $divisi = Divisi::find($divisi_id);
        $divisi->name = $request->input('name');
        $divisi->update();
        return redirect()->back()->with('success', 'divisi update succesfully');
    }

    public function destroy(Request $request)
    {
        $divisi_id = $request->input('delete_divisi_id');
        $divisi = Divisi::find($divisi_id);
        $divisi->delete();
        return redirect()->back()->with('success', 'divisi deleted succesfully');
    }
}
