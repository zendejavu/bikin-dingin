@extends('layouts.main')

@section('title', 'Order')
{{-- @section('title', __('messages.dashboard')) --}}
{{-- @section('nav-title', __('messages.main_page')) --}}

@section('css-plugins')
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/theme.bundle.css" id="stylesheetLTR">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/theme.rtl.bundle.css" id="stylesheetRTL">
@endsection

@section('js-plugins')
    <!-- Theme JS -->
    <script src="{{ asset('/') }}/assets/js/theme.bundle.js"></script>
    <script src="{{ asset('/') }}/assets/js/inputmask.bundle.js"></script>
    <script src="{{ asset('/') }}/assets/js/highlightjs.bundle.js"></script>
    <script src="{{ asset('/') }}/assets/js/highlightjs-xml.bundle.js"></script>
    <script src="{{ asset('/') }}/assets/js/highlightjs-scss.bundle.js"></script>
@endsection

@section('container')
    <div class="container-fluid blog py-5 mt-5 mb-5">
        <div class="container">
            <div class="row g-5 justify-content-center wow fadeIn" data-wow-delay=".5s" >
                <div class="container-fluid">

                    <div class="d-flex align-items-baseline justify-content-between">
        
                        <!-- Title -->
                        <h1 class="h2">Input Pemesanan</h1>
        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Beranda</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Layanan Pemesanan</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row justify-content-center mb-6">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingPerangkat" aria-label="Floating label select example">
                                <option selected>Pilih Perangkat Pendingin</option>
                                <option value="AC">AC</option>
                                <option value="Kulkas">Kulkas</option>
                                <option value="Freezer">Freezer</option>
                                </select>
                                <label for="floatingPerangkat">Perangkat Pendingin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingKerusakan" aria-label="Floating label select example">
                                <option selected>Pilih Jenis Kerusakan</option>
                                <option value="Tidak Dingin">Tidak Dingin</option>
                                <option value="Air menetes di Unit Indoor">Air Menetes di Unit Indoor</option>
                                <option value="Suara Kipas Ribut">Suara Kipas Ribut</option>
                                <option value="Unit tidak menyala sama sekali">Unit tidak menyala sama sekali</option>
                                <option value="Lampu tidak menyala">Lampu tidak menyala</option>
                                <option value="Defrost tidak berfungsi">Defrost tidak berfungsi</option>
                                <option value="Unit mati total">Unit mati total</option>
                                </select>
                                <label for="floatingKerusakan">Jenis Kerusakan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="alamat" placeholder="Alamat Customer"></textarea>
                                <label for="alamat">Alamat Customer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingTanggal" placeholder="Jadwal Pengerjaan">
                                <label for="floatingTanggal">Jadwal Pengerjaan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="floatingCatatan" placeholder="Catatan Tambahan"></textarea>
                                <label for="floatingCatatan">Catatan Tambahan</label>
                            </div>
                            <div class="m-3">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
