@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Konten Homepage</h1>


    <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="headline" class="form-label">Headline</label>
            <input type="text" class="form-control" id="headline" name="headline" value="{{ old('headline', $content->headline) }}">
        </div>

        <div class="mb-3">
            <label for="subheadline" class="form-label">Subheadline</label>
            <textarea class="form-control" name="subheadline" rows="4">{{ old('subheadline', $content->subheadline) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="banner" class="form-label">Banner (opsional)</label><br>
            @if ($content && $content->banner)
                <img src="{{ asset('storage/' . $content->banner) }}" alt="Banner Lama" style="max-width: 200px; margin-bottom: 10px;"><br>
            @endif
            <input type="file" name="banner" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('homepage.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
