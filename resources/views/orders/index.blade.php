@extends('layouts.main')

@section('title', 'Order')
{{-- @section('title', __('messages.dashboard')) --}}
{{-- @section('nav-title', __('messages.main_page')) --}}

@section('css-plugins')
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/css/theme.bundle.css" id="stylesheetLTR">
        <link rel="stylesheet" href="{{ asset('/') }}assets/css/theme.rtl.bundle.css" id="stylesheetRTL">
@endsection

@section('js-plugins')
    <!-- Theme JS -->
    <script src="{{ asset('/') }}assets/js/theme.bundle.js"></script>
@endsection

@section('container')
    <div class="container-fluid blog py-5 mt-5 mb-5">
        <div class="container">
            <div class="row g-5 justify-content-center wow fadeIn" data-wow-delay=".3s">
                <div class="container-fluid">

                    <div class="d-flex align-items-baseline justify-content-between">
        
                        <!-- Title -->
                        <h1 class="h2">Pemesanan</h1>
        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
                            </ol>
                        </nav>
                    </div>
        
                    <div class="row mb-6">
                        <div class="col-xl-4">
        
                            <!-- Card -->
                            <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                                <div class="card-body">
                                    <h2 class="card-title h4 text-uppercase text-secondary text-center mb-3">Maintenance AC</h2>
                                    <h3 class="card-text display-3 text-center">Rp50k
                                        {{-- <span class="fs-3 fw-normal text-secondary">/servis</span> --}}
                                    </h3>
        
                                    <!-- Divider -->
                                    <hr>
        
                                    <ul class="list-unstyled mb-7">
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> AC Tidak Dingin</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Air Menetes di Unit Indoor</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Unit Tidak Hidup Sama Sekali</li>
                                        <li class="opacity-40">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                            </svg> Servis Ringan</li>
                                    </ul>
        
                                    <!-- Button -->
                                    <a class="btn btn-lg btn-primary w-100" href="/input-order">Pesan Layanan</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-xl-4">
        
                            <!-- Card -->
                            <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary">
                                <div class="card-body">
                                    <h2 class="card-title h4 text-uppercase opacity-80 text-center mb-3">Service AC Ringan</h2>
                                    <h3 class="card-text display-3 text-center">Rp250k
                                        {{-- <span class="fs-3 fw-normal opacity-70">/servis</span> --}}
                                    </h3>
        
                                    <!-- Divider -->
                                    <hr class="text-white">
        
                                    <ul class="list-unstyled mb-7">
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> AC Tidak Dingin</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Air Menetes di Unit Indoor</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Unit Tidak Hidup Sama Sekali</li>
                                        <li class="opacity-40">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                            </svg> Servis Berat</li>
                                    </ul>
        
                                    <!-- Button -->
                                    <a class="btn btn-lg btn-white link-primary w-100" href="/input-order">Pesan Layanan</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-xl-4">
        
                            <!-- Card -->
                            <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                                <div class="card-body">
                                    <h2 class="card-title h4 text-uppercase text-secondary text-center mb-3">Service AC Berat</h2>
                                    <h3 class="card-text display-3 text-center">Rp400k
                                        {{-- <span class="fs-3 fw-normal text-secondary">/servis</span> --}}
                                    </h3>
        
                                    <!-- Divider -->
                                    <hr>
        
                                    <ul class="list-unstyled mb-7">
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> AC Tidak Dingin</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Air Menetes di Unit Indoor</li>
                                        <li class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Unit Tidak Hidup Sama Sekali</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                                <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                            </svg> Servis Berat</li>
                                    </ul>
        
                                    <!-- Button -->
                                    <a class="btn btn-lg btn-primary w-100" href="/input-order">Select this plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / .row -->
        
                    <div class="text-center text-muted">
                        <h4 class="h3 mb-3">Butuh masukan terkait pilihan layanan ?</h4>
                        <p>
                            Kami akan membantu Anda untuk memilih jenis layanan 
                            <br class="d-none d-lg-block">
                            berdasarkan kebutuhan layanan Anda. 
                            <a href="/#contact">Kontak Kami</a>
                        </p>
                    </div>
                </div>
                <!-- / .container-fluid -->
            </div>
        </div>
    </div>
@endsection
