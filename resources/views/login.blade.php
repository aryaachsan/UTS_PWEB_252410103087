
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center"
         style="min-height: 65vh;">

        <div class="col-md-5 col-lg-4">

            <div class="card border-0 shadow">

                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <h3 class="fw-bold">INVENTARIS UKM</h3>
                        <p class="text-muted">
                            Silakan masuk ke akun Anda
                        </p>
                    </div>

                    <form action="{{ route('login.proses') }}"
                          method="POST">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label">
                                Username
                            </label>

                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   placeholder="Masukkan username"
                                   value="{{ old('username') }}"
                                   required>
                            
                            @error('username')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <button type="submit"
                                class="btn btn-primary w-100">
                            Masuk
                        </button>

                    </form>

                </div>
            </div>

            <p class="text-center text-muted mt-3">
                Sistem Informasi Inventaris UKM Kampus
            </p>

        </div>
    </div>
</div>

@endsection
