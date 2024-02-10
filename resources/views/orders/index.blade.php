@extends('index')

@section('title', 'Order')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-plugins')
<link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet">
<script src="{{ asset('assets/js/order.js') }}" type="text/javascript"></script>
@endsection

@section('harga_maintenance_ac', 'IDR '. number_format($harga_maintenance_ac, 0, ',', '.'))
@section('harga_maintenance_kulkas', 'IDR '. number_format($harga_maintenance_kulkas, 0, ',', '.'))
@section('harga_maintenance_freezer', 'IDR '. number_format($harga_maintenance_freezer, 0, ',', '.'))
@section('harga_service_ringan_ac', 'IDR '. number_format($harga_service_ringan_ac, 0, ',', '.'))
@section('harga_service_ringan_kulkas', 'IDR '. number_format($harga_service_ringan_kulkas, 0, ',', '.'))
@section('harga_service_ringan_freezer', 'IDR '. number_format($harga_service_ringan_freezer, 0, ',', '.'))
@section('harga_service_berat_ac', 'IDR '. number_format($harga_service_berat_ac, 0, ',', '.'))
@section('harga_service_berat_kulkas', 'IDR '. number_format($harga_service_berat_kulkas, 0, ',', '.'))
@section('harga_service_berat_freezer', 'IDR '. number_format($harga_service_berat_freezer, 0, ',', '.'))

@section('container')
    <div class="container-fluid blog py-5 pb-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Layanan Kami</h5>
                <h1>Pemesanan Jasa Layanan</h1>
            </div>

            <nav class="nav nav-pills nav-justified mb-3 wow fadeIn" data-wow-delay=".3s">
                <a class="nav-link active" id="nav-ac" aria-current="page" href="#">Layanan AC</a>
                <a class="nav-link" id="nav-kulkas" href="#">Layanan Kulkas</a>
                <a class="nav-link" id="nav-freezer" href="#">Layanan Freezer</a>
                {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            </nav>

            <hr class="text-dark mb-2 wow fadeIn" data-wow-delay=".3s">

            <section class="d-block wow fadeIn" data-wow-delay=".5s" id="ac">
                <div class="row g-4 justify-content-center mb-3">
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance AC</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_maintenance_ac')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="1" data-order="Maintenance AC" data-harga="{{ $harga_maintenance_ac }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-white-50 text-center mb-3">Service AC Ringan</h2>
                                <h3 class="card-text display-6 text-center text-light">@yield('harga_service_ringan_ac')
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="1" data-order="Service AC Ringan" data-harga="{{ $harga_service_ringan_ac }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service AC Berat</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_service_berat_ac')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="1" data-order="Service AC Berat" data-harga="{{ $harga_service_berat_ac }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .row AC -->

            <section class="d-none wow fadeIn" data-wow-delay=".5s" id="kulkas">
                <div class="row g-4 justify-content-center mb-3">
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance Kulkas</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_maintenance_kulkas')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="2" data-order="Maintenance Kulkas" data-harga="{{ $harga_maintenance_kulkas }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-white-50 text-center mb-3">Service Kulkas Ringan</h2>
                                <h3 class="card-text display-6 text-center text-light">@yield('harga_service_ringan_kulkas')
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="2" data-order="Service Kulkas Ringan" data-harga="{{ $harga_service_ringan_kulkas }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Kulkas Berat</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_service_berat_kulkas')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="2" data-order="Service Kulkas Berat" data-harga="{{ $harga_service_berat_kulkas }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .row Kulkas -->

            <section class="d-none wow fadeIn" data-wow-delay=".5s" id="freezer">
                <div class="row g-4 justify-content-center mb-3">
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance Freezer</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_maintenance_freezer')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="3" data-order="Maintenance Freezer" data-harga="{{ $harga_maintenance_freezer }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-white-50 text-center mb-3">Service Freezer Ringan</h2>
                                <h3 class="card-text display-6 text-center text-light">@yield('harga_service_ringan_freezer')
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="3" data-order="Service Freezer Ringan" data-harga="{{ $harga_service_ringan_freezer }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-4 col-sm-12 g-5">
    
                        <!-- Card -->
                        <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                            <div class="card-body">
                                <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Freezer Berat</h2>
                                <h3 class="card-text display-6 text-center">@yield('harga_service_berat_freezer')
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problem }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-alamat="{{ $user->address ?? '' }}" data-device="3" data-order="Service AC Berat" data-harga="{{ $harga_service_berat_freezer }}">
                                    Pesan Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .row Freezer -->

        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="orderModal" data-bs-backdrop="static" data-user="{{ Auth::id() }}">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/order" method="POST" id="formOrder" class="form-horizontal">
                @csrf
                <div class="modal-body">    
                    <div class="row g-3 justify-content-center">
                        <input type="hidden" name="price" id="price">
                        <div class="mb-1"><h3 class="fw-4 b" id="nilai"></h3></div>
                        <div class="form-floating mb-1">
                            <select class="form-select " id="devices" name="devices" aria-label="Floating label select example" disabled>
                            <option selected>Pilih Perangkat Pendingin</option>
                        @foreach ($devices as $d)                                
                            <option value="{{ $d->id }}">{{ $d->device }}</option>
                        @endforeach
                            </select>
                            <label for="devices">Perangkat Pendingin</label>
                            <div class="invalid-feedback" id="devices-feedback"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <select class="form-select " id="problems" name="problems" aria-label="Floating label select example" aria-placeholder="Pilih Jenis Kerusakan" required>
                            </select>
                            <label for="problems">Jenis Kerusakan</label>
                            <div class="invalid-feedback" id="problems-feedback"></div>                        
                        </div>
                        <div class="form-floating mb-1">
                            <textarea class="form-control " id="address" name="address" placeholder="Alamat Customer" style="height : 100px" required></textarea>
                            <label for="address">Alamat Customer</label>
                            <div class="invalid-feedback" id="address-feedback"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="date" class="form-control " id="work_date" name="work_date" value="" placeholder="Jadwal Pengerjaan" required>
                            <label for="work_date">Jadwal Pengerjaan</label>
                            <div class="invalid-feedback" id="work_date-feedback"></div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control " id="notes" name="notes" style="height : 100px" placeholder="Catatan Tambahan"></textarea>
                            <label for="notes">Catatan Tambahan</label>
                            <div class="invalid-feedback" id="notes-feedback"></div>
                        </div>
                    </div>
                </div>
            </form>
			<div class="modal-footer">
				<a href="/order" class="btn btn-outline-dark" id="cancel">Batal</a>
				<button type="submit" class="btn btn-secondary" id="submit">Simpan</button>
			</div>
          </div>
        </div>
    </div>
@endsection
