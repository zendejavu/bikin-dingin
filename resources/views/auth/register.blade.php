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

@section('js_auth')
    <script>
        var checker = document.getElementById('agree');
        var sendbtn = document.getElementById('daftar');
        // when unchecked or checked, run the function
        checker.onchange = function(){
            if(this.checked){
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }
        }
    </script>
@endsection

@section('link')
    <small class="mb-0 text-muted">
        Apakah Anda telah terdaftar? <a href="/login" class="fw-semibold">Login</a>
    </small>
@endsection

@section('form') 
    <form action="/register" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <!-- Input -->
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama Lengkap Anda" required>
                    @error('name')
                        <div id="name" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Username
                    </label>

                    <!-- Input -->
                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username Anda" required>
                    @error('username')
                        <div id="username" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">

            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Alamat Email
                    </label>

                    <!-- Input -->
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Alamat Email Anda" required>
                    @error('email')                        
                        <div id="email" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-4">

                    <!-- Label -->
                    <label class="form-label">
                        Kata Sandi
                    </label>

                    <!-- Input -->
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" data-toggle-password-input placeholder="Kata Sandi Anda" required>
                        <button type="button" class="input-group-text px-4 text-secondary link-primary @error('password') is-invalid @enderror" data-toggle-password></button>
                    </div>
                </div>
                @error('password')
                    <div id="password" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
        <button type="submit" class="btn btn-primary mt-3" id="daftar">
            Daftar
        </button>
    </form>
@endsection