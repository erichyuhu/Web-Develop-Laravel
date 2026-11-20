@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('blog') }}" class="text-decoration-none btn btn-sm btn-light mb-3">&larr; Kembali ke Daftar Blog</a>
            
            <h2 class="mb-2">{{ $blog['title'] }}</h2>
            <p class="text-muted">{{ $blog['date'] }} | Kategori: <span class="badge bg-secondary">{{ $blog['category'] }}</span></p>
            
            <img src="{{ asset($blog['image']) }}" class="card-img-top object-fit-cover" alt="{{ $blog['title'] }}">
            
            <div class="content lh-lg">
                <p>{{ $blog['summary'] }}</p>
                <p>ini adalah isi dari detail panjang artikel, ini adalah isi dari detail panjang artikel, ini adalah isi dari detail panjang artikel, ini adalah isi dari detail panjang artikel</p>
            </div>
        </div>
    </div>
@endsection