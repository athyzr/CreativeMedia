@extends('layouts.app')

@section('content')

<!-- Header Artikel -->
<div class="bg-cyan-700 text-white text-center py-20">
    <h1 class="text-4xl font-bold">{{ $article->title }}</h1>
    <p class="mt-4 text-lg">
        @if ($article->published_at)
            Dipublikasikan pada {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}
        @endif
    </p>
</div>

<!-- Isi Artikel -->
<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        @if ($article->thumbnail)
            <img src="{{ Storage::disk('public')->url($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-80 object-cover mb-6 rounded">
        @endif

        <div class="text-gray-800 prose max-w-none">
            {!! $article->content !!}
        </div>

        <div class="mt-8">
            <a href="{{ route('artikel') }}" class="text-cyan-700 hover:underline font-semibold">
                ← Kembali ke Artikel
            </a>
        </div>
    </div>
</div>

@endsection
