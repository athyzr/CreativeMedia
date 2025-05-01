
@php use Illuminate\Support\Str; @endphp

@extends('layouts.app')


@section('styles')
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

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-white text-center">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Layanan Jasa Kami</h2>
    <p class="text-gray-600 max-w-xl mx-auto">Berikut adalah daftar layanan jasa yang kami tawarkan di Creative Media Surabaya.</p>
  </div>
</section>

<!-- Daftar Layanan Jasa -->
<section class="pb-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($services as $service)
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        @if($service->image)
        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover">
        @endif
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $service->title }}</h3>
          <p class="text-gray-600 text-sm">
              {{ Str::limit(strip_tags($service->description), 100) }}
          </p>
          <a href="{{ route('layananjasa.show', $service->id) }}">Selengkapnya</a>

          </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
