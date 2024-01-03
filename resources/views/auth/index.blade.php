@extends('auth')

@section('title', 'Login')
@section('subtitle', 'Masukkan Email dan Kata Sandi Anda untuk masuk di akun Anda')

@section('image')
    {{-- <div class="bg-size-cover bg-position-center bg-repeat-no-repeat overlay overlay-dark overlay-50 vh-100 me-n4" style="background-image: url({{ asset('/assets/img/sign-in-cover.jpeg') }});"></div> --}}
    <div class="text-center">
        <img src="{{ asset('/assets/img/sign-in-illustration.svg') }}" alt="..." class="img-fluid">
    </div>
@endsection

@section('link')
    <small class="mb-0 text-muted">
        Belum memiliki Akun? <a href="/register" class="fw-semibold">Daftar</a>
    </small>
@endsection

@section('form')  
    <form action="/login" method="POST">
        @csrf
        <div class="row">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div>{{ session('success') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div>{{ session('loginError') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Alamat Email
                    </label>

                    <!-- Input -->
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email Anda" value="{{ old('email') }}" autofocus required">
                    @error('email')
                        <div id="email" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Password -->
                <div class="mb-4">

                    <div class="row">
                        <div class="col">

                            <!-- Label -->
                            <label class="form-label">
                                Kata Sandi
                            </label>
                        </div>

                        <div class="col-auto">
                            
                            <!-- Help text -->
                            <a href="/reset-pass" class="form-text small text-muted link-primary">Lupa Kata Sandi</a>
                        </div>
                    </div> <!-- / .row -->

                    <!-- Input -->
                    <div class="input-group input-group-merge">
                        <input type="password" name="password" class="form-control" autocomplete="off" data-toggle-password-input placeholder="Kata Sandi Anda" required>
                        @error('password')
                            <div id="password" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        <button type="submit" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="form-check">

            <!-- Input -->
            <input type="checkbox" class="form-check-input" id="remember">

            <!-- Label -->
            <label class="form-check-label" for="remember">
                Ingatkan Saya
            </label>
        </div>

        <!-- Button -->
        <button type="button" class="btn btn-primary mt-3">
            Masuk
        </button>
    </form>
@endsection
