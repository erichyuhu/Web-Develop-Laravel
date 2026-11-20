@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Artikel Blog</h2>
    <div class="row">
        @foreach($blogs as $article)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">{{ $article['category'] }}</span>
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $article['date'] }}</h6>
                        <p class="card-text">{{ $article['summary'] }}</p>
                        <!-- Tombol ini mengarah ke route blog.detail dan mengirimkan ID artikel -->
                        <a href="{{ route('blog.detail', $article['id']) }}" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection