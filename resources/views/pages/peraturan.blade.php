@extends('layouts.app')

@section('title', 'Peraturan')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-3">Peraturan sewa</h1>

    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Penyewa wajib menitipkan satu kartu identitas asli yang masih berlaku.</li>
            <li class="list-group-item">Hitungan sewa per tanggal. Batas pengembalian pukul 21.00.</li>
            <li class="list-group-item">Keterlambatan pengembalian dihitung sebagai tambahan satu hari sewa.</li>
            <li class="list-group-item">Alat yang rusak atau hilang diganti sesuai nilai kerusakan.</li>
            <li class="list-group-item">Alat basah segera dilaporkan ke admin saat dikembalikan.</li>
            <li class="list-group-item">Alat dikembalikan dalam keadaan bersih dari lumpur dan sampah.</li>
        </ul>
    </div>
</div>
@endsection
