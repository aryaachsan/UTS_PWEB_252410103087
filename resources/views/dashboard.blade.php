
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">

    <!-- Sambutan Pengguna -->
    <div class="mb-4">
        <h2 class="fw-bold">
            Selamat Datang, {{ $username }}!
        </h2>

        <p class="text-muted">
            Selamat datang di Sistem Informasi Inventaris UKM.
            Kelola data inventaris organisasi dengan mudah.
        </p>
    </div>

    <!-- Ringkasan Dashboard -->
    <div class="row g-3">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total Barang</h6>
                    <h2 class="fw-bold text-primary">5</h2>
                    <p class="mb-0">Barang terdaftar</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Kondisi Baik</h6>
                    <h2 class="fw-bold text-success">3</h2>
                    <p class="mb-0">Barang dalam kondisi baik</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Perlu Perhatian</h6>
                    <h2 class="fw-bold text-danger">2</h2>
                    <p class="mb-0">Dipinjam atau rusak</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Menu Utama -->
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body p-4">

            <h5 class="fw-bold mb-3">Menu Utama</h5>

            <p class="text-muted">
                Pilih menu berikut untuk melanjutkan.
            </p>

            <div class="d-flex flex-wrap gap-2">

                <a href="{{ route('pengelolaan') }}"
                   class="btn btn-primary">
                    Kelola Inventaris
                </a>

                <a href="{{ route('profile', ['username' => $username]) }}"
                   class="btn btn-outline-primary">
                    Lihat Profile
                </a>

            </div>

        </div>
    </div>

</div>

@endsection
