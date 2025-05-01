@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kontak Staf</h1>
    <form method="POST" action="{{ route('admin.contacts.update', $contact->id) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ $contact->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $contact->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="role" value="{{ $contact->role }}" class="form-control" required>
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
