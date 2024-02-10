@extends('index')

@section('title', 'Riwayat Pemesanan')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('css-plugins')
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('js-plugins')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet">
<script>
    $(document).ready(function () {
        $('.btn-delete').on('click', function () {
            let token = $("meta[name='csrf-token']").attr("content");
            let id = $(this).data('id');
            console.log(id,token);
            Swal.fire({
                title: "Anda yakin ingin menghapus pesanan ?",
                text: "Anda akan menghapus pesanan secara permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "YA, HAPUS!",
                cancelButtonText: "TIDAK"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "order/"+id,
                        data: {
                            'id': id,
                            '_token': token
                        },
                        // url: `/order/${id}`,
                        // type: "DELETE",
                        // cache: false,
                        // data: {
                        //     "_token": token
                        // },
                        success: function (data) {
                            console.log(data);
                            Swal.fire({
                                title: "Terhapus!",
                                icon: "success",
                                text: "Pesanan Anda telah terhapus.",
                                showConfirmButton: false,
                                timer: 3000
                            });
                            
                            //remove post on table
                            $(`#index_${id}`).remove();
                        },
                        error: function (error) {
                            console.log(error.data);
                        }
                    });
                }
            });
        });
    });
</script>
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
                                <a href="/order">Pemesanan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Riwayat</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row g-5 justify-content-center">
                <div class="col-10 align-items-end table-responsive-md">
                    <table class="table">
                    {{-- <table class="table table-striped table-hover"> --}}
                        <thead class="table-dark">
                            <tr>
                                <td class="text-center align-middle">No</td>
                                <td class="text-center align-middle">Jenis Perangkat</td>
                                <td class="text-center align-middle">Masalah Perangkat</td>
                                <td class="text-center align-middle">Tanggal Pengerjaan</td>
                                <td class="text-center align-middle">Status</td>
                                <td class="text-center align-middle">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $orders[3]->devices->devices }} --}}
                            @foreach ($orders as $order)
                            <tr id="index_{{ $order->id }}">
                                <td class="text-dark align-middle">{{ $loop->iteration }}</td>
                                <td class="text-dark align-middle">{{ $order->devices->device }}</td>
                                <td class="text-dark align-middle">{{ $order->problems->problem }}</td>
                                <td class="text-dark align-middle text-center">{{ date('d M Y', strtotime(($order->work_date))) }}</td>
                                <td><span class="badge rounded-pill text-bg-success">Selesai</span></td>
                                <td class="text-dark align-middle text-center">
                                    <a href="/invoice/{{ $order->id }}"><i class="fa-regular fa-file-invoice"></i></a>
                                    <a href="javascript: void(0);" class="btn-delete" data-id="{{$order->id}}" data-toggle="tooltip" title="Hapus" role="button"><i class="fa-solid fa-xmark text-danger"></i></a>
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
