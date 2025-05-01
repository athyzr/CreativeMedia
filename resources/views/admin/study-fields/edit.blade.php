@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Bidang Studi</h1>

    <form method="POST" action="{{ route('admin.study-fields.update', $studyField->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $studyField->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $studyField->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Saat Ini:</label><br>
            @if($studyField->image)
                <img src="{{ asset('uploads/' . $studyField->image) }}" width="120">
            @else
                <p>Tidak ada gambar</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.study-fields.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
