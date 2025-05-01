@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="{{ $article->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Isi Artikel</label>
            <textarea name="content" class="form-control" rows="6" required>{{ $article->content }}</textarea>
        </div>
        <div class="mb-3">
            <label>Thumbnail Saat Ini</label><br>
            @if($article->thumbnail)
                <img src="{{ asset('storage/' . $article->thumbnail) }}" width="100"><br>
            @endif
            <input type="file" name="thumbnail" class="form-control mt-2">
        </div>
        <div class="mb-3">
            <label>Tanggal Terbit</label>
            <input type="date" name="published_at" value="{{ $article->published_at }}" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
