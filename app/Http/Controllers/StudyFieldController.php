<?php

namespace App\Http\Controllers;

use App\Models\StudyField;
use Illuminate\Http\Request;

class StudyFieldController extends Controller
{
    public function index()
    {
        $studyFields = StudyField::all();
        return view('admin.study-fields.index', compact('studyFields'));
    }

    public function create()
    {
        return view('admin.study-fields.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $filename);
            $data['image'] = $filename;
        }

        StudyField::create($data);
        return redirect()->route('admin.study-fields.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(StudyField $studyField)
    {
        return view('admin.study-fields.edit', compact('studyField'));
    }

    public function update(Request $request, $id)
    {
        $studyField = StudyField::findOrFail($id);
    
        $studyField->title = $request->title;
        $studyField->description = $request->description;
    
        // Cek apakah ada file baru diupload
        if ($request->hasFile('image')) {
            // Simpan file ke folder public/uploads
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
    
            // Hapus gambar lama jika ada
            if ($studyField->image && file_exists(public_path('uploads/' . $studyField->image))) {
                unlink(public_path('uploads/' . $studyField->image));
            }
    
            // Simpan nama file baru ke database
            $studyField->image = $filename;
        }
    
        $studyField->save();
    
        return redirect()->route('admin.study-fields.index')->with('success', 'Bidang studi berhasil diperbarui.');
    }
    

    public function destroy(StudyField $studyField)
    {
        $studyField->delete();
        return redirect()->route('admin.study-fields.index')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $field = StudyField::findOrFail($id); // cari bidang studi berdasarkan id

        return view('bidangstudi-show', compact('field'));
    }

}

