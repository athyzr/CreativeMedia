<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class PublicContactController extends Controller
{
    public function showForm()
    {
        return view('admin.contact.form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}

