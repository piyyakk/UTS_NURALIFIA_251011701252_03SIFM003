@extends('layouts.app')

@section('title', 'Cara Sewa')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-3">Cara sewa</h1>
    <p class="text-muted">Prosesnya singkat. Ikuti urutan berikut.</p>

    <ol class="list-group list-group-numbered mb-4">
        <li class="list-group-item">Pilih alat di <a href="{{ route('home') }}#katalog">katalog</a> dan pastikan stoknya masih ada.</li>
        <li class="list-group-item">Hubungi admin lewat kontak di bagian bawah halaman, sebutkan alat dan tanggal sewa.</li>
        <li class="list-group-item">Admin mengonfirmasi ketersediaan dan total biaya sewa.</li>
        <li class="list-group-item">Datang ke toko pada hari pengambilan dan bawa kartu identitas asli.</li>
        <li class="list-group-item">Cek kondisi alat bersama admin, lalu alat siap dibawa.</li>
        <li class="list-group-item">Kembalikan alat sesuai tanggal yang disepakati dalam keadaan bersih dan lengkap.</li>
    </ol>

    <a href="{{ route('home') }}#katalog" class="btn btn-dark">Lihat Katalog</a>
</div>
@endsection
