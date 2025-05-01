<?php
namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\ContactMessage::orderBy('created_at', 'desc')->get();

        return view('admin.contacts.index', compact('contacts'));
    }


    
    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required',
        ]);

        ContactMessage::create($data);
        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dikirim.');
    }

    public function edit(ContactMessage $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, ContactMessage $contact)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required',
        ]);

        $contact->update($data);
        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil diperbarui.');
    }

    public function destroy(ContactMessage $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
