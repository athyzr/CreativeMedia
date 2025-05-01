<?php

namespace App\Http\Controllers;

use App\Models\HomepageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageContentController extends Controller
{
    public function index()
    {
        $content = HomepageContent::first();
        return view('admin.homepage.index', compact('content'));
    }

    public function edit($homepage)
    {
        $homepageContent = HomepageContent::find($homepage);
        return view('admin.homepage.edit', compact('homepageContent'));
    }
    

    public function update(Request $request)
    {
        $request->validate([
            'headline' => 'required|string|max:255',
            'subheadline' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $content = HomepageContent::firstOrCreate([]);

        if ($request->hasFile('banner')) {
            if ($content->banner && Storage::exists('public/' . $content->banner)) {
                Storage::delete('public/' . $content->banner);
            }

            $file = $request->file('banner')->store('banners', 'public');
            $content->banner = $file;
        }

        $content->headline = $request->headline;
        $content->subheadline = $request->subheadline;
        $content->save();

        return redirect()->route('admin.homepage.index')->with('success', 'Konten homepage berhasil diperbarui.');
    }
} 
