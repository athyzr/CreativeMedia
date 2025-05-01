@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Karya Siswa</h1>
    <form action="{{ route('admin.student-works.update', $studentWork->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="{{ $studentWork->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $studentWork->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="student_name" value="{{ $studentWork->student_name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            @if($studentWork->image)
                <img src="{{ asset('storage/' . $studentWork->image) }}" width="100"><br>
            @endif
            <input type="file" name="image" class="form-control mt-2">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
