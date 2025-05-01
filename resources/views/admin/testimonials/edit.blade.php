@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Testimoni</h1>
    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ $testimonial->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Isi Testimoni</label>
            <textarea name="content" class="form-control" rows="4" required>{{ $testimonial->content }}</textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label><br>
            @if($testimonial->photo)
                <img src="{{ asset('uploads/' . $testimonial->photo) }}" width="100"><br>
            @endif
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
