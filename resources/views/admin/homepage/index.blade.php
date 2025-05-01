@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Konten Homepage</h1>
    <a href="{{ route('homepage.edit') }}" class="btn btn-primary mb-3">Edit</a>

    <div class="card">
        <div class="card-body">
            <h2>{{ $content->headline ?? 'Belum ada headline' }}</h2>
            <p>{{ $content->subheadline ?? 'Belum ada subheadline' }}</p>
            @if($content && $content->banner)
                <img src="{{ asset('storage/' . $content->banner) }}" alt="Banner" style="max-width: 100%;">
            @endif
        </div>
    </div>
</div>
@endsection
