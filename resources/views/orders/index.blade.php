@extends('index')

@section('title', 'Order')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-plugins')
<link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
<script src="{{ asset('assets/js/order.js') }}" type="text/javascript"></script>
@endsection

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
                                <h3 class="card-text display-6 text-center">Rp50k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="1" data-order="Maintenance AC">
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
                                <h3 class="card-text display-6 text-center text-light">Rp250k
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="1" data-order="Service AC Ringan">
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
                                <h3 class="card-text display-6 text-center">Rp400k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($ac_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($ac_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="1" data-order="Service AC Berat">
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
                                <h3 class="card-text display-6 text-center">Rp50k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="2" data-order="Maintenance Kulkas">
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
                                <h3 class="card-text display-6 text-center text-light">Rp250k
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="2" data-order="Service Kulkas Ringan">
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
                                <h3 class="card-text display-6 text-center">Rp400k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($kulkas_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($kulkas_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="3" data-order="Service Kulkas Berat">
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
                                <h3 class="card-text display-6 text-center">Rp50k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="opacity-40 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="3" data-order="Maintenance Freezer">
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
                                <h3 class="card-text display-6 text-center text-light">Rp250k
                                    {{-- <span class="fs-5 fw-normal opacity-70">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr class="text-white">
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="opacity-40 mb-3 text-white-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary text-white-50">
                                            <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="3" data-order="Service Freezer Ringan">
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
                                <h3 class="card-text display-6 text-center">Rp400k
                                    {{-- <span class="fs-5 fw-normal text-muted">/servis</span> --}}
                                </h3>
    
                                <!-- Divider -->
                                <hr>
    
                                <ul class="list-unstyled mb-7">
                                    @foreach ($freezer_r as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>
                                    @endforeach
                                    @foreach ($freezer_b as $item)
                                    <li class="mb-3 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-primary">
                                            <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                        </svg> {{ $item->problems }}
                                    </li>                                        
                                    @endforeach
                                </ul>
    
                                <!-- Button -->
                                <button type="button" class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100 btn-modal" data-bs-toggle="modal" data-bs-target="#orderModal" data-device="3" data-order="Service AC Berat">
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
        <div class="modal-dialog modal-dialog-centered modal-mcd">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/order" method="POST" id="formOrder" class="form-horizontal">
                @csrf
                <div class="modal-body" id="loginModal">    
                    <div class="row g-3 justify-content-center">
                        <div class="form-floating mb-1">
                            <select class="form-select" id="devices" name="devices" aria-label="Floating label select example" disabled>
                            <option selected>Pilih Perangkat Pendingin</option>
                        @foreach ($devices as $d)                                
                            <option value="{{ $d->id }}">{{ $d->devices }}</option>
                        @endforeach
                            </select>
                            <label for="devices">Perangkat Pendingin</label>
                            <div class="invalid-feedback" id="devices-feedback"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <select class="form-select" id="problems" name="problems" aria-label="Floating label select example" aria-placeholder="Pilih Jenis Kerusakan" required>
                            </select>
                            <label for="problems">Jenis Kerusakan</label>
                            <div class="invalid-feedback" id="problems-feedback"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <textarea class="form-control" id="address" name="address" value="" placeholder="Alamat Customer" style="height : 100px" required></textarea>
                            <label for="address">Alamat Customer</label>
                            <div class="invalid-feedback" id="address-feedback"></div>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="date" class="form-control" id="work_date" name="work_date" value="" placeholder="Jadwal Pengerjaan" required>
                            <label for="work_date">Jadwal Pengerjaan</label>
                            <div class="invalid-feedback" id="work_date-feedback"></div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="notes" name="notes" value="" style="height : 100px" placeholder="Catatan Tambahan"></textarea>
                            <label for="notes">Catatan Tambahan</label>
                            <div class="invalid-feedback" id="notes-feedback"></div>
                        </div>
                    </div>
                </div>
				<div class="modal-body d-none" id="disLoginModal">
					<div class="row m-3 justify-content-center teks">
						Mohon Maaf, Silahkan login terlebih dahulu dilaman Login
					</div>
				</div>
            </form>
			<div class="modal-footer">
				<a href="/order" class="btn btn-outline-primary" id="cancel">Batal</a>
				<button type="button" class="btn btn-primary" id="submit">Simpan</button>
				<a href="/login" class="btn btn-outline-primary d-none" id="login">Login</a>
				<a href="/order" class="btn btn-outline-secondary d-none" id="sukses">Okay</a>
				<a href="/login" class="btn btn-outline-primary d-none" id="login">Login</a>
			</div>
          </div>
        </div>
    </div>
@endsection
