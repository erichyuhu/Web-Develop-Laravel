@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Tentang Saya</h2>
    <div class="row">
        <div class="col-md-8">
            <p class="lead">Saya adalah mahasiswa Informatika di Universitas Ciputra, Surabaya. Saat ini saya juga berperan sebagai Lead Audio Visual & IT support.</p>
            <p>Saya memiliki minat mendalam pada pengembangan aplikasi web, otomasi sistem menggunakan integrasi *webhook* (seperti n8n dan bot Telegram), serta rekayasa audio untuk *live event*. Saya terbiasa merancang arsitektur jaringan mandiri dan mengelola *home server* menggunakan CasaOS dan Docker.</p>
            
            <h4 class="mt-4">Keahlian (Skills)</h4>
            <ul>
                <li><strong>Pemrograman & Basis Data:</strong> Python, Kotlin, JavaScript, PHP, SQL</li>
                <li><strong>Web Development:</strong> PHP, Bootstrap, Firebase Realtime Database</li>
                <li><strong>Infrastruktur & Jaringan:</strong> Ruijie/Reyee, MikroTik, Docker, Cloud (Render)</li>
                <li><strong>Audio Visual:</strong> Smaart v9, Blackmagic ATEM, Allen & Heath Consoles (Avantis, SQ-7, GLD-80)</li>
            </ul>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/about.jpg') }}" class="img-fluid rounded shadow" alt="Foto Profil Lengkap">
        </div>
    </div>
@endsection