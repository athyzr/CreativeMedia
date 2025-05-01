<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyFieldController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentWorkController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomepageContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicContactController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\PublicController;


// Public Routes
Route::get('/', fn () => view('home'))->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', fn () => view('about'))->name('profil');
Route::get('/layanan-jasa', fn () => view('services'))->name('services');
Route::get('/karya-siswa', fn () => view('works'))->name('works');
Route::get('/hubungi-kami', fn () => view('contact'))->name('contact');

Route::get('/profil', function () { return view('profil'); })->name('profil');  // Tambahkan nama route 'profil'
Route::get('/beranda', function () {return view('home'); })->name('beranda');  // Tambahkan nama route 'profil'
Route::get('/bidangstudi', [PublicController::class, 'bidangStudi'])->name('bidangstudi'); //sambung nya sama PublicController
Route::get('/layananjasa', [PublicController::class, 'layananJasa'])->name('layananjasa');
Route::get('/karyasiswa', [PublicController::class, 'karyaSiswa'])->name('karyasiswa');
Route::get('/testimoni', [PublicController::class, 'testimoni'])->name('testimoni');
Route::get('/artikel', [PublicController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{id}', [PublicController::class, 'show'])->name('articles.show');
Route::get('/bidangstudi/{id}', [StudyFieldController::class, 'show'])->name('bidangstudi.show');
Route::get('/layananjasa/{id}', [ServiceController::class, 'showPublic'])->name('layananjasa.show');



// Route::get('/', [PublicController::class, 'home'])->name('home');
// Route::get('/tentang', [PublicController::class, 'tentang'])->name('tentang');
// Route::get('/layanan', [PublicController::class, 'layanan'])->name('layanan');
Route::get('/hubungi', [PublicController::class, 'hubungi'])->name('hubungi');




Route::get('/contact', [PublicContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [PublicContactController::class, 'submitForm'])->name('contact.submit');

// Auth routes (login, register, etc)
Auth::routes();

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('study-fields', StudyFieldController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('student-works', StudentWorkController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class);
});



