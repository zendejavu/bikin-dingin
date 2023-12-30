@extends('index')

@section('title', 'Input Order')
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
                <h1>Input Jasa Layanan</h1>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-8 align-items-end">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Layanan Pemesanan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Servis AC Ringan</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row g-5 justify-content-center">
                <div class="col-8">
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
            <!-- / .row -->

        </div>
    </div>
@endsection
