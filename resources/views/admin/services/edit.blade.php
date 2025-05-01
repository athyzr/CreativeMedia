@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Layanan</h1>
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" value="{{ $service->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" id="editor" class="form-control" required>{{ $service->description }}</textarea>
            </div>
        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" width="100"><br>
            @endif
            <input type="file" name="image" class="form-control mt-2">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
