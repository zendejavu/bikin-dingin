@extends('index')

@section('title', 'Riwayat Pemesanan')

@section('css-plugins')
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
@endsection

@section('container')
    <div class="container-fluid blog py-5 pb-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Data Pemesanan</h5>
                <h1>Riwayat Pemesanan</h1>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-10 align-items-end">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item">
                                <a href="/order">Layanan Pemesanan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row g-5 justify-content-center">
                <div class="col-10 align-items-end table-responsive-md">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <td class="text-center align-middle">No</td>
                                <td class="text-center align-middle">Jenis Perangkat</td>
                                <td class="text-center align-middle">Masalah Perangkat</td>
                                <td class="text-center align-middle">Tanggal Pengerjaan</td>
                                <td class="text-center align-middle">Catatan</td>
                                <td class="text-center align-middle">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="text-dark align-middle">{{ $loop->iteration }}</td>
                                <td class="text-dark align-middle">{{ $order->devices->devices }}</td>
                                <td class="text-dark align-middle">{{ $order->problems->problems }}</td>
                                <td class="text-dark align-middle text-center">{{ date('d M Y', strtotime(($order->work_date))) }}</td>
                                <td class="text-dark align-middle">{{ $order->notes }}</td>
                                <td class="text-dark align-middle text-inline">
                                    <a href="/invoice" class="text-dark"><i class="fa-regular fa-file-invoice"></i></a>
                                    <form method="post" class="delete_form" action="{{ 'order/'.$order->id }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <a type="submit" class="text-danger"><i class="fa-regular fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- / .row -->

        </div>
    </div>
@endsection
