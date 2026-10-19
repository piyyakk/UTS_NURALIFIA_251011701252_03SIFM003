<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Camp Outdoor') | Camp Outdoor</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root { --bs-link-color: #343a40; --bs-link-color-rgb: 52, 58, 64; --bs-link-hover-color: #000; --bs-link-hover-color-rgb: 0, 0, 0; }
        .accordion-button:not(.collapsed) { background-color: #f1f3f5; color: #212529; box-shadow: none; }
        .accordion-button:focus { border-color: #adb5bd; box-shadow: none; }
        html { scroll-behavior: smooth; }
        .brand-text { color: #212529; }
        .hero { background-color: #343a40; }
        .gear-img { width: 100%; height: 100%; object-fit: cover; }
        section[id] { scroll-margin-top: 70px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold brand-text" href="{{ route('home') }}">Camp Outdoor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#keunggulan">Keunggulan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#katalog">Katalog</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('how') ? 'active fw-semibold' : '' }}" href="{{ route('how') }}">Cara Sewa</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('rules') ? 'active fw-semibold' : '' }}" href="{{ route('rules') }}">Peraturan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#faq">FAQ</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-5">
                <h5 class="text-white">Camp Outdoor</h5>
                <p class="small text-secondary mb-0">Penyewaan perlengkapan camping dan outdoor dengan tarif harian. Dibuat sebagai tugas UTS Rekayasa Web.</p>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="text-white">Menu</h6>
                <ul class="list-unstyled small mb-0">
                    <li><a class="link-secondary text-decoration-none" href="{{ route('home') }}#katalog">Katalog Alat</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{ route('how') }}">Cara Sewa</a></li>
                    <li><a class="link-secondary text-decoration-none" href="{{ route('rules') }}">Peraturan</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <h6 class="text-white">Kontak</h6>
                <ul class="list-unstyled small text-secondary mb-0">
                    <li>Jl.Griya Indah Serpong, Gunung Sindur Bogor</li>
                    <li>0851-6285-7032</li>
                    <li>campoutdoor@example.com</li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="small text-secondary">
            &copy; 2026 Nur Alifia - 251011701252 - 03SIFMOO3 | UTS Rekayasa Web, Universitas Pamulang
        </div>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
