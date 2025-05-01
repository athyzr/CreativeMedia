@extends('layouts.app')

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
  /* Custom styles */
  .contact-item {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  .contact-item:hover {
    transform: translateY(-5px);
  }
  .google-map {
    width: 100%;
    height: 400px;
    border: none;
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
      <li><a href="{{ route('bidangstudi') }}" class="hover:text-cyan-700">Bidang Studi</a></li>
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

<!-- Header Kontak -->
<div class="bg-cyan-700 text-white text-center py-20 mt-20">
  <h1 class="text-4xl font-bold">Hubungi Kami</h1>
  <p class="mt-4 text-lg">Kami siap membantu Anda. Hubungi kami melalui berbagai cara di bawah ini.</p>
</div>

<!-- Daftar Kontak -->
<div class="container mx-auto px-4 py-16">
  <h2 class="text-2xl font-semibold mb-8">Kontak Kami</h2>
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($contacts as $contact)
      <div class="contact-item">
        <h3 class="text-xl font-semibold">{{ $contact->name }}</h3>
        <p class="text-gray-600">{{ $contact->role }}</p>
        <p class="text-gray-800 mt-2"><strong>Email:</strong> 
          <a href="mailto:{{ $contact->email }}" class="text-cyan-700 hover:underline">{{ $contact->email }}</a>
        </p>
        <p class="text-gray-800 mt-2"><strong>Phone:</strong> 
          <a href="tel:{{ $contact->phone }}" class="text-cyan-700 hover:underline">{{ $contact->phone }}</a>
        </p>
      </div>
    @endforeach
  </div>
</div>

<!-- Keterangan Kontak Perusahaan -->
<section class="py-10 bg-white">
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold">Contact Us</h2>
    <p class="text-gray-600">We are always ready to help you!</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8">
    <!-- Surabaya Barat -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Surabaya Barat</h3>
      <div class="space-y-3 text-gray-700">
        <div class="flex items-start">
          <span class="mr-2">📍</span>
          <span>Kawasan Darmo Satellite Town<br>Jl. TUBANAN Baru 10/K-15, Surabaya 60188</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📞</span>
          <span>031-7328 540 | 031-9902 0730</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📱</span>
          <span>0821 3131 4040 (Ayu)</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">✉️</span>
          <span>care@creativemedia.id</span>
        </div>
      </div>
    </div>

    <!-- Surabaya Timur -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Surabaya Timur</h3>
      <div class="space-y-3 text-gray-700">
        <div class="flex items-start">
          <span class="mr-2">📍</span>
          <span>Jl. Nginden Intan Timur XVIII/A3-10, Surabaya 60118</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📞</span>
          <span>031-5917 3739</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📱</span>
          <span>0821 3131 0210 (Amie)</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">✉️</span>
          <span>nginden@creativemedia.id</span>
        </div>
      </div>
    </div>

    <!-- Kota Tuban -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Kota Tuban</h3>
      <div class="space-y-3 text-gray-700">
        <div class="flex items-start">
          <span class="mr-2">📍</span>
          <span>Graha Ronggolawe Blok H-6, Semanding, Tuban</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📞</span>
          <span>(0356) 8830 746</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">📱</span>
          <span>0857 3647 7705 (Putri)</span>
        </div>
        <div class="flex items-center">
          <span class="mr-2">✉️</span>
          <span>tuban@creativemedia.id</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Peta Lokasi Perusahaan (Google Maps) -->
<div class="container mx-auto px-4 py-16">
  <h2 class="text-2xl font-semibold mb-8">Lokasi Kami</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3957.770370697597!2d112.6834363!3d-7.2669526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fe9e83ac2c61%3A0xca8274bb2ee06d06!2sCREATIVE%20MEDIA%20(Digital%20Agency%20%26%20IT%20Consultant)!5e0!3m2!1sen!2sid!4v1745816606297!5m2!1sen!2sid" width="600" height="450" style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
    </iframe>  
    <div class="text-left mt-4">
        <a href="https://maps.app.goo.gl/sUxgWaxTUZPQ4HbU7" target="_blank" class="text-cyan-700 hover:underline">
            Klik untuk navigasi ke lokasi
        </a>
        </div>

</div>

@endsection
