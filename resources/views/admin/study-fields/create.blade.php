@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Bidang Studi</h1>

    <form method="POST" action="{{ route('admin.study-fields.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.study-fields.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
