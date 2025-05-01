@extends('layouts.app')

@section('content')
@push('styles')
  <!-- External CSS -->
  <link rel="icon" type="image/png" href="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2Fb45ba0afda0c4942bfa32c1f58c8291c" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700,800,900" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    nav a {
      font-weight: 500;
      padding: 5px 5px;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #088395;
    }
    header {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand img {
      max-height: 60px;
    }
    .nav-header {
      background-color: #fff;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .navbar-nav .nav-link {
      color: #333;
    }
    .navbar-nav .nav-link:hover {
      color: #088395;
    }
    .dropdown-menu a:hover {
      background-color: #088395;
      color: white !important;
    }
  </style>
@endpush

@section('content')
<!-- Navbar -->
<nav class="bg-white shadow fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center space-x-2">
        <img src="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2Fb45ba0afda0c4942bfa32c1f58c8291c" alt="Logo" class="h-10" />
        <span class="text-lg font-semibold">Creative Media Surabaya</span>
      </a>

      <!-- Toggle button (hamburger) -->
      <button id="menu-toggle" class="lg:hidden text-2xl">
        <i class="bi bi-list"></i>
      </button>

      <!-- Links -->
      <ul id="menu" class="hidden lg:flex lg:items-center space-x-6 font-medium text-gray-700">
        <li><a href="{{ route('home') }}" class="hover:text-cyan-700">Beranda</a></li>
        <li><a href="{{ route('profil') }}" class="hover:text-cyan-700">Profil</a></li>
        <li><a href="{{ route('bidangstudi') }}" class="hover:text-cyan-700"> Bidang Studi</a></li>
        <li><a href="{{ route('layananjasa') }}" class="hover:text-cyan-700">Layanan Jasa</a></li>
        <li><a href="{{ route('karyasiswa') }}" class="hover:text-cyan-700">Karya Siswa</a></li>
        <li><a href="{{ route('testimoni') }}" class="hover:text-cyan-700">Testimoni</a></li>
        <li><a href="{{ route('artikel') }}" class="hover:text-cyan-700">Artikel</a></li>
        <li><a href="{{ route('hubungi') }}" class="hover:text-cyan-700">Hubungi</a></li>
      </ul>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden px-4 pb-4">
      <ul class="space-y-2 text-gray-700 font-medium">
        <li><a href="{{ route('home') }}">Beranda</a></li>
        <li><a href="{{ route('profil') }}">Profil</a></li>
        <li><a href="{{ route('bidangstudi') }}">Bidang Studi</a></li>
        <li><a href="{{ route('layananjasa') }}">Layanan Jasa</a></li>
        <li><a href="{{ route('karyasiswa') }}">Karya Siswa</a></li>
        <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
        <li><a href="{{ route('artikel') }}">Artikel</a></li>
        <li><a href="{{ route('hubungi') }}">Hubungi</a></li>
      </ul>
    </div>
  </nav>

  <div class="pt-10"></div>
  
<section class="pt-24 pb-16 bg-white">
  <div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold mb-6">{{ $field->title }}</h1>

    @if($field->image)
      <img src="{{ asset('uploads/' . $field->image) }}" alt="{{ $field->title }}" class="w-full h-64 object-cover rounded mb-6">
    @endif

    <div class="text-lg text-gray-700">
      {!! nl2br(e($field->description)) !!}
    </div>

    <a href="{{ route('bidangstudi') }}" class="inline-block mt-8 px-6 py-3 bg-cyan-700 text-white rounded hover:bg-cyan-800">
      ← Kembali ke Bidang Studi
    </a>
  </div>
</section>
@endsection
