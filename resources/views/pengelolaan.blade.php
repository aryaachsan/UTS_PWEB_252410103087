
@extends('layouts.app')

@section('title', 'Pengelolaan Inventaris')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Pengelolaan Inventaris</h2>
            <p class="text-muted mb-0">
                Daftar barang inventaris organisasi UKM.
            </p>
        </div>

        <span class="badge bg-primary fs-6">
            Total: {{ count($barang) }} Barang
        </span>
    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold">Data Inventaris Barang</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($barang as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>{{ $item['nama'] }}</td>

                                <td>{{ $item['kategori'] }}</td>

                                <td>
                                    @if ($item['kondisi'] == 'Baik')
                                        <span class="badge bg-success">
                                            Baik
                                        </span>
                                    @elseif ($item['kondisi'] == 'Dipinjam')
                                        <span class="badge bg-warning text-dark">
                                            Dipinjam
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            Rusak
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <a href="{{ route('dashboard') }}"
       class="btn btn-outline-primary mt-3">
        Kembali ke Dashboard
    </a>

</div>

@endsection