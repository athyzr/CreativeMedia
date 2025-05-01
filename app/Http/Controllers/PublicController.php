<?php
// app/Http/Controllers/PublicController.php
namespace App\Http\Controllers;

use App\Models\StudyField;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\StudentWork;
use App\Models\Article; // pastikan model Article di-import di atas
use App\Models\Contact;


class PublicController extends Controller
{
    public function bidangStudi()
    {
        $studyFields = StudyField::all();
        return view('bidangstudi', compact('studyFields'));
    }

    public function layananJasa()
    {
        $services = Service::all();
        return view('layananjasa', compact('services'));
    }

    // Contoh tambahan di HomeController
    public function karyaSiswa()
    {
        $studentWorks = \App\Models\StudentWork::latest()->get();
        return view('karyasiswa', compact('studentWorks'));
    }

    public function testimoni()
    {
        $testimonials = Testimonial::latest()->get();
        return view('testimoni', compact('testimonials'));
    }

    public function artikel()
    {
        $articles = Article::all();
        return view('artikel', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = \App\Models\Article::findOrFail($id);
        return view('show', compact('article'));
    }

    public function hubungi()
    {
        $contacts = Contact::all(); // ambil semua kontak
        return view('hubungi', compact('contacts'));
    }
    
    

    
    
}
