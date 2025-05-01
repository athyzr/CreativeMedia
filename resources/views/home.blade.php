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

  <!-- Spacer untuk menghindari tumpang tindih navbar fixed -->
  <div class="pt-10"></div>
    <!-- cukup untuk jarak dari navbar -->

  <!-- Hero Banner Carousel -->
  <section class="pt-30">
    <div class="swiper mySwiper w-full h-[400px]">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex justify-center items-center">
          <img src="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2Fbc2bd5fa70064b43b7957b7c8279a2ae" class="w-full h-full object-cover" alt="Banner 1" />
        </div>
        <div class="swiper-slide flex justify-center items-center">
          <img src="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2F9fa327ff47e3488da524fc4efc845f68" class="w-full h-full object-cover" alt="Banner 2" />
        </div>
        <div class="swiper-slide flex justify-center items-center">
          <img src="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2Fa5563d9d1abe44a98bcb67fc989e3878" class="w-full h-full object-cover" alt="Banner 3" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Hero Promo Section -->
  <div class="relative w-full overflow-hidden">
    <img 
      src="https://cdn.builder.io/api/v1/image/assets%2F164a532bf3da4e248240517d6af74e47%2Fc58b1a1353c147ab8df8e30d85822bad" 
      alt="Banner Promo"
      class="w-full h-auto object-cover"
      style="width: 1400px; height: auto;"
    />
    <div class="absolute inset-0 flex flex-col justify-center items-center px-4 text-center">
      <h1 class="text-4xl font-extrabold text-white drop-shadow-lg mb-2">DAPATKAN PROMO SPESIAL BULAN INI</h1>
      <h2 class="text-xl font-bold text-white drop-shadow-md">INFO HUBUNGI : 08123456789</h2>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    document.getElementById('menu-toggle').addEventListener('click', function () {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>


<!-- OUR SERVICES Section -->
<section class="py-24 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12">OUR SERVICES</h2>
    <p class="text-center text-lg mb-16">
      IT & Multimedia Training, Branding & Design, Web Development & Mobile Apps Development
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      @foreach($services as $service)
        <!-- Service {{ $loop->iteration }} -->
        <a href="{{ route('layananjasa.show', ['id' => $service->id]) }}" class="text-center group">
          
          <!-- Menentukan gambar berdasarkan nama layanan -->
          @if(strtolower($service->title) == 'branding dan design')
            <img src="{{ asset('images/icon-branding.png') }}" alt="{{ $service->title }}" class="mx-auto mb-6 w-24 h-24 transition-transform group-hover:scale-110">
          @elseif(strtolower($service->title) == 'web development')
            <img src="{{ asset('images/icon-webdev.png') }}" alt="{{ $service->title }}" class="mx-auto mb-6 w-24 h-24 transition-transform group-hover:scale-110">
          @elseif(strtolower($service->title) == 'mobile apps')
            <img src="{{ asset('images/icon-mobile.png') }}" alt="{{ $service->title }}" class="mx-auto mb-6 w-24 h-24 transition-transform group-hover:scale-110">
          @elseif(strtolower($service->title) == 'course and training')
            <img src="{{ asset('images/icon-course.png') }}" alt="{{ $service->title }}" class="mx-auto mb-6 w-24 h-24 transition-transform group-hover:scale-110">
          @endif
          
          <!-- Judul layanan -->
          <h3 class="text-xl font-semibold mb-2">{{ strtoupper($service->title) }}</h3>
          
          <div class="w-12 mx-auto border-b-2 border-red-500 mb-4"></div>
          <p class="text-gray-600 text-sm">
            <!-- Tambahkan deskripsi layanan jika ingin menampilkannya -->
            {{ \Str::limit(strip_tags($service->description), 100) }}
          </p>
        </a>
      @endforeach
    </div>
  </div>
</section>


<section class="bg-gray-900 text-white py-16">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 px-6">
    <div>
      <h2 class="text-3xl font-bold mb-4">ABOUT US</h2>
      <p class="mb-6">
      Creative Media merupakan perusahaan Digital Agency & IT Consultant di Surabaya. Kami berfokus pada Computer Course & Training, Branding & Design, Web Development & Mobile Apps Development. Kami mempunyai 15 bidang studi unggulan yaitu: Komputer Umum & Internet, Desain Grafis, Animasi, Digital Marketing, Desain Interior, Desain Arsiterktur, Administrasi Perkantoran, Komputer Akuntansi, Editing Video Multimedia, Website Design CMS, Web Designer, Programming Web, Programming Java Android, Photography.
      </p>
      <p>
      Selain Kursus dan Pelatihan IT Multimedia kami menyediakan Devisi Development yang berfokus pada Development Website, Sistem Aplikasi Perusahaan, Aplikasi Android & iOS, dll. 
      </p>
    </div>

    <div class="flex flex-col gap-8">
      <!-- 1 Fitur -->
      <div class="flex items-start gap-4">
        <img src="{{ asset('images/icon-course.png') }}" alt="Pelatihan" class="w-12 h-12">
        <div>
          <h4 class="text-xl font-semibold">PELATIHAN IT & MULTIMEDIA</h4>
          <p>Sejak 2014, lebih dari 3000 siswa maupun perusahaan sudah mempercayakan...</p>
        </div>
      </div>

      <!-- 2 Fitur -->
      <div class="flex items-start gap-4">
        <img src="{{ asset('images/icon-branding.png') }}" alt="Branding" class="w-12 h-12">
        <div>
          <h4 class="text-xl font-semibold">BRANDING & DESIGN</h4>
          <p>Berbagai project Branding & Design perusahaan sudah kami selesaikan...</p>
        </div>
      </div>

      <!-- 3 Fitur -->
      <div class="flex items-start gap-4">
        <img src="{{ asset('images/icon-webdev.png') }}" alt="Web Development" class="w-12 h-12">
        <div>
          <h4 class="text-xl font-semibold">WEB DEVELOPMENT</h4>
          <p>Kami merancang sistem website & aplikasi web-based sesuai dengan kebutuhan...</p>
        </div>
      </div>

      <!-- 4 Fitur -->
      <div class="flex items-start gap-4">
        <img src="{{ asset('images/icon-mobile.png') }}" alt="Mobile Apps" class="w-12 h-12">
        <div>
          <h4 class="text-xl font-semibold">MOBILE APPS DEVELOPMENT</h4>
          <p>Kami membuat aplikasi Android & iOS sesuai kebutuhan perusahaan Anda.</p>
        </div>
      </div>

    </div>
  </div>
</section>


@endpush
