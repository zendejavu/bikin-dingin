@extends('admin.layouts.main')

@section('title', 'Akun Pribadi')

@section('css-plugins')
@endsection

@section('js-plugins')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
<div class="container-fluid">
    <div class="d-flex align-items-baseline justify-content-between">

        <!-- Title -->
        <h1 class="h2">
            Profile Saya
        </h1>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Data User</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 col-xxl-3">

            <!-- Card -->
            <div class="card border-0 sticky-md-top top-10px">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <div class="avatar avatar-xxl avatar-circle mb-5">
                            <label class="d-block cursor-pointer">
                                <span class="position-absolute bottom-0 end-0 m-0 text-bg-primary w-30px h-30px rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                        <g>
                                            <path d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z" style="fill: currentColor"/>
                                            <path d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z" style="fill: currentColor"/>
                                            <path d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z" style="fill: currentColor"/>
                                            <path d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z" style="fill: currentColor"/>
                                        </g>
                                    </svg>
                                </span>
                                <input type="file" name="avatar" class="d-none">
                            </label>
                            <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="Profile picture" class="avatar-img" width="112" height="112">
                        </div>

                        <h3 class="mb-0">{{ $user->name }}</h3>
                        <span class="small text-secondary fw-semibold">Assistant Manager</span>
                    </div>

                    <!-- Divider -->
                    <hr class="mb-0">
                </div>

                <ul class="scrollspy mb-5" id="account" data-scrollspy='{"offset": "30"}'>
                    <li class="active">
                        <a href="#dataDiri" class="d-flex align-items-center py-3">
                            <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            </svg>
                            Data Diri
                        </a>
                    </li>

                    <li>
                        <a href="#usernameSection" class="d-flex align-items-center py-3">
                            <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.25,12A5.25,5.25,0,1,1,12,6.75,5.25,5.25,0,0,1,17.25,12Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M17.25,12v2.25a3,3,0,0,0,6,0V12a11.249,11.249,0,1,0-4.5,9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            </svg>
                            Username
                        </a>
                    </li>

                    <li>
                        <a href="#passwordSection" class="d-flex align-items-center py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="14" width="14" class="me-3">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.75 9.75H5.25C4.42157 9.75 3.75 10.4216 3.75 11.25V21.75C3.75 22.5784 4.42157 23.25 5.25 23.25H18.75C19.5784 23.25 20.25 22.5784 20.25 21.75V11.25C20.25 10.4216 19.5784 9.75 18.75 9.75Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 9.75V6C6.75 4.60761 7.30312 3.27226 8.28769 2.28769C9.27226 1.30312 10.6076 0.75 12 0.75C13.3924 0.75 14.7277 1.30312 15.7123 2.28769C16.6969 3.27226 17.25 4.60761 17.25 6V9.75"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.41789 15 8.25 14.8321 8.25 14.625C8.25 14.4179 8.41789 14.25 8.625 14.25"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 15C8.83211 15 9 14.8321 9 14.625C9 14.4179 8.83211 14.25 8.625 14.25"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.41789 18.75 8.25 18.5821 8.25 18.375C8.25 18.1679 8.41789 18 8.625 18"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M8.625 18.75C8.83211 18.75 9 18.5821 9 18.375C9 18.1679 8.83211 18 8.625 18"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 15C11.7929 15 11.625 14.8321 11.625 14.625C11.625 14.4179 11.7929 14.25 12 14.25"/>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 15C12.2071 15 12.375 14.8321 12.375 14.625C12.375 14.4179 12.2071 14.25 12 14.25"/>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18"/>
                                    <path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18"/>
                                </g>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.1679 15 15 14.8321 15 14.625C15 14.4179 15.1679 14.25 15.375 14.25"/>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 15C15.5821 15 15.75 14.8321 15.75 14.625C15.75 14.4179 15.5821 14.25 15.375 14.25"/>
                                </g>
                                <g>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.1679 18.75 15 18.5821 15 18.375C15 18.1679 15.1679 18 15.375 18"/>
                                    <path stroke="currentColor" stroke-width="1.5" d="M15.375 18.75C15.5821 18.75 15.75 18.5821 15.75 18.375C15.75 18.1679 15.5821 18 15.375 18"/>
                                </g>
                            </svg>
                            Password
                        </a>
                    </li>

                    <li>
                        <a href="#deleteAccountSection" class="d-flex align-items-center py-3">
                            <svg viewBox="0 0 24 24" height="14" width="14" class="me-3" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.177,23.25H7.677a1.5,1.5,0,0,1-1.5-1.5V8.25h13.5v13.5A1.5,1.5,0,0,1,18.177,23.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M10.677 18.75L10.677 12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M15.177 18.75L15.177 12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M2.427 6.212L21.501 2.158" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                <path d="M13.541.783l-4.4.935A1.5,1.5,0,0,0,7.984,3.5L8.3,4.965l7.336-1.56L15.32,1.938A1.5,1.5,0,0,0,13.541.783Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            </svg>
                            Hapus Akun
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <form novalidate action="/user">
                @csrf
                
                <!-- Card -->
                <div class="card border-0 scroll-mt-3" id="dataDiri">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Data Diri</h2>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="fullName" class="col-form-label">Nama Lengkap</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="fullName" value="{{ $user->name }}">
                                <div class="invalid-feedback">Lengkapi nama Anda</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="phone" class="col-form-label">Handphone / Whatsapp</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="phone" value="+62(82)111-222-333">
                                <div class="invalid-feedback">Please add your phone number</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="emailAddress" class="col-form-label">Alamat Email</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="emailAddress" value="{{ $user->email }}">
                                <div class="invalid-feedback">Please add your email address</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="country" class="col-form-label">Lokasi</label>
                            </div>

                            <div class="col-lg">
                                <div class="mb-4">
                                    <select class="form-select" id="province" required autocomplete="off" data-select='{
                                                                                            "placeholder": "Provinsi"
                                                                                        }'>
                                        <option value="" label="province placeholder"></option>
                                        <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Bangka Belitung">Bangka Belitung</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Banten">Banten</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Tengah">Papua Tengah</option>
                                        <option value="Papua Pegunungan">Papua Pegunungan</option>
                                        <option value="Papua Selatan">Papua Selatan</option>
                                        <option value="Papua Barat Daya">Papua Barat Daya</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a province</div>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control" id="city" value="{{ $user->city }}" placeholder="Kota/Kabupaten">
                                    <div class="invalid-feedback">Please add a city</div>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control" id="subdistrict" value="{{ $user->subdistrict }}" placeholder="Kecamatan">
                                    <div class="invalid-feedback">Please add a state or county</div>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control" id="village" value="{{ $user->village }}" placeholder="Desa/Kelurahan">
                                    <div class="invalid-feedback">Please add a state or county</div>
                                </div>

                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="addressLine1" class="col-form-label">Alamat</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="addressLine1" value="{{ $user->address }}">
                                <div class="invalid-feedback">Please add an address</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        {{-- <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="addressLine2" class="col-form-label">Alamat Baris 2
                                    <span class="text-muted fw-normal">(Optional)</span>
                                </label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="addressLine2">
                                <div class="invalid-feedback">Please add an address</div>
                            </div>
                        </div> --}}
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="zipCode" class="col-form-label">Kode Pos</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" id="zipCode" value="{{ $user->zip }}">
                                <div class="invalid-feedback">Please add a zip code</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="overview" class="col-form-label">Ringkasan</label>
                            </div>

                            <div class="col-lg">
                                <textarea class="form-control" id="overview" rows="4">{{ $user->bio }}</textarea>
                                <div class="invalid-feedback">Please tell something about yourself</div>
                            </div>
                        </div>
                        <!-- / .row -->

                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="card border-0 scroll-mt-3" id="usernameSection">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Username</h2>
                    </div>

                    <div class="card-body">
                        <p class="small text-muted mb-3">
                            Username Anda saat ini 
                            <strong> {{ '@'.$user->username }}</strong>
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
                                    <input type="text" class="form-control" id="username" placeholder="username" value="{{ $user->username }}" aria-describedby="username-addon">
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
                </div>

                <!-- Card -->
                <div class="card border-0 scroll-mt-3" id="passwordSection">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Password</h2>
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

                            <div class="col-lg">
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" id="newPassword" autocomplete="off" data-toggle-password-input placeholder="Your new password">

                                    <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                                </div>

                                <div class="invalid-feedback">Please add a new password</div>

                                <div class="d-flex justify-content-between align-items-center mt-3 h-15px">
                                    <div class="progress d-flex flex-grow-1 h-7px">
                                        <div data-zxcvbn='{"input": "#newPassword", "text": "#progressText"}' class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted fs-6" id="progressText"></span>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" id="newPasswordAgain" autocomplete="off" data-toggle-password-input placeholder="Confirm your new password">

                                    <button type="button" class="input-group-text px-4 text-secondary link-primary" data-toggle-password></button>
                                </div>

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
                </div>
                
                <!-- Card -->
                <div class="card border-0 scroll-mt-3" id="deleteAccountSection">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Hapus Akun</h2>
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
                </div>
            </form>
        </div>
    </div>
    <!-- / .row -->
</div>
    
@endsection

