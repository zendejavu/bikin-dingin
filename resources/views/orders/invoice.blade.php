@extends('index')

@section('title', 'Invoice')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-plugins')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('js-plugins')
<script src="{{ asset('assets/js/order.js') }}" type="text/javascript"></script>
@endsection

@section('container')
<div class="container-fluid blog py-5 pb-5 bg-light">
    <div class="container">

        <div class="d-flex align-items-baseline justify-content-between">
    
            <!-- Title -->
            <h1 class="h2 d-flex">
                                    Invoice
                                </h1>
    
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/history">Riwayat Pemesanan</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                </ol>
            </nav>
        </div>
    
        <!-- Card -->
        <div class="card border-0">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-xl-6 col-xxl-5">
                        <img src="{{ asset('assets/img/logo-large-light.svg') }}" alt="..." class="mb-5" width="145" height="45">
    
                        <div>
                            <p>Kepada {{ $data->users->name }}</p>
                            <p>Terima kasih Anda telah mempercayakan Kami dalam jasa Servis dan Konsultasi terkait masalah Pendingin! Silakan lihat rincian biaya untuk pekerjaan yang baru saja diselesaikan. Kami menghargai pembayaran cepat Anda.</p>
                            <p>
                            Salam Hormat,
                            <br>
                            Tim BikinDingin
                            </p>
                        </div>
                    </div>
                    <div class="col-auto text-md-end">
                        <p class="fw-bold">
                            BikinDingin
                            <br>
                            Kota Makassar,
                            <br>
                            Sulawesi Selatan,
                            <br>
                            Indonesia
                        </p>
                        <img src="https://d33wubrfki0l68.cloudfront.net/5d64e2526a24cc1eb3b36829f3292335b815596c/3a5fd/assets/images/printscreens/qr.svg" width="95" height="95" class="img-fluid" alt="...">
                    </div>
                </div>
                <!-- / .row -->
    
                <!-- Divider -->
                <hr>
    
                <div class="row justify-content-between">
                    <div class="col col-lg-auto fw-semibold mb-5">
                        <div class="row">
                            <div class="col-auto w-150px">
                                <p class="mb-3 mb-md-3">
                                    <span class="text-dark">Tagihan Kepada :</span>
                                </p>
                            </div>
                            <div class="col-auto">
                                <p class="mb-3">
                                    {{ $data->users->name }}
                                </p>
                                <p class="mb-5">
                                    {{ $data->address }}
                                </p>
                            </div>
                        </div>
                        <!-- / .row -->
    
                        <div class="row">
                            <div class="col-auto w-150px">
                                <p class="mb-1 mb-md-3">
                                    <span class="text-dark">Tanggal Pengerjaan :</span>
                                </p>
                            </div>
    
                            <div class="col-auto">
                                <p class="mb-2">{{ date('d M Y', strtotime(($data->work_date))) }}</p>
                            </div>
                        </div>
                        <!-- / .row -->
    
                        {{-- <div class="row">
                            <div class="col-auto w-150px">
                                <p class="mb-1 mb-md-3">
                                    <span class="text-dark">Nomor Invoice:</span>
                                </p>
                            </div>
    
                            <div class="col-auto">
                                <p class="mb-2">06/03/2022</p>
                            </div>
                        </div> --}}
                        <!-- / .row -->
    
                        {{-- <div class="row">
                            <div class="col-auto w-150px">
                                <p class="mb-1 mb-md-3">
                                    <span class="text-dark">Jatuh Tempo:</span>
                                </p>
                            </div>
    
                            <div class="col-auto">
                                <p class="mb-2">{{ date('d M Y', strtotime(($data->work_date))) }}</p>
                            </div>
                        </div> --}}
                        <!-- / .row -->
    
                        {{-- <div class="row">
                            <div class="col-auto w-150px">
                                <p class="mb-1 mb-md-3">
                                    <span class="text-dark">Nomor PO:</span>
                                </p>
                            </div>
    
                            <div class="col-auto">
                                <p class="mb-2">#PO-AC-002931</p>
                            </div>
                        </div> --}}
                        <!-- / .row -->
                    </div>
    
                    <div class="col col-lg-auto text-end">
                        <span class="text-dark">Jumlah Tagihan (IDR)</span>
                        <h3 class="display-4 mb-3">Rp. {{ number_format($data->price, 0, ',', '.') }}</h3>
    
                        <span class="text-dark">Status Invoice</span>
                        <br>
                        <span class="badge text-bg-danger-soft fs-6 fw-bold mb-6">Jatuh Tempo</span>
                    </div>
                </div>
                <!-- / .row -->
    
                <div class="row">
                    <div class="col">
    
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="w-60px">#</th>
                                        <th scope="col">Perangkat</th>
                                        <th scope="col">Layanan Perbaikan</th>
                                        <th scope="col">Catatan Tambahan</th>
                                        <th scope="text-end">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data as $item) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $data->devices->device }}</td>
                                        <td>{{ $data->problems->problem }}</td>
                                        <td>{{ $data->note }}</td>
                                        <td class="text-end">Rp. {{ number_format($data->price, 0, ',', '.') }}</td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- / .table-responsive -->
                    </div>
                </div>
                <!-- / .row -->
            </div>
    
            <div class="card-footer">
                <div class="row align-items-end">
                    <div class="col mb-3 mb-md-0">
                        <small class="text-dark">Jika Anda memiliki pertanyaan, silahkan hubungi Kami.</small>
                    </div>
    
                    <div class="col-md-auto">
    
                        <!-- Button -->
                        <button type="button" class="btn btn-secondary">Cetak</button>
    
                        <!-- Button -->
                        <button type="button" class="btn btn-primary ms-2">Bayar Invoice</button>
                    </div>
                </div>
                <!-- / .row -->
            </div>
        </div>
    </div>
    <!-- / .container-fluid -->    
</div>
@endsection