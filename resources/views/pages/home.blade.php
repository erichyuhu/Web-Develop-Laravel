@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<div class="row align-items-center mb-5">
    <div class="col-md-4 text-center">
        <!-- Avatar Dummy -->
        <img src="{{ asset('images/images.jpeg') }}" alt="Frederich Irawan" class="img-fluid rounded-circle shadow">
    </div>
    <div class="col-md-8 mt-4 mt-md-0">
        <h1 class="display-4 fw-bold">Halo, Saya Frederich Irawan</h1>
        <h4 class="text-secondary">Lead Audio Visual & IT Specialist | Mahasiswa Informatika</h4>
        <p class="lead mt-3">Saya memiliki passion dalam live sound engineering, pengembangan aplikasi web/mobile, serta perancangan infrastruktur IT. Mengeksplorasi solusi digital yang efisien dan andal.</p>
        
        <div class="mt-4">
            <a href="{{ route('portfolio') }}" class="btn btn-primary me-2">Lihat Karya Saya</a>
            <a href="{{ route('about') }}" class="btn btn-outline-dark">Tentang Saya</a>
        </div>
    </div>
</div>
@endsection