@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menu Admin</div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('admin.study-fields.index') }}" class="list-group-item list-group-item-action">
                            Kelola Bidang Studi
                        </a>
                        <a href="{{ route('admin.services.index') }}" class="list-group-item list-group-item-action">
                            Kelola Layanan Jasa
                        </a>
                        <a href="{{ route('admin.student-works.index') }}" class="list-group-item list-group-item-action">
                            Kelola Karya Siswa
                        </a>
                        <a href="{{ route('admin.testimonials.index') }}" class="list-group-item list-group-item-action">
                            Kelola Testimonial
                        </a>
                        <a href="{{ route('admin.articles.index') }}" class="list-group-item list-group-item-action">
                            Kelola Artikel
                        </a>
                        <a href="{{ route('admin.contacts.index') }}" class="list-group-item list-group-item-action">
                            Kelola Kontak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection