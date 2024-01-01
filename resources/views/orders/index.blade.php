@extends('index')

@section('title', 'Order')
{{-- @section('title', __('messages.dashboard')) --}}
{{-- @section('nav-title', __('messages.main_page')) --}}

@section('css-plugins')
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
@endsection

@section('container')
    <div class="container-fluid blog py-5 pb-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Layanan Kami</h5>
                <h1>Pemesanan Jasa Layanan</h1>
            </div>

            <div class="row g-5 justify-content-center mb-3" id="ac">
                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance AC</h2>
                            <h3 class="card-text display-6 text-center">Rp50k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" data-perangkat="AC" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service AC Ringan</h2>
                            <h3 class="card-text display-6 text-center text-light">Rp250k
                                <span class="fs-5 fw-normal opacity-70">/servis</span>
                            </h3>

                            <!-- Divider -->
                            <hr class="text-white">

                            <ul class="list-unstyled mb-7">
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> AC Tidak Dingin</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Air Menetes di Unit Indoor</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Unit Tidak Hidup Sama Sekali</li>
                                <li class="opacity-40">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-light">
                                        <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                    </svg> Servis Berat</li>
                            </ul>

                            <!-- Button -->
                            <a class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service AC Berat</h2>
                            <h3 class="card-text display-6 text-center">Rp400k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row AC -->

            <div class="row justify-content-center mb-3 bg-dark" id="kulkas">
                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance Kulkas</h2>
                            <h3 class="card-text display-6 text-center">Rp50k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Kulkas Ringan</h2>
                            <h3 class="card-text display-6 text-center text-light">Rp250k
                                <span class="fs-5 fw-normal opacity-70">/servis</span>
                            </h3>

                            <!-- Divider -->
                            <hr class="text-white">

                            <ul class="list-unstyled mb-7">
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> AC Tidak Dingin</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Air Menetes di Unit Indoor</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Unit Tidak Hidup Sama Sekali</li>
                                <li class="opacity-40">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-light">
                                        <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                    </svg> Servis Berat</li>
                            </ul>

                            <!-- Button -->
                            <a class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Kulkas Berat</h2>
                            <h3 class="card-text display-6 text-center">Rp400k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row Kulkas -->

            <div class="row g-5 justify-content-center mb-3" id="freezer">
                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Maintenance Freezer</h2>
                            <h3 class="card-text display-6 text-center">Rp50k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3 text-bg-primary bg-primary">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Freezer Ringan</h2>
                            <h3 class="card-text display-6 text-center text-light">Rp250k
                                <span class="fs-5 fw-normal opacity-70">/servis</span>
                            </h3>

                            <!-- Divider -->
                            <hr class="text-white">

                            <ul class="list-unstyled mb-7">
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> AC Tidak Dingin</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Air Menetes di Unit Indoor</li>
                                <li class="mb-3 text-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-white">
                                        <path d="M23.37.29a1.49,1.49,0,0,0-2.09.34L7.25,20.2,2.56,15.51A1.5,1.5,0,0,0,.44,17.63l5.93,5.94a1.53,1.53,0,0,0,2.28-.19l15.07-21A1.49,1.49,0,0,0,23.37.29Z" style="fill: currentColor"/>
                                    </svg> Unit Tidak Hidup Sama Sekali</li>
                                <li class="opacity-40">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12" width="12" class="me-2 text-light">
                                        <path d="M14.3,12.18a.24.24,0,0,1,0-.35l9.26-9.27a1.49,1.49,0,0,0,0-2.12,1.51,1.51,0,0,0-2.12,0L12.18,9.7a.25.25,0,0,1-.36,0L2.56.44A1.51,1.51,0,0,0,.44.44a1.49,1.49,0,0,0,0,2.12L9.7,11.83a.24.24,0,0,1,0,.35L.44,21.44a1.49,1.49,0,0,0,0,2.12,1.51,1.51,0,0,0,2.12,0l9.26-9.26a.25.25,0,0,1,.36,0l9.26,9.26a1.51,1.51,0,0,0,2.12,0,1.49,1.49,0,0,0,0-2.12Z" style="fill: currentColor"/>
                                    </svg> Servis Berat</li>
                            </ul>

                            <!-- Button -->
                            <a class="btn btn-lg btn-light link-primary px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 g-5">

                    <!-- Card -->
                    <div class="card border-0 py-6 px-4 mb-6 mb-xl-3">
                        <div class="card-body">
                            <h2 class="card-title h5 text-uppercase text-muted text-center mb-3">Service Freezer Berat</h2>
                            <h3 class="card-text display-6 text-center">Rp400k
                                <span class="fs-5 fw-normal text-muted">/servis</span>
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
                            <a class="btn btn-lg btn-secondary link-light px-3 rounded-pill my-auto w-100" href="/input-order">Pesan Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / .row Freezer -->

        </div>
    </div>
@endsection
