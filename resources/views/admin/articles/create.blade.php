@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Artikel</h1>
    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Isi Artikel</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>
        <div class="mb-3">
            <label>Thumbnail (opsional)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tanggal Terbit (opsional)</label>
            <input type="date" name="published_at" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
