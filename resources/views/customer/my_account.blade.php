@extends('index')

@section('title', 'Informasi Akun')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-plugins')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<style>
    .scrollspy li a {
        border-left: 3px solid transparent;
        color: var(--bs-body-color);
        display: block;
        padding: .9375rem 1.25rem;
        position: relative;
    }
    .py-3 {
        padding-bottom: .624999375rem!important;
        padding-top: .624999375rem!important;
    }
    .scrollspy {
        list-style: none;
    }
    .rounded-circle {
    border-radius: 50%!important;
    }
    .m-0 {
    margin: 0!important;
    }
    .align-items-center {
    align-items: center!important;
    }
    .justify-content-center {
    justify-content: center!important;
    }
    .h-30px {
    height: 30px!important;
    }
    .w-30px {
    width: 30px!important;
    }
    .end-0 {
    right: 0!important;
    }
    .bottom-0 {
    bottom: 0!important;
    }
    .position-absolute {
    position: absolute!important;
    }
    .top-nav{
        top:80px!important;
    }
</style>
@endsection

@section('js-plugins')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('input:checkbox').click(function () {
        if ($(this).is(':checked')) {
            $("#btn-delete").prop("disabled", false);
        } else {
            $("#btn-delete").prop("disabled", true);
        }
    });
});
</script>
@endsection

@section('container')
<div class="container-fluid blog py-5 pb-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Data Profil</h5>
            <h1>Data Diri</h1>
        </div>
        <div class="row g-4 justify-content-center mb-3 wow fadeIn" data-wow-delay=".5s">
            <div class="col-xl-10">
                <hr class="text-dark g-2 wow fadeIn" data-wow-delay=".3s">
                <!-- Card -->
                <div class="card-body">
                    @session('status')
                    <div class="alert alert-success" role="alert">
                        {{ $value }}
                    </div>
                    @endsession
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="name" class="col-form-label">Nama Lengkap</label>
                            </div>
                
                            <div class="col-lg">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" autofocus autocomplete="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- / .row -->
                
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="phone" class="col-form-label">Handphone</label>
                            </div>
                
                            <div class="col-lg">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $user->phone )}}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- / .row -->
                
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="address" class="col-form-label">Alamat</label>
                            </div>
                
                            <div class="col-lg">
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2">{{ old('address',$user->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- / .row -->
                
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="zip" class="col-form-label">Kode Pos</label>
                            </div>
                
                            <div class="col-lg">
                                <input type="number" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" value="{{ old('zip', $user->zip )}}">
                                @error('zip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- / .row -->
                

                
                        <div class="d-flex justify-content-end mt-5">
                
                            <!-- Button -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        
                    </form>
                </div>
    
                <!-- Card -->
                {{-- <div class="card border-0 scroll-mt-3" id="usernameSection">
                    <div class="card-header">
                        <h2 class="h3 mt-4">Username</h2>
                    </div>

                    <div class="card-body">
                        <p class="small text-muted mb-3">
                            Username Anda saat ini 
                            <strong>{{ '@'.Auth::user()->username }}</strong>
                        </p>

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="username" class="col-form-label">Username</label>
                            </div>

                            <div class="col-lg">
                                <div class="input-group">
                                    <span class="input-group-text" id="username-addon">
                                        <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.25,12A5.25,5.25,0,1,1,12,6.75,5.25,5.25,0,0,1,17.25,12Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                            <path d="M17.25,12v2.25a3,3,0,0,0,6,0V12a11.249,11.249,0,1,0-4.5,9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" id="username" placeholder="username" value="{{ Auth::user()->username }}" aria-describedby="username-addon">
                                </div>
                                <div class="invalid-feedback">Please add a new username</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div> --}}

                <!-- Card -->
                {{-- <div class="card border-0 scroll-mt-3" id="passwordSection">
                    <div class="card-header">
                        <h2 class="h3 mt-4">Password</h2>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="currentPassword" class="col-form-label">Password saat ini</label>
                            </div>

                            <div class="col-lg">
                                <input type="password" class="form-control" id="currentPassword">
                                <div class="invalid-feedback">Please add your current password</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="newPassword" class="col-form-label">Password baru</label>
                            </div>

                            <div class="col-lg-4 col-6">
                                <input type="password" class="form-control" id="newPassword" autocomplete="off" data-toggle-password-input placeholder="Your new password">
                            </div>

                            <div class="col-lg-4 col-6">
                                <input type="password" class="form-control" id="newPasswordAgain" autocomplete="off" data-toggle-password-input placeholder="Confirm your new password">

                                <div class="invalid-feedback">Please confirm your new password again</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row">
                            <div class="col-lg offset-lg-3">
                                <div class="alert alert-light mw-450px" role="alert">
                                    <h4 class="mb-3">Syarat Karakter Password:</h4>
                                    <ul class="p-3 mb-0">
                                        <li>Minimal 5 karakter atau lebih</li>
                                        <li>Memiliki minimal 1 huruf kecil</li>
                                        <li>Memiliki minimal 1 huruf kapital</li>
                                        <li>Memiliki karakter angka, simbol, atau karakter lain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div> --}}
                
                <!-- Card -->
                {{-- <div class="card border-0 scroll-mt-3" id="deleteAccountSection">
                    <div class="card-header">
                        <h2 class="h3 mt-4">Hapus Akun</h2>
                    </div>

                    <div class="card-body">
                        <div class="alert text-bg-danger-soft d-flex align-items-center" role="alert">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32" class="me-3">
                                    <path d="M23.39,10.53,13.46.6a2.07,2.07,0,0,0-2.92,0L.61,10.54a2.06,2.06,0,0,0,0,2.92h0l9.93,9.92A2,2,0,0,0,12,24a2.07,2.07,0,0,0,1.47-.61l9.92-9.92A2.08,2.08,0,0,0,23.39,10.53ZM11,6.42a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h0a1.54,1.54,0,0,1-1.52-1.47A1.47,1.47,0,0,1,12,14.93h0A1.53,1.53,0,0,1,13.5,16.4,1.48,1.48,0,0,1,12.05,17.93Z" style="fill: currentColor"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">Jika Anda menghapus Akun, Anda akan kehilangan semua data</h4>
                                Silahkan backup terlebih dahulu data anda
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">

                                <!-- Input -->
                                <input type="checkbox" class="form-check-input" id="deleteAccount">

                                <!-- Label -->
                                <label class="form-check-label" for="deleteAccount">
                                    Saya telah setuju bahwa akan menghapus akun pribadi saya
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="button" class="btn btn-danger" id="btn-delete" disabled>Hapus Akun</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    
</div>
@endsection
