@extends('layouts.app')

@section('title', $gear->name)

@section('content')
<div class="container py-4">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home', ['kategori' => $gear->category]) }}#katalog">{{ $gear->category }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $gear->name }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="ratio ratio-4x3 border rounded overflow-hidden">
                <img src="{{ asset('assets/images/' . $gear->image) }}" class="gear-img" alt="{{ $gear->name }}">
            </div>
        </div>

        <div class="col-md-6">
            <span class="badge text-bg-dark">{{ $gear->category }}</span>
            <h1 class="h3 mt-2">{{ $gear->name }}</h1>

            <div class="fs-4 fw-bold brand-text">
                Rp {{ number_format($gear->rent_price, 0, ',', '.') }}<span class="fs-6 fw-normal text-muted"> / hari</span>
            </div>

            @if ($gear->stock > 0)
                <p class="text-dark small mt-1">Tersedia: {{ $gear->stock }} unit</p>
            @else
                <p class="text-danger small mt-1">Stok habis</p>
            @endif

            <p>{{ $gear->description }}</p>

            <table class="table table-bordered table-sm">
                <tbody>
                    <tr><th class="w-50 bg-light">Kategori</th><td>{{ $gear->category }}</td></tr>
                    <tr><th class="bg-light">Tarif sewa</th><td>Rp {{ number_format($gear->rent_price, 0, ',', '.') }} per hari</td></tr>
                    <tr><th class="bg-light">Stok</th><td>{{ $gear->stock }} unit</td></tr>
                    <tr><th class="bg-light">Jaminan</th><td>Kartu identitas asli</td></tr>
                </tbody>
            </table>

            <a href="{{ route('home') }}#katalog" class="btn btn-outline-secondary">Kembali ke Katalog</a>
            <a href="{{ route('how') }}" class="btn btn-dark">Cara Sewa</a>
        </div>
    </div>

    @if ($related->count())
        <h2 class="h5 mt-5 mb-3">Alat lain di kategori {{ $gear->category }}</h2>
        <div class="row row-cols-2 row-cols-lg-4 g-3">
            @foreach ($related as $item)
                <div class="col">
                    <a href="{{ route('gears.show', $item->id) }}" class="card h-100 text-decoration-none text-body">
                        <div class="ratio ratio-4x3">
                            <img src="{{ asset('assets/images/' . $item->image) }}" class="gear-img card-img-top" alt="{{ $item->name }}">
                        </div>
                        <div class="card-body p-2">
                            <div class="small">{{ $item->name }}</div>
                            <div class="small fw-bold">Rp {{ number_format($item->rent_price, 0, ',', '.') }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

</div>
@endsection
