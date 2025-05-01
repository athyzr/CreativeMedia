@extends('layouts.app')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.study-fields.index') }}">Bidang Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.student-works.index') }}">Karya Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.articles.index') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.testimonials.index') }}">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.contacts.index') }}">Contact</a>
                    </li>
                   
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
@section('content')
<div class="container">
    <h1>Karya Siswa</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">+ Tambah Karya</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <table class="table table-bordered">
        <thead><tr><th>Nama Karya</th><th>Deskripsi</th><th>Gambar</th><th>Aksi</th></tr></thead>
        <tbody>
        @foreach($projects as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ Str::limit($item->description, 50) }}</td>
            <td>@if($item->image)<img src="{{ asset('uploads/' . $item->image) }}" width="100">@endif</td>
            <td>
                <a href="{{ route('projects.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('projects.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
