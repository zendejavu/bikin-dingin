@extends('admin.layouts.main')

@section('title', 'Kotak Masuk')

@section('css-plugins')
@endsection

@section('js-plugins')
@endsection

@section('container')
<div class="container-fluid d-flex flex-column flex-lg-grow-1">

    <div class="d-flex align-items-baseline justify-content-between">

        <!-- Title -->
        <h1 class="h2">
            Kotak Masuk
        </h1>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                <li class="breadcrumb-item active" aria-current="page">Baca Email</li>
            </ol>
        </nav>
    </div>

    <div class="row flex-lg-grow-1">
        <div class="col-12 col-md-4 col-xxl-3 mw-lg-300px">

            <!-- Card -->
            <div class="card border-0 flex-lg-grow-1">
                <div class="card-header border-0">

                    <!-- Button -->
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#emailModal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="15" width="15" class="me-2"><g><path d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z" style="fill: currentColor"/><path d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z" style="fill: currentColor"/><path d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z" style="fill: currentColor"/><path d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z" style="fill: currentColor"/></g></svg>
                        Tulis Pesan
                    </button>
                </div>

                <div class="list-group list-group-flush rounded-0">
                    <a href="/read-mail" class="list-group-item border-0 d-flex align-items-center {{ request()->is('read-mail') ? ' active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16" class="me-3"><g><path d="M17.17,15.75a6,6,0,0,1-10.34,0H2.25a1.5,1.5,0,0,0-1.5,1.5v4.5a1.5,1.5,0,0,0,1.5,1.5h19.5a1.5,1.5,0,0,0,1.5-1.5v-4.5a1.5,1.5,0,0,0-1.5-1.5Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M20.25,12.75V2.25a1.5,1.5,0,0,0-1.5-1.5H5.25a1.5,1.5,0,0,0-1.5,1.5v10.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="7.75" y1="4.75" x2="11.25" y2="4.75" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="7.75" y1="8.25" x2="16.25" y2="8.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="7.75" y1="11.75" x2="16.25" y2="11.75" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>
                        <span class="fw-bold">Kotak Masuk</span>
                        <span class="badge text-bg-dark badge-circle ms-auto">5</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg viewBox="0 0 24 24" height="16" width="16" class="me-3" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                        <span class="fw-bold">Favorit</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg viewBox="0 0 24 24" height="16" width="16" class="me-3" xmlns="http://www.w3.org/2000/svg"><path d="M1.500 12.000 A10.500 10.500 0 1 0 22.500 12.000 A10.500 10.500 0 1 0 1.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M10.500 12.000 A1.500 1.500 0 1 0 13.500 12.000 A1.500 1.500 0 1 0 10.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M12 10.5L12 5.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M13.061 13.061L15.75 15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                        <span class="fw-bold">Snoozed</span>
                        <span class="badge text-bg-primary-soft badge-circle ms-auto">2</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg viewBox="0 0 24 24" height="16" width="16" class="me-3" xmlns="http://www.w3.org/2000/svg"><path d="M13.629,23.25H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h19.5a1.5,1.5,0,0,1,1.5,1.5V13.629a1.5,1.5,0,0,1-.439,1.06l-8.122,8.122A1.5,1.5,0,0,1,13.629,23.25Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M14.25,23.115V15.75a1.5,1.5,0,0,1,1.5-1.5h7.365" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M6.75 6.75L18.75 6.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M6.75 11.25L12 11.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                        <span class="fw-bold">Draft</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg viewBox="0 0 24 24" height="16" width="16" class="me-3" xmlns="http://www.w3.org/2000/svg"><path d="M1.4,3.743A1.5,1.5,0,0,1,3.373,1.666l19.014,9.659a.75.75,0,0,1,0,1.337L3.373,22.334A1.5,1.5,0,0,1,1.4,20.257l5.058-8.264Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M22.797 11.993L6.453 11.993" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                        <span class="fw-bold">Terkirim</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16" class="me-3"><g><line x1="1" y1="5" x2="23" y2="5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M14.25,1H9.75a1.5,1.5,0,0,0-1.5,1.5V5h7.5V2.5A1.5,1.5,0,0,0,14.25,1Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="9.75" y1="17.75" x2="9.75" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="14.25" y1="17.75" x2="14.25" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M18.86,21.62A1.49,1.49,0,0,1,17.37,23H6.63a1.49,1.49,0,0,1-1.49-1.38L3.75,5h16.5Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>
                        <span class="fw-bold">Sampah</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16" class="me-3"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                        <span class="fw-bold">Penting</span>
                    </a>

                    <a href="javascript: void(0);" class="list-group-item border-0 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16" class="me-3"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.313 2.27521C13.1833 2.04051 12.9931 1.84486 12.7622 1.70861C12.5313 1.57235 12.2681 1.50049 12 1.50049C11.7318 1.50049 11.4686 1.57235 11.2377 1.70861C11.0068 1.84486 10.8166 2.04051 10.687 2.27521L0.936968 20.2752C0.810886 20.5036 0.746538 20.7609 0.750276 21.0217C0.754014 21.2825 0.825708 21.5379 0.958282 21.7625C1.09086 21.9872 1.27972 22.1734 1.50625 22.3028C1.73277 22.4321 1.98911 22.5002 2.24997 22.5002H21.75C22.0108 22.5002 22.2672 22.4321 22.4937 22.3028C22.7202 22.1734 22.9091 21.9872 23.0417 21.7625C23.1742 21.5379 23.2459 21.2825 23.2497 21.0217C23.2534 20.7609 23.189 20.5036 23.063 20.2752L13.313 2.27521Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15V8.25"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18"/></svg>
                        <span class="fw-bold">Spam</span>
                    </a>
                </div>

                <div class="card-body pt-7">
                    <h5 class="text-uppercase text-muted mb-4">
                        Labels    
                    </h5>

                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-warning me-3"></span>
                        Teman
                    </a>
                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-dark me-3"></span>
                        Sosial
                    </a>
                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-secondary me-3"></span>
                        Keluarga
                        <span class="badge text-bg-secondary-soft badge-circle ms-auto">4</span>
                    </a>
                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-danger me-3"></span>
                        Ketertarikan
                    </a>
                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-info me-3"></span>
                        Artikel
                    </a>
                    <a href="javascript: void(0);" class="fs-4 d-flex align-items-center text-muted mb-3">
                        <span class="legend-circle bg-success me-3"></span>
                        HR
                        <span class="badge text-bg-success-soft badge-circle ms-auto">9</span>
                    </a>

                    <h5 class="text-uppercase text-muted mb-3 mt-7">
                        Penyimpanan    
                    </h5>
                    <div class="d-flex flex-column justify-content-between fs-4 mb-5">
                        <div class="progress w-100">
                            <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <span>3.4 GB</span>
                            <span>15 GB</span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="col d-flex">

            <!-- Card -->
            <div class="card border-0 flex-grow-1" data-list='{"page": 20}' id="emails">
                <div class="card-header border-0">
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="input-group mw-350px">

                                <!-- Button -->
                                <a href="javascript: void(0);" class="input-group-text border-light-green bg-light-green pe-1 text-secondary">
                                    <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)"  /><path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                </a>

                                <!-- Input -->
                                <input type="text" class="form-control bg-light-green border-light-green" placeholder="Cari email...">
                            </div>
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            <div class="me-5 link-secondary small">
                                <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
                            </div>

                            <div class="mx-n2">

                                <!-- Button -->
                                <button type="button" class="list-pagination-prev btn btn-sm btn-link px-2 link-secondary" disabled>
                                    <svg height="12" width="12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st100{fill:currentColor;}</style><path class="st100" d="M4.5,12c0-0.7,0.3-1.3,0.8-1.7l11.2-9.8c0.8-0.7,1.9-0.6,2.6,0.2c0.6,0.8,0.6,1.9-0.2,2.5l-9.8,8.6 C9,11.9,9,12,9.1,12.1c0,0,0,0,0,0l9.8,8.6c0.8,0.7,0.9,1.8,0.2,2.6c-0.7,0.8-1.8,0.9-2.6,0.2c0,0,0,0-0.1-0.1L5.3,13.7 C4.8,13.3,4.5,12.6,4.5,12z"/></svg>
                                </button>

                                <!-- Button -->
                                <button type="button" class="list-pagination-next btn btn-sm btn-link px-2 link-secondary" disabled>
                                    <svg height="12" width="12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><style type="text/css">.st101{fill:currentColor;}</style><path class="st101" d="M19.5,12c0,0.7-0.3,1.3-0.8,1.7L7.5,23.6c-0.8,0.7-2,0.6-2.6-0.2c-0.6-0.8-0.6-1.9,0.2-2.6l9.8-8.6 c0.1-0.1,0.1-0.2,0-0.4c0,0,0,0,0,0L5.1,3.2C4.3,2.5,4.3,1.3,5,0.6c0.7-0.7,1.8-0.8,2.6-0.2l11.2,9.8C19.2,10.7,19.5,11.3,19.5,12z"/></svg>
                                </button>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>

                <div class="row">
                    <div class="col">
                        <div class="thead-light px-5 py-3 d-flex align-items-center">
                            <a href="/inbox" class="d-flex mx-3 me-6 link-secondary" data-bs-toggle="tooltip" title="Back to Inbox">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M6 4.498L0.75 9.748 6 14.998" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M.75,9.748h21a1.5,1.5,0,0,1,1.5,1.5v9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Arhive">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"><g><path d="M21.75,9.75v9.5a3,3,0,0,1-3,3H5.25a3,3,0,0,1-3-3V9.75" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M21.75,1.75H2.25a1.5,1.5,0,0,0-1.5,1.5v3h22.5v-3A1.5,1.5,0,0,0,21.75,1.75Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><rect x="8.5" y="10.25" width="7" height="4" rx="1.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>                                              
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Report spam">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18" width="18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.313 2.27521C13.1833 2.04051 12.9931 1.84486 12.7622 1.70861C12.5313 1.57235 12.2681 1.50049 12 1.50049C11.7318 1.50049 11.4686 1.57235 11.2377 1.70861C11.0068 1.84486 10.8166 2.04051 10.687 2.27521L0.936968 20.2752C0.810886 20.5036 0.746538 20.7609 0.750276 21.0217C0.754014 21.2825 0.825708 21.5379 0.958282 21.7625C1.09086 21.9872 1.27972 22.1734 1.50625 22.3028C1.73277 22.4321 1.98911 22.5002 2.24997 22.5002H21.75C22.0108 22.5002 22.2672 22.4321 22.4937 22.3028C22.7202 22.1734 22.9091 21.9872 23.0417 21.7625C23.1742 21.5379 23.2459 21.2825 23.2497 21.0217C23.2534 20.7609 23.189 20.5036 23.063 20.2752L13.313 2.27521Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15V8.25"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18"/></svg>
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"><g><line x1="1" y1="5" x2="23" y2="5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M14.25,1H9.75a1.5,1.5,0,0,0-1.5,1.5V5h7.5V2.5A1.5,1.5,0,0,0,14.25,1Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="9.75" y1="17.75" x2="9.75" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="14.25" y1="17.75" x2="14.25" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M18.86,21.62A1.49,1.49,0,0,1,17.37,23H6.63a1.49,1.49,0,0,1-1.49-1.38L3.75,5h16.5Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>
                            </a>

                            <div class="vr bg-gray-700 mx-2"></div>

                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Snooze">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M1.500 12.000 A10.500 10.500 0 1 0 22.500 12.000 A10.500 10.500 0 1 0 1.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M10.500 12.000 A1.500 1.500 0 1 0 13.500 12.000 A1.500 1.500 0 1 0 10.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M12 10.5L12 5.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M13.061 13.061L15.75 15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Mark as unread">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M1.500 4.750 L22.500 4.750 L22.500 19.750 L1.500 19.750 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M22.161,5.3l-8.144,6.264a3.308,3.308,0,0,1-4.034,0L1.839,5.3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </a>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex mx-2 text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"/><circle cx="12" cy="12" r="3.25" style="fill: currentColor"/><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"/></g></svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->

                <div class="position-relative h-100 min-vh-50 min-vh-md-25 min-vh-lg-auto">
                    <div class="overflow-auto position-absolute w-100 h-100 scroll-shadow">
                        
                        <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="h3">Strengthen your profile with client testimonials</h2>
                            
                                <div class="d-flex">
                                    <a href="javascript: void(0);" class="link-secondary" data-bs-toggle="tooltip" title="Print">
                                        <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M5.25,17.249h-3a1.5,1.5,0,0,1-1.5-1.5v-7.5a1.5,1.5,0,0,1,1.5-1.5h19.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M3.75 9.749L5.25 9.749" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M5.25 12.749H18.75V23.249000000000002H5.25z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M18.75,6.749H5.25v-4.5a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M8.25 15.749L15.75 15.749" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M8.25 18.749L13.5 18.749" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                    </a>
                                    <a href="javascript: void(0);" class="link-secondary ms-4" data-bs-toggle="tooltip" title="Share">
                                        <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M21.75,5.25H13.5a3,3,0,0,0-3,3V12" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M17.25 9.75L21.75 5.25 17.25 0.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M18.75,14.25v7.5a1.5,1.5,0,0,1-1.5,1.5H3.75a1.5,1.5,0,0,1-1.5-1.5v-12a1.5,1.5,0,0,1,1.5-1.5H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <hr class="mt-0 mb-5">

                            <div class="d-flex align-items-center mb-6">
                                <div class="avatar avatar-circle avatar-xs me-3">
                                    <img src="https://d33wubrfki0l68.cloudfront.net/9f5880fc99a40d5021e5a133fe72f232e3883d3a/c965d/assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                </div>
                                <div class="d-flex flex-fill flex-column">
                                    <span class="fw-bold d-inline-block">Zachary Ortiz</span>
                                    <span class="fs-5 d-inline-block text-muted">to: me</span>
                                </div>
                                <span class="d-flex align-self-start small text-secondary">
                                    14:36 (1 hour ago)
                                </span>
                            </div>

                            <p>Hi Ellie,</p>
                            <p>Client testimonials are a powerful way to show your value and boost credibility! Ask any client you've worked with - past or present - to endorse your skills with a testimonial on your profile.</p>
                            <p>We recommend <a href="javascript: void(0);">requesting</a> at least 5 client testimonials.</p>
                            <p>Here's how it works:</p>
                            <ol>
                                <li>Go to your profile and enter your client's contact info.</li>
                                <li>They'll get an email with instructions for submitting your success story.</li>
                                <li>The testimonial will display on your profile once it's verified by Us. Verification may take up to 2 weeks.</li>
                            </ol>
                            <p>One last thing: be sure to read the attached How to achieve your goals and Advanced marketing techniques for more information on setting yourself up for success.</p>
                            <p>If you have any questions, please let us know.</p>
                            <br>
                            <p>Best,<br>Zachary Ortiz</p>

                            <!-- Divider -->
                            <hr class="mt-0">

                            <div class="row gx-4 mb-7">
                                <div class="col-auto mb-3">
                                    <div class="d-flex align-items-center border border-light p-1 rounded position-relative">
                                        <div class="avatar bg-gray-300 d-flex align-items-center justify-content-center text-secondary me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24"><g><path d="M8.45,12.32c-.1,0-.33-.05-.33.17v4a.24.24,0,0,0,.33.21A2.36,2.36,0,0,0,9.88,14.5,2.39,2.39,0,0,0,8.45,12.32Z" style="fill: currentColor"/><path d="M4,12.12H3.38a.26.26,0,0,0-.26.26v1.24a.26.26,0,0,0,.26.25H4a.88.88,0,1,0,0-1.75Z" style="fill: currentColor"/><path d="M18,19V10a1,1,0,0,0-1-1H1a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H17A1,1,0,0,0,18,19ZM4,15.12H3.38a.26.26,0,0,0-.26.26V17.5a.62.62,0,1,1-1.24,0v-6a.63.63,0,0,1,.62-.63H4a2.13,2.13,0,0,1,0,4.25Zm3.5,3a.62.62,0,0,1-.62-.62v-6a.63.63,0,0,1,.62-.63,3.63,3.63,0,0,1,0,7.25Zm8-6h-2a.38.38,0,0,0-.38.38v1.12a.26.26,0,0,0,.26.25H14.5a.63.63,0,0,1,0,1.25H13.38a.26.26,0,0,0-.26.26V17.5a.62.62,0,1,1-1.24,0v-5a1.62,1.62,0,0,1,1.62-1.63h2a.63.63,0,0,1,0,1.25Z" style="fill: currentColor"/><path d="M23.71,5.71,18.29.29a1,1,0,0,0-.7-.29H6A2,2,0,0,0,4,2V7.75A.25.25,0,0,0,4.25,8h1.5A.25.25,0,0,0,6,7.75V2.5A.5.5,0,0,1,6.5,2H16.75a.25.25,0,0,1,.25.25V5a2,2,0,0,0,2,2h2.75a.25.25,0,0,1,.25.25V21.5a.5.5,0,0,1-.5.5H6.25A.25.25,0,0,1,6,21.75v-.5A.25.25,0,0,0,5.75,21H4.25a.25.25,0,0,0-.25.25V22a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V6.41A1,1,0,0,0,23.71,5.71Z" style="fill: currentColor"/></g></svg>
                                        </div>
                                        <div>
                                            <small class="fw-semibold text-secondary">
                                                <span class="text-body">How to achive your goals</span><br>
                                                1.2 MB
                                            </small>
                                        </div>
                                        <a href="javascript: void(0);" class="link-secondary ms-8 me-2 stretched-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="22" width="22"><g><path d="M8.62,1.74A1.45,1.45,0,0,1,10.07.29h3.39a1.46,1.46,0,0,1,1.46,1.45V10a.25.25,0,0,0,.25.25h2.89a1.14,1.14,0,0,1,.83,2l-6.1,6.1a1.5,1.5,0,0,1-2,0l-6.1-6.1a1.14,1.14,0,0,1,.83-2h2.9a.26.26,0,0,0,.17-.07A.25.25,0,0,0,8.62,10Z" style="fill: currentColor"/><path d="M0,19.68a4,4,0,0,0,4,4H20a4,4,0,0,0,4-4V17.8a1.23,1.23,0,0,0-2.45,0v1.88A1.59,1.59,0,0,1,20,21.26H4a1.59,1.59,0,0,1-1.59-1.58V17.8A1.23,1.23,0,0,0,0,17.8Z" style="fill: currentColor"/></g></svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-auto mb-3">
                                    <div class="d-flex align-items-center border border-light p-1 rounded position-relative">
                                        <div class="avatar bg-gray-300 d-flex align-items-center justify-content-center text-secondary me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24"><g><path d="M23.71,5.71,18.29.29a1,1,0,0,0-.7-.29H6A2,2,0,0,0,4,2V7.75A.25.25,0,0,0,4.25,8h1.5A.25.25,0,0,0,6,7.75V2.5A.5.5,0,0,1,6.5,2H16.75a.25.25,0,0,1,.25.25V5a2,2,0,0,0,2,2h2.75a.25.25,0,0,1,.25.25V21.5a.5.5,0,0,1-.5.5H6.25A.25.25,0,0,1,6,21.75v-.5A.25.25,0,0,0,5.75,21H4.25a.25.25,0,0,0-.25.25V22a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V6.41A1,1,0,0,0,23.71,5.71Z" style="fill: currentColor"/><path d="M9,12.12H8.38a.26.26,0,0,0-.26.26v1.24a.26.26,0,0,0,.26.26H9a.88.88,0,0,0,0-1.76Z" style="fill: currentColor"/><path d="M18,19V10a1,1,0,0,0-1-1H1a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H17A1,1,0,0,0,18,19ZM6.12,16a2.12,2.12,0,0,1-4.24,0,.62.62,0,0,1,1.24,0,.88.88,0,0,0,1.76,0V11.5a.62.62,0,0,1,1.24,0Zm2.75-.88H8.38a.26.26,0,0,0-.26.26V17.5a.62.62,0,0,1-1.24,0v-6a.62.62,0,0,1,.62-.62H9a2.12,2.12,0,0,1,2.11,2.34A2.2,2.2,0,0,1,8.87,15.12Zm7.25-1.62a.62.62,0,0,1-1.24,0V13a.88.88,0,0,0-1.76,0v3a.88.88,0,0,0,1.65.42c.05-.09.12-.3-.09-.3H14.5a.62.62,0,0,1,0-1.24h1a.62.62,0,0,1,.62.62V16a2.12,2.12,0,0,1-4.24,0V13a2.12,2.12,0,0,1,4.24,0Z" style="fill: currentColor"/></g></svg>
                                        </div>
                                        <div>
                                            <small class="fw-semibold text-secondary">
                                                <span class="text-body">Advanced marketing techiques</span><br>
                                                529 kb
                                            </small>
                                        </div>
                                        <a href="javascript: void(0);" class="link-secondary ms-8 me-2 stretched-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="22" width="22"><g><path d="M8.62,1.74A1.45,1.45,0,0,1,10.07.29h3.39a1.46,1.46,0,0,1,1.46,1.45V10a.25.25,0,0,0,.25.25h2.89a1.14,1.14,0,0,1,.83,2l-6.1,6.1a1.5,1.5,0,0,1-2,0l-6.1-6.1a1.14,1.14,0,0,1,.83-2h2.9a.26.26,0,0,0,.17-.07A.25.25,0,0,0,8.62,10Z" style="fill: currentColor"/><path d="M0,19.68a4,4,0,0,0,4,4H20a4,4,0,0,0,4-4V17.8a1.23,1.23,0,0,0-2.45,0v1.88A1.59,1.59,0,0,1,20,21.26H4a1.59,1.59,0,0,1-1.59-1.58V17.8A1.23,1.23,0,0,0,0,17.8Z" style="fill: currentColor"/></g></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- Button -->
                                <button class="btn btn-sm btn-dark" data-bs-toggle="collapse" data-bs-target="#collapseReply" aria-expanded="false" aria-controls="collapseReply">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14" class="me-1"><path d="M19.62,10.68c-3-2.67-7.13-2.85-8.86-2.79a.29.29,0,0,1-.18-.07.27.27,0,0,1-.08-.18V5.06a1,1,0,0,0-.57-.9,1,1,0,0,0-1.07.14l-7.5,6.37a1,1,0,0,0-.36.77,1,1,0,0,0,.35.76l7.51,6.63a1,1,0,0,0,1.64-.77V15a.26.26,0,0,1,.2-.25c1.91-.4,8.13-1.15,11.36,4.89a.5.5,0,0,0,.94-.23C23,15.62,21.86,12.67,19.62,10.68Z" style="fill: currentColor"/></svg>
                                    Reply
                                </button>

                                <!-- Button -->
                                <button class="btn btn-sm btn-light ms-3" type="button">
                                    Forward
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14" class="ms-1"><path d="M23.61,11.28l-8.8-8.77a1,1,0,0,0-1.71.71v5a.25.25,0,0,1-.25.25H1.1a1,1,0,0,0-1,1v5a1,1,0,0,0,1,1H12.85a.25.25,0,0,1,.25.25v5a1,1,0,0,0,1.71.71l8.8-8.8a1,1,0,0,0,0-1.41Z" style="fill: currentColor"/></svg>
                                </button>
                            </div>

                            <div class="collapse" id="collapseReply">
                                <form class="mt-5">
                                    <div data-quill class="mb-3 h-200px"></div>

                                    <div class="d-flex justify-content-end">

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-light me-1" type="button">Cancel</button>

                                        <!-- Button -->
                                        <button class="btn btn-sm btn-primary" type="button">Send</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div> <!-- / .container-fluid -->

<!-- Email modal -->
<!-- Add new email Modal -->
<div class="modal fade" id="emailModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="emailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form class="needs-validation" novalidate id="emailForm">
                <!-- Header -->
                <div class="modal-header pb-0">
                    <h3 id="emailModalTitle" class="modal-title">Pesan Baru</h3>

                    <!-- Button -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="to" class="form-label">Kepada</label>
                        <input type="text" class="form-control" id="to" placeholder="example@email.com" required>
                        <div class="invalid-feedback">Please add one or multipe email address</div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" id="subject" placeholder="Your subject">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <div data-quill class="h-200px"></div>
                    </div>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer pt-0">

                    <!-- Button -->
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>

                    <!-- Button -->
                    <button type="button" class="btn btn-primary">Kirim</button>
                </div>
                <!-- End Footer -->
            </form>
        </div>
    </div>
</div>
@endsection

