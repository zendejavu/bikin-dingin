@extends('auth')

@section('title', 'Lupa Kata Sandi ?')
@section('subtitle')
    Masukkan email Anda dan Kami akan mengirimkan<br class="d-none d-lg-block">sebuah email dengan panduan untuk mereset kata sandi Anda
@endsection

@section('image')
    {{-- <div class="bg-size-cover bg-position-center bg-repeat-no-repeat overlay overlay-dark overlay-50 vh-100 me-n4" style="background-image: url({{ asset('/assets/img/reset-password-cover.jpeg') }});"></div> --}}
    <div class="text-center">
        <img src="{{ asset('/assets/img/reset-password-illustration.svg') }}" alt="..." class="img-fluid">
    </div>
@endsection

@section('link')
    <small class="mb-0 text-muted">
        Kembali ke Halaman <a href="/login" class="fw-semibold">Login</a>
    </small>
@endsection

@section('form')  
    <form>
        <div class="mb-4">

            <!-- Label -->
            <label class="form-label">
                Alamat Email
            </label>

            <!-- Input -->
            <input type="email" class="form-control" placeholder="Masukkan email Anda">
        </div>

        <!-- Button -->
        <button type="button" class="btn btn-primary mt-3">
            Atur Ulang Kata Sandi
        </button>
    </form>
@endsection
