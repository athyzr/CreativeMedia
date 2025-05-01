@extends('layouts.app') <!-- Sesuaikan dengan layout kamu -->

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
      background-image: url('https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2F6c630b3ff80145d19af728c705cabd1c');
      background-size: cover; /* Menyesuaikan ukuran gambar dengan layar */
      background-position: center; /* Agar gambar berada di tengah */
      background-attachment: fixed; /* Agar gambar tetap saat di-scroll */
      position: relative; /* Agar overlay bisa ditempatkan di atas */
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi */
      z-index: -1; /* Agar overlay tidak menutupi konten */
    }
    h1, p, label {
      color: white; /* Mengubah warna teks menjadi putih */
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

<!-- Content -->
<div class="container mx-auto px-4 py-32">
  <!-- Judul Halaman -->
  <h1 class="text-3xl font-bold text-center mb-12">Testimoni</h1>

    <!-- Video YouTube  -->
    <div class="flex justify-center gap-6 mb-12">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XwnoUL10EuE?si=BDgI8ai6WZJrJGcA" title="YouTube video player" 
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
    </iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/4rSq1mfM82c?si=spy9CrqLgkzN-1Ug" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
    </iframe>
  </div>


  <!-- Daftar Testimoni -->
  <div class="space-y-8">
    @foreach ($testimonials as $t)
      <div class="bg-white shadow rounded-lg p-6 border-l-4 border-cyan-700">
      
        <!-- Header Testimoni: Foto & Info Pengguna -->
        <div class="flex items-center space-x-4 mb-4">
        <img
            src="{{ asset('uploads/' . $t->photo) }}"
            alt="{{ $t->name }}"
            class="w-16 h-16 rounded-full object-cover"
          />
          <div>
            <h2 class="text-lg font-semibold">{{ $t->name }}</h2>
            @if ($t->position)
              <p class="text-gray-500 text-sm">{{ $t->position }}</p>
            @endif
          </div>
        </div>

        <!-- Konten Testimoni -->
        <p class="text-gray-700 italic">“{{ $t->content }}”</p>
      </div>
    @endforeach
  </div>


  <!-- Form Tambah Testimoni -->
<!-- Form Tambah Komentar (Simple Style) -->
<div class="mt-12 max-w-2xl mx-auto">
  <p class="text-xl font-bold mb-4">Tulis Komentar atau Testimoni</p>

  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
      <input type="text" name="name" placeholder="Nama kamu" class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-500" required value="{{ old('name') }}">
      @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
    </div>

    <div>
      <textarea name="content" rows="4" placeholder="Tulis testimoni atau komentar kamu..." class="w-full border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-500" required>{{ old('content') }}</textarea>
      @error('content') <small class="text-red-500">{{ $message }}</small> @enderror
    </div>

    <div>
      <p class="text-gray-600 text-sm">Upload Foto (Opsional)</p>
      <input type="file" name="photo" class="mt-1 block w-full text-sm text-gray-500">
      @error('photo') <small class="text-red-500">{{ $message }}</small> @enderror
    </div>

    <div class="text-right">
      <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded">
        Kirim
      </button>
    </div>
  </form>
</div>


</div>
@endsection
