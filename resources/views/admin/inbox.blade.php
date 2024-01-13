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
                <li class="breadcrumb-item active" aria-current="page">Kotak Masuk</li>
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
                    <a href="/read-mail" class="list-group-item border-0 d-flex align-items-center {{ request()->is('inbox') ? ' active' : '' }}">
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
                            <div class="form-check mb-0 w-30px">
                                <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                            </div>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Refresh">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 24" height="18" width="18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.724 17.241C18.4624 19.2206 16.5291 20.6788 14.279 21.3477C12.0289 22.0167 9.61296 21.8515 7.4748 20.8826C5.33664 19.9137 3.61974 18.206 2.6393 16.0731C1.65886 13.9402 1.48069 11.5252 2.1375 9.2715C2.79431 7.0178 4.24202 5.07666 6.21483 3.80443C8.18764 2.53221 10.5532 2.0143 12.8771 2.34579C15.201 2.67728 17.3274 3.83591 18.8658 5.60898C20.4043 7.38204 21.2515 9.65054 21.252 11.998V14.251"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M24.252 11.248L21.252 14.248L18.252 11.248"/></svg>
                            </a>

                            <div class="vr bg-gray-700 mx-2"></div>

                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Arsip">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"><g><path d="M21.75,9.75v9.5a3,3,0,0,1-3,3H5.25a3,3,0,0,1-3-3V9.75" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M21.75,1.75H2.25a1.5,1.5,0,0,0-1.5,1.5v3h22.5v-3A1.5,1.5,0,0,0,21.75,1.75Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><rect x="8.5" y="10.25" width="7" height="4" rx="1.5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>                                              
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Lapor spam">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18" width="18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.313 2.27521C13.1833 2.04051 12.9931 1.84486 12.7622 1.70861C12.5313 1.57235 12.2681 1.50049 12 1.50049C11.7318 1.50049 11.4686 1.57235 11.2377 1.70861C11.0068 1.84486 10.8166 2.04051 10.687 2.27521L0.936968 20.2752C0.810886 20.5036 0.746538 20.7609 0.750276 21.0217C0.754014 21.2825 0.825708 21.5379 0.958282 21.7625C1.09086 21.9872 1.27972 22.1734 1.50625 22.3028C1.73277 22.4321 1.98911 22.5002 2.24997 22.5002H21.75C22.0108 22.5002 22.2672 22.4321 22.4937 22.3028C22.7202 22.1734 22.9091 21.9872 23.0417 21.7625C23.1742 21.5379 23.2459 21.2825 23.2497 21.0217C23.2534 20.7609 23.189 20.5036 23.063 20.2752L13.313 2.27521Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15V8.25"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18"/><path stroke="currentColor" stroke-width="1.5" d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18"/></svg>
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"><g><line x1="1" y1="5" x2="23" y2="5" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M14.25,1H9.75a1.5,1.5,0,0,0-1.5,1.5V5h7.5V2.5A1.5,1.5,0,0,0,14.25,1Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="9.75" y1="17.75" x2="9.75" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><line x1="14.25" y1="17.75" x2="14.25" y2="10.25" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/><path d="M18.86,21.62A1.49,1.49,0,0,1,17.37,23H6.63a1.49,1.49,0,0,1-1.49-1.38L3.75,5h16.5Z" style="fill: none;stroke: currentColor;stroke-linecap: round;stroke-linejoin: round;stroke-width: 1.5px"/></g></svg>
                            </a>

                            <div class="vr bg-gray-700 mx-2"></div>

                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Snooze">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M1.500 12.000 A10.500 10.500 0 1 0 22.500 12.000 A10.500 10.500 0 1 0 1.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M10.500 12.000 A1.500 1.500 0 1 0 13.500 12.000 A1.500 1.500 0 1 0 10.500 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M12 10.5L12 5.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M13.061 13.061L15.75 15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </a>
                            <a href="javascript: void(0);" class="d-flex mx-3 link-secondary" data-bs-toggle="tooltip" title="Tandai pesan telah dibaca">
                                <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M1.500 4.750 L22.500 4.750 L22.500 19.750 L1.500 19.750 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M22.161,5.3l-8.144,6.264a3.308,3.308,0,0,1-4.034,0L1.839,5.3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </a>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex mx-2 text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"/><circle cx="12" cy="12" r="3.25" style="fill: currentColor"/><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"/></g></svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Aksi
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Aksi lainnya
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Item lain disini
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->

                <div class="position-relative h-100 min-vh-50 min-vh-md-25 min-vh-lg-auto">
                    <div class="overflow-auto position-absolute w-100 h-100 scroll-shadow rounded-bottom">
                
                        <table class="table align-middle table-hover table-fixed table-edge table-nowrap mb-0">
                            <colgroup>
                                <col class="w-60px">
                                <col class="w-30px">
                                <col class="w-20px">
                                <col class="w-200px">
                                <col>
                                <col class="w-100px">
                            </colgroup>

                            <tbody class="list">
                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Zachary Ortiz
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Strengthen your profile with client testimonials. Hi Ellie, Client testimonials are a powerful way to show your value and boost credibility! Ask any client you've worked with - past or present - to endorse your skills with a testimonial on your profile.
                                        </a>
                                    </td>
                                    <td class="text-end">14:36</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Brian Jennings
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Sed sit amet mi consectetur, ultrices dolor eu, volutpat enim. Nunc id turpis eget ipsum bibendum placerat
                                        </a>
                                    </td>
                                    <td class="text-end">12:20</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            GitHub
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Nam eget ligula eget dui iaculis tempus sed eu massa. Duis ut ex sed lectus hendrerit elementum sit amet ut ipsum
                                        </a>
                                    </td>
                                    <td class="text-end">09:17</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Landon Miller, me (3)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Suspendisse ullamcorper mi vitae eros eleifend venenatis
                                        </a>
                                    </td>
                                    <td class="text-end">7 Nov</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Sonia Holmes
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Etiam suscipit nunc id mi accumsan tempor
                                        </a>
                                    </td>
                                    <td class="text-end">7 Nov</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Alexis Williams
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Cras eget nibh non magna vehicula venenatis sed in nibh
                                        </a>
                                    </td>
                                    <td class="text-end">6 Nov</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Bootstrap Themes
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vivamus nec justo eleifend, lacinia magna at, viverra enim. Phasellus mattis diam id augue laoreet, vitae posuere lacus rutrum. Pellentesque tempor diam ultrices, blandit quam quis, mattis ligula.
                                        </a>
                                    </td>
                                    <td class="text-end">5 Nov</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Maxine Silva
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Integer ultricies dolor nec nunc ullamcorper, id vestibulum sapien aliquam
                                        </a>
                                    </td>
                                    <td class="text-end">27 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Slack
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Mauris a elit et justo pretium aliquet. Donec ultrices nunc non massa venenatis, eget ultricies lectus consectetur. Proin dapibus elit sed massa cursus, ut rutrum risus malesuada
                                        </a>
                                    </td>
                                    <td class="text-end">25 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Parallels Desktop
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Duis facilisis sem nec bibendum ultricies
                                        </a>
                                    </td>
                                    <td class="text-end">25 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Webinning Ltd
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vivamus vulputate dui quis purus pretium, vel molestie arcu auctor
                                        </a>
                                    </td>
                                    <td class="text-end">23 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Brian, me (5)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Morbi maximus lorem vel consectetur convallis 😊
                                        </a>
                                    </td>
                                    <td class="text-end">21 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            CV-Library
                                        </a>
                                    </td>
                                    <td class="text-truncate fw-bold position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Integer non est eu leo hendrerit convallis vitae eget mauris
                                        </a>
                                    </td>
                                    <td class="text-end">15 Oct</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Unspalsh Team
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Curabitur blandit libero ut hendrerit dictum
                                        </a>
                                    </td>
                                    <td class="text-end">30 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Bitbucket Service
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Nullam sit amet arcu nec lacus tempor lacinia. Mauris rutrum nibh ac magna faucibus placerat. Aenean quis tellus quis ipsum condimentum convallis fringilla eget odio
                                        </a>
                                    </td>
                                    <td class="text-end">28 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            HMRC
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Phasellus molestie purus viverra massa congue facilisis. In luctus ex sit amet ligula facilisis efficitur
                                        </a>
                                    </td>
                                    <td class="text-end">27 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            iStock Photos
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Morbi id felis ut ex bibendum sagittis ut eget quam
                                        </a>
                                    </td>
                                    <td class="text-end">27 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Cloudflare
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Ut ac sapien sit amet dolor blandit tincidunt vitae et nulla. Nunc feugiat nisi vitae ipsum scelerisque ultrices
                                        </a>
                                    </td>
                                    <td class="text-end">25 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Intuit Quickbooks
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vestibulum semper justo ac bibendum fringilla. Nunc vitae purus sed metus aliquet ornare
                                        </a>
                                    </td>
                                    <td class="text-end">22 Sep</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            FedEx
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Nullam bibendum arcu sed ligula lobortis, in consequat nisl suscipit
                                        </a>
                                    </td>
                                    <td class="text-end">20 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Alibaba
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Etiam fermentum dui in risus malesuada, at molestie risus consectetur. Donec ac ex viverra, vulputate nulla euismod, tincidunt lacus. Ut eu est eget augue dictum mattis
                                        </a>
                                    </td>
                                    <td class="text-end">16 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Brian Higgs
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vivamus dignissim lacus id facilisis condimentum. Aenean in dolor nec augue viverra cursus et eget augue
                                        </a>
                                    </td>
                                    <td class="text-end">16 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Dell
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Aenean rhoncus nunc sit amet volutpat tincidunt
                                        </a>
                                    </td>
                                    <td class="text-end">15 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Kate Hutchkins
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Pellentesque quis nulla a dolor condimentum hendrerit. Maecenas eu nibh convallis massa vestibulum vestibulum
                                        </a>
                                    </td>
                                    <td class="text-end">12 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            AWS
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Quisque eget leo vestibulum, imperdiet nunc consectetur, elementum quam
                                        </a>
                                    </td>
                                    <td class="text-end">12 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            TomTom, me (2)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Fusce sit amet nunc imperdiet lectus placerat laoreet quis a odio
                                        </a>
                                    </td>
                                    <td class="text-end">10 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Google
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vestibulum interdum nisl et augue lobortis, et dignissim metus malesuada
                                        </a>
                                    </td>
                                    <td class="text-end">9 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            service@paypal.com
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vestibulum mattis odio non varius laoreet. Mauris eu metus vitae tortor dapibus rutrum
                                        </a>
                                    </td>
                                    <td class="text-end">9 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Netlify Team
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Nunc vel lectus vel nisl pretium imperdiet ac nec sapien
                                        </a>
                                    </td>
                                    <td class="text-end">8 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Apple
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vestibulum vehicula nibh vel orci elementum, vitae euismod odio pretium
                                        </a>
                                    </td>
                                    <td class="text-end">7 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Adam, me (8)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Fusce porttitor purus nec neque mattis, et consectetur nulla lobortis
                                        </a>
                                    </td>
                                    <td class="text-end">5 Sept</td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            GoDaddy
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            
                                        </a>Aliquam finibus felis at lacus viverra scelerisque
                                    </td>
                                    <td class="text-end">4 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Amazon Business
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Integer maximus felis quis ante euismod, et egestas nunc blandit
                                        </a>
                                    </td>
                                    <td class="text-end">4 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Alice, me (4)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Curabitur nec dolor non ante egestas tincidunt eget in eros
                                        </a>
                                    </td>
                                    <td class="text-end">3 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Github
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Suspendisse sit amet elit faucibus, feugiat urna vitae, ultricies velit. Morbi luctus orci vitae condimentum mollis
                                        </a>
                                    </td>
                                    <td class="text-end">2 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Bitbucket
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Praesent a nisl et orci luctus elementum nec ac arcu
                                        </a>
                                    </td>
                                    <td class="text-end">2 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Engaging Networks
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Praesent volutpat turpis maximus nulla porta, a ultricies ex accumsan
                                        </a>
                                    </td>
                                    <td class="text-end">2 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Netlify Team
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Praesent nec enim at dolor molestie egestas quis at erat. Vivamus tincidunt sem non nibh sollicitudin, eu venenatis lorem aliquam. Sed pharetra dolor at ultrices cursus
                                        </a>
                                    </td>
                                    <td class="text-end">1 Sept</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Tina Smith
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Fusce sagittis massa et leo euismod, non cursus neque gravida
                                        </a>
                                    </td>
                                    <td class="text-end">29 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Alonso, me (2)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Nam malesuada nulla a nunc ullamcorper pretium. Sed egestas metus sit amet dolor blandit pharetra
                                        </a>
                                    </td>
                                    <td class="text-end">28 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Dropbox
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Phasellus porttitor odio bibendum eros viverra, in venenatis velit scelerisque
                                        </a>
                                    </td>
                                    <td class="text-end">27 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Streamline
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Etiam vitae neque euismod, vehicula ante vel, porta massa. In laoreet turpis id mi efficitur imperdiet. Maecenas consectetur erat ac leo tristique consectetur
                                        </a>
                                    </td>
                                    <td class="text-end">26 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Dribbble
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Cras eget felis ullamcorper, aliquet mi in, commodo neque
                                        </a>
                                    </td>
                                    <td class="text-end">25 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            JIRA
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Quisque fringilla orci at risus ullamcorper, id semper nunc congue
                                        </a>
                                    </td>
                                    <td class="text-end">25 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            YouTube
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Ut rutrum quam ac diam ultrices volutpat
                                        </a>
                                    </td>
                                    <td class="text-end">24 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-warning" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Microsoft
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Suspendisse ultricies elit non mi efficitur varius
                                        </a>
                                    </td>
                                    <td class="text-end">23 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Azure
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Praesent faucibus purus id lacus fermentum, eu sagittis lectus aliquet
                                        </a>
                                    </td>
                                    <td class="text-end">21 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Bootstrap Themes
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Donec volutpat elit sit amet orci pulvinar, ut ultrices dui imperdiet. Aenean quis metus ut dui ultricies tristique at a tellus
                                        </a>
                                    </td>
                                    <td class="text-end">20 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Unspalsh
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Vestibulum at metus at lectus varius fermentum vitae lacinia felis. Nulla ullamcorper ex eu massa volutpat mattis
                                        </a>
                                    </td>
                                    <td class="text-end">19 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Webinning Ltd
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Pellentesque vel lacus vitae leo condimentum commodo eu non ante
                                        </a>
                                    </td>
                                    <td class="text-end">17 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Brian, me (5)
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Maecenas imperdiet mauris a suscipit molestie
                                        </a>
                                    </td>
                                    <td class="text-end">16 Aug</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Star">
                                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M12.729,1.2l3.346,6.629,6.44.638a.805.805,0,0,1,.5,1.374l-5.3,5.253,1.965,7.138a.813.813,0,0,1-1.151.935L12,19.934,5.48,23.163a.813.813,0,0,1-1.151-.935L6.294,15.09.99,9.837a.805.805,0,0,1,.5-1.374l6.44-.638L11.271,1.2A.819.819,0,0,1,12.729,1.2Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                                        </a>
                                    </td>
                                    <td class="px-0">
                                        <a href="javascript: void(0);" class="d-flex align-items-center justify-content-center w-20px h-20px text-secondary" data-bs-toggle="tooltip" title="Mark as important">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="16" width="16"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.01195 19.188C8.73065 19.4692 8.34919 19.6272 7.95145 19.6272C7.5537 19.6272 7.17224 19.4692 6.89095 19.188L1.51195 13.81C1.37256 13.6707 1.26198 13.5053 1.18654 13.3233C1.1111 13.1412 1.07227 12.9461 1.07227 12.749C1.07227 12.552 1.1111 12.3568 1.18654 12.1748C1.26198 11.9927 1.37256 11.8273 1.51195 11.688L12.0119 1.18802C12.1513 1.04876 12.3167 0.938307 12.4988 0.862982C12.6808 0.787658 12.8759 0.748934 13.0729 0.749024H18.4509C18.8488 0.749024 19.2303 0.907059 19.5116 1.18836C19.7929 1.46967 19.9509 1.8512 19.9509 2.24902V7.62802C19.9509 8.02557 19.793 8.40682 19.5119 8.68802"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C15.9819 4.87402 15.814 4.70613 15.814 4.49902C15.814 4.29192 15.9819 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-width="1.5" d="M16.189 4.87402C16.3961 4.87402 16.564 4.70613 16.564 4.49902C16.564 4.29192 16.3961 4.12402 16.189 4.12402"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.6239 11.679L19.1649 15.749H22.1649C22.3163 15.7429 22.4659 15.7836 22.5932 15.8658C22.7205 15.9479 22.8193 16.0673 22.8762 16.2078C22.933 16.3482 22.945 16.5028 22.9106 16.6503C22.8762 16.7979 22.797 16.9312 22.6839 17.032L20.0839 18.847L21.5269 22.161C21.5899 22.3128 21.6038 22.4804 21.5665 22.6404C21.5293 22.8004 21.4429 22.9448 21.3194 23.0531C21.1959 23.1615 21.0416 23.2284 20.8781 23.2446C20.7146 23.2607 20.5502 23.2252 20.4079 23.143L16.9209 21.182L13.4299 23.143C13.2877 23.2252 13.1232 23.2607 12.9597 23.2446C12.7962 23.2284 12.6419 23.1615 12.5184 23.0531C12.3949 22.9448 12.3085 22.8004 12.2713 22.6404C12.2341 22.4804 12.2479 22.3128 12.3109 22.161L13.7539 18.847L11.1539 17.032C11.0406 16.9317 10.961 16.7987 10.9262 16.6514C10.8914 16.504 10.9029 16.3495 10.9593 16.209C11.0157 16.0685 11.1142 15.9489 11.2412 15.8666C11.3683 15.7842 11.5176 15.7432 11.6689 15.749H14.6689L16.2139 11.679C16.2823 11.5515 16.384 11.445 16.5081 11.3707C16.6323 11.2964 16.7742 11.2571 16.9189 11.2571C17.0636 11.2571 17.2056 11.2964 17.3297 11.3707C17.4539 11.445 17.5555 11.5515 17.6239 11.679Z"/></svg>
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            iStock Photos
                                        </a>
                                    </td>
                                    <td class="text-truncate position-relative">
                                        <a href="./read-email.html" class="text-body stretched-link">
                                            Donec sit amet ligula eget sem vestibulum posuere sit amet sed est
                                        </a>
                                    </td>
                                    <td class="text-end">15 Aug</td>
                                </tr>
                            </tbody>
                        </table>
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

