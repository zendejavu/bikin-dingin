@extends('auth')

@section('title', 'Daftar Akun')
@section('subtitle')
    Belum memiliki Akun? Buat Akun Anda sekarang juga
@endsection

@section('image')
    {{-- <div class="bg-size-cover bg-position-center bg-repeat-no-repeat overlay overlay-dark overlay-50 vh-100 me-n4" style="background-image: url({{ asset('/assets/img/sign-up-cover.jpeg') }});"></div> --}}
    <div class="text-center">
        <div class="text-center">
            <img src="{{ asset('/assets/img/welcome-illustration.svg') }}" alt="..." class="img-fluid">
        </div>
    </div>
@endsection

@section('link')
    <small class="mb-0 text-muted">
        Apakah Anda telah terdaftar? <a href="/login" class="fw-semibold">Login</a>
    </small>
@endsection

@section('form') 
    <form>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Alamat Email
                    </label>

                    <!-- Input -->
                    <input type="email" class="form-control" placeholder="Alamat Email Anda">
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Kata Sandi
                    </label>

                    <!-- Input -->
                    <div class="input-group input-group-merge">
                        <input type="password" class="form-control" autocomplete="off" data-toggle-password-input placeholder="Kata Sandi Anda">
                        
                        <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Konfirmasi Kata Sandi
                    </label>

                    <!-- Input -->
                    <div class="input-group input-group-merge">
                        <input type="password" class="form-control" autocomplete="off" data-toggle-password-input placeholder="Ketikkan Kembali Sandi Anda">
                        
                        <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="form-check">

            <!-- Input -->
            <input type="checkbox" class="form-check-input" id="agree">

            <!-- Label -->
            <label class="form-check-label" for="agree">
                Saya setuju dengan <a href="https://policies.google.com/terms">Persyaratan dan Layanan Google</a> dan telah memahami <a href="https://policies.google.com/privacy">Kebijakan Privasi</a>
            </label>
        </div>

        <!-- Button -->
        <button type="button" class="btn btn-primary mt-3">
            Daftar
        </button>
    </form>
@endsection