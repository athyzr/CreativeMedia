<?php

namespace App\Http\Controllers;

use App\Models\StudentWork;
use Illuminate\Http\Request;

class StudentWorkController extends Controller
{
    public function index()
    {
        $studentWorks = StudentWork::latest()->get();
        return view('admin.student_works.index', compact('studentWorks'));
    }

    public function create()
    {
        return view('admin.student_works.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'student_name' => 'nullable',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        StudentWork::create($data);
        return redirect()->route('admin.student-works.index')->with('success', 'Karya siswa berhasil ditambahkan');
    }

    public function edit(StudentWork $studentWork)
    {
        return view('admin.student_works.edit', compact('studentWork'));
    }

    public function update(Request $request, StudentWork $studentWork)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'student_name' => 'nullable',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        $studentWork->update($data);
        return redirect()->route('admin.student-works.index')->with('success', 'Karya siswa berhasil diperbarui');
    }

    public function destroy(StudentWork $studentWork)
    {
        $studentWork->delete();
        return back()->with('success', 'Karya siswa berhasil dihapus');
    }
}
