@extends('layouts.app')
@section('title', 'Portofolio')

@section('content')
<div class="text-center mb-5">
    <h2 class="fw-bold">Portofolio & Proyek</h2>
    <p class="text-muted">Beberapa karya dan sistem yang pernah saya kembangkan.</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($portfolios as $item)
        <div class="col">
            <x-portfolio-card :item="$item" />
        </div>
    @endforeach
</div>
@endsection