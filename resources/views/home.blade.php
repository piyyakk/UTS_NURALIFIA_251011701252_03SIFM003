@extends('layouts.app')

@section('title', 'Sewa Alat Camping')

@section('content')

<section class="hero text-white py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-7">
                <p class="text-uppercase small mb-2 text-white-50">Penyewaan alat camping</p>
                <h1 class="display-5 fw-bold">Perlengkapan camping, tinggal ambil dan berangkat.</h1>
                <p class="lead mt-3">Tenda, carrier, sleeping bag, dan alat masak yang dicuci dan dicek setiap selesai disewa. Tarif harian, cocok untuk akhir pekan.</p>
                <a href="#katalog" class="btn btn-light me-2">Lihat Katalog</a>
                <a href="{{ route('how') }}" class="btn btn-outline-light">Cara Sewa</a>
            </div>
        </div>
    </div>
</section>

<section id="keunggulan" class="container py-5">
    <h2 class="h3 mb-1">Kenapa sewa di sini</h2>
    <p class="text-muted mb-4">Beberapa hal yang kami jaga supaya camping kamu lancar.</p>
    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="border rounded p-3 h-100">
                <h3 class="h6">Alat terawat</h3>
                <p class="small text-muted mb-0">Setiap alat dicek kelengkapan dan kondisinya sebelum disewakan.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="border rounded p-3 h-100">
                <h3 class="h6">Bersih</h3>
                <p class="small text-muted mb-0">Tenda dan sleeping bag dicuci serta dijemur setelah dipakai penyewa sebelumnya.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="border rounded p-3 h-100">
                <h3 class="h6">Stok jelas</h3>
                <p class="small text-muted mb-0">Jumlah unit yang tersedia tertulis di setiap alat, jadi tidak perlu tanya satu-satu.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="border rounded p-3 h-100">
                <h3 class="h6">Tarif harian</h3>
                <p class="small text-muted mb-0">Harga sewa per hari dan ditampilkan terbuka di katalog.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light border-top border-bottom py-5">
    <div class="container">
        <h2 class="h3 mb-4">Cara sewa, 3 langkah</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="fs-2 fw-bold brand-text me-3">1</div>
                    <div>
                        <h3 class="h6">Pilih alat</h3>
                        <p class="small text-muted mb-0">Cari di katalog, cek stok dan tarif sewanya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="fs-2 fw-bold brand-text me-3">2</div>
                    <div>
                        <h3 class="h6">Hubungi admin</h3>
                        <p class="small text-muted mb-0">Sebutkan alat, tanggal ambil, dan tanggal kembali.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="fs-2 fw-bold brand-text me-3">3</div>
                    <div>
                        <h3 class="h6">Ambil di toko</h3>
                        <p class="small text-muted mb-0">Bawa kartu identitas asli sebagai jaminan, lalu cek alat bersama admin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="katalog" class="container py-5">
    <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
        <div>
            <h2 class="h3 mb-1">Katalog alat</h2>
            <p class="text-muted mb-0">{{ $gears->count() }} alat{{ $kategori ? ' di kategori ' . $kategori : '' }}</p>
        </div>
    </div>

    <div class="mb-4 d-flex flex-wrap gap-2">
        <a href="{{ route('home') }}#katalog" class="btn btn-sm {{ !$kategori ? 'btn-dark' : 'btn-outline-dark' }}">Semua Alat</a>
        @foreach ($categories as $c)
            <a href="{{ route('home', ['kategori' => $c]) }}#katalog"
               class="btn btn-sm {{ $kategori === $c ? 'btn-dark' : 'btn-outline-dark' }}">{{ $c }}</a>
        @endforeach
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        @forelse ($gears as $gear)
            <div class="col">
                <div class="card h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-4x3">
                            <img src="{{ asset('assets/images/' . $gear->image) }}" class="gear-img card-img-top" alt="{{ $gear->name }}">
                        </div>
                        <span class="badge text-bg-dark position-absolute top-0 start-0 m-2">{{ $gear->category }}</span>
                    </div>
                    <div class="card-body">
                        @if ($gear->stock > 0)
                            <div class="small text-dark">Tersedia: {{ $gear->stock }} unit</div>
                        @else
                            <div class="small text-danger">Stok habis</div>
                        @endif
                        <h3 class="h6 mt-1">{{ $gear->name }}</h3>
                        <p class="small text-muted">{{ Str::limit($gear->description, 70) }}</p>
                        <div class="small text-muted">Tarif sewa</div>
                        <div class="fw-bold">Rp {{ number_format($gear->rent_price, 0, ',', '.') }}<span class="fw-normal text-muted small"> / hari</span></div>
                    </div>
                    <div class="card-footer bg-white border-top-0 pb-3">
                        <a href="{{ route('gears.show', $gear->id) }}" class="btn btn-dark btn-sm w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary mb-0">Belum ada alat di kategori ini.</div>
            </div>
        @endforelse
    </div>
</section>

<section id="faq" class="container pb-4">
    <h2 class="h3 mb-3">Pertanyaan yang sering muncul</h2>
    <div class="accordion" id="faqList">
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#f1">Bagaimana hitungan satu hari sewa?</button>
            </h3>
            <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqList">
                <div class="accordion-body">Hitungannya per tanggal. Ambil tanggal 10 dan kembalikan tanggal 11 sebelum jam 21.00 dihitung satu hari sewa.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f2">Jaminan apa yang harus dibawa?</button>
            </h3>
            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqList">
                <div class="accordion-body">Satu kartu identitas asli yang masih berlaku (KTP, SIM, atau paspor) atas nama penyewa. Dikembalikan saat alat kembali lengkap.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#f3">Kalau tenda basah kehujanan?</button>
            </h3>
            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqList">
                <div class="accordion-body">Jangan disimpan basah di dalam tas lebih dari sehari. Kabari admin saat mengembalikan supaya bisa langsung dijemur. Tidak ada denda untuk tenda basah.</div>
            </div>
        </div>
    </div>
</section>

@endsection
