
# Creative Media
Adalah proyek *recreate* website resmi Creative Media Surabaya (creativemedia.id). Aplikasi ini dibangun menggunakan Laravel sebagai backend dan Blade sebagai template engine, dengan fokus pada kemudahan pengelolaan konten melalui sistem manajemen konten (CMS) berbasis web. 

## ✨ Fitur Utama

- Manajemen Artikel & Thumbnail
- Daftar Bidang Studi & Detail
- Layanan Jasa & Deskripsi
- Galeri Karya Siswa
- Testimoni Pengguna
- Kontak Staf & Formulir Hubungi Kami
- Panel Admin (CRUD lengkap)
- Otentikasi Pengguna

## 🚀 Instalasi

1. **Clone Repository**
   ```sh
   git clone <repo-url>
   cd cms-creativemedia


2. **Install Dependencies**

   ```sh
   composer install
   npm install
   ```

3. **Salin File Environment**

   ```sh
   cp .env.example .env
   ```

4. **Generate Application Key**

   ```sh
   php artisan key:generate
   ```

5. **Migrasi Database**

   ```sh
   php artisan migrate
   ```

6. **Build Asset Frontend**

   ```sh
   npm run build
   ```

7. **Jalankan Server Lokal**
8. 
   ```sh
   php artisan serve
   ```

## 🗂️ Struktur Folder
* `app/Http/Controllers` — Controller aplikasi
* `app/Models` — Model Eloquent
* `resources/views` — Blade Templates
* `routes/web.php` — Routing Web
* `database/migrations` — Skema Database

## ⚙️ Konfigurasi
* Edit file `.env` untuk mengatur database, mail, dan konfigurasi lainnya.
* Pastikan direktori `public/uploads` dan `storage` memiliki permission tulis agar upload gambar dapat berjalan dengan baik.

## 🤝 Kontribusi
Kontribusi sangat terbuka! Silakan ajukan **pull request** atau **issue** jika ingin menyarankan perbaikan atau fitur baru.

