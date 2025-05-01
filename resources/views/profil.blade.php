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
  
  <div class="pt-10"></div>

  <div class="bg-white py-12">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-blue-700 mb-6">
            The Winner "Indonesia Creative Innovative Business Awards 2019"
        </h2>
        <p class="text-gray-700 mb-6 leading-relaxed">
            Tahun 2019 <strong>CREATIVE MEDIA</strong> terpilih dan menerima penghargaan 
            <em>"INDONESIA CREATIVE INNOVATIVE BUSINESS AWARDS WINNER 2019"</em> 
            yang merupakan penghargaan bergengsi dan memiliki kredibilitas tinggi.
        </p>
        <p class="text-gray-700 mb-6 leading-relaxed">
            Penghargaan ini merupakan bukti kepercayaan publik dan customer setia kami dalam berekspansi, 
            meningkatkan keberhasilan organisasi maupun lembaga, sebuah apresiasi dan bukti kehandalan serta 
            pengakuan yang mengukuhkan <strong>CREATIVE MEDIA</strong> sebagai salah satu perusahaan terbaik dan 
            berpengaruh membawa perubahan positif di tanah air.
        </p>
        <p class="text-gray-700 mb-6 leading-relaxed">
            Penghargaan ini diberikan secara langsung oleh <strong>PUSAT REKOR INDONESIA</strong> 
            pada hari Jumat, <strong>12 April 2019</strong> bertempat di 
            <em>Aston Priority Simatupang & Conference Center – Jakarta</em>.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <img src="{{ asset('images/Awards-2019.jpg') }}" alt="Penghargaan Award" class="rounded shadow">
            <img src="{{ asset('images/The-Winner-2019.jpg') }}" alt="Penyerahan Penghargaan" class="rounded shadow">
        </div>
    </div>
</div>
  
<!-- Profil Perusahaan -->
<div class="bg-white py-12">
  <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 items-start">
            <!-- Teks Profil Perusahaan -->
            <div>
                <h1 class="text-3xl font-bold mb-6">Profil Perusahaan</h1>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Kami berfokus pada Computer Course & Trainings, Branding & Design, Web Development, Mobile Apps Development.
                    Dengan komitmen yang kuat, mengembangkan kualitas pendidikan non formal khususnya bidang IT & Multimedia di Kota Surabaya.
                    Kami merupakan Lembaga Pendidikan Non Formal yang Resmi mendapat izin penyelenggaraan, apresiasi dan dukungan penuh dari Dinas Pendidikan Kota Surabaya.
                    Kami hadir di Kota Surabaya menjawab kebutuhan generasi millennial yang tidak lepas dari Kebutuhan IT dan Multimedia.
                    Selain itu kami juga menyediakan Devisi Development guna menjawab permintaan maupun kebutuhan customer kami mulai dari Desain & Branding,
                    Pembuatan Website & Aplikasi Android. Silahkan mengakses website kami yang berfokus pada kebutuhan Jasa Development di <a href="#" class="text-blue-600 underline">SINI</a>.
                    Tim kami terdiri dari kalangan Dosen, Praktisi dan akademis yang mempunyai integritas, handal dan berpengalaman dibidangnya.
                </p>
            </div>

            <!-- Video YouTube -->
            <div class="flex justify-center">
                <iframe width="100%" height="315" 
                    src="https://www.youtube.com/embed/prDsdioSoOc?si=6RRs9FnmpV9mM16c" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>

        <!-- Section Kelas -->
        <div class="bg-gray-100 p-6 rounded-lg">
            <h2 class="text-xl font-bold text-center mb-6">3 Pilihan Kelas, Sesuaikan Dengan Kebutuhan Anda</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Regular Class -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-green-600 font-bold text-lg mb-2 text-center">Regular Class</h3>
                    <img src="{{ asset('images/reguler-class-1.jpg') }}" alt="Regular Class" class="w-full mb-4 rounded">
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>Free Biaya Pendaftaran</li>
                        <li>Sertifikat</li>
                        <li>Sistem Grup 1 Kelas (4 – 7 peserta)</li>
                        <li>Materi Sesuai Silabus Creative Media</li>
                        <li>Jadwal dari Lembaga</li>
                        <li>Kuota Terbatas</li>
                        <li>Konsultasi Selama Kursus Berlangsung</li>
                    </ul>
                </div>

                <!-- Inspiration Class -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-blue-600 font-bold text-lg mb-2 text-center">Inspiration Class</h3>
                    <img src="{{ asset('images/inspiration-class-1.jpg') }}" alt="Inspiration Class" class="w-full mb-4 rounded">
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>Free Biaya Pendaftaran</li>
                        <li>Sertifikat</li>
                        <li>Sistem Privat (1 Tentor 1 Siswa)</li>
                        <li>Materi Sesuai Silabus Creative Media</li>
                        <li>Jadwal Fleksibel (pagi/siang/malam) Sesuai Kesepakatan</li>
                        <li>Terdapat 2 Level (Basic & Advanced)</li>
                        <li>Cocok Untuk Mahasiswa/Karyawan</li>
                        <li>Maksimal Ditempuh Selama 2 Bulan</li>
                        <li>Garansi Sampai Bisa</li>
                        <li>Free Konsultasi Seumur Hidup</li>
                    </ul>
                </div>

                <!-- Mandiri Class -->
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-red-600 font-bold text-lg mb-2 text-center">Mandiri Class</h3>
                    <img src= "{{ asset('images/Creative-Media-Executive-Class.jpg') }}" alt="Mandiri Class" class="w-full mb-4 rounded">
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>Free Biaya Pendaftaran</li>
                        <li>Sertifikat</li>
                        <li>Sistem Privat / Training</li>
                        <li><strong>Materi Custom</strong> (sesuai kebutuhan peserta/perusahaan)</li>
                        <li>Jadwal Fleksibel (pagi/siang/malam) Sesuai Kesepakatan</li>
                        <li>Terdapat 2 Level (Basic & Advanced)</li>
                        <li>Cocok untuk Wirausaha atau Perusahaan</li>
                        <li>Maksimal Ditempuh Selama 2 Bulan</li>
                        <li>Garansi 100% uang kembali jika materi tidak sesuai dengan keinginan peserta/perusahaan</li>
                        <li>Semakin Banyak Peserta Biaya Semakin Terjangkau</li>
                        <li>Free Konsultasi Seumur Hidup</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection