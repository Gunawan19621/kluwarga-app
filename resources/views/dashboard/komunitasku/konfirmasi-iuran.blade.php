@extends('dashboard.layouts.main')
@section('title', 'Iuran Warga')
@section('content')
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Komunitasku</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('komunitas.index') }}">Komunitas</a>
                    </li>
                    <li class="breadcrumb-item active">Konfirmasi iuran warga</li>
                </ol>
            </div>
            <h4 class="page-title">Konfirmasi Pembayaran Iuran Warga</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    <i class="dripicons-view-list mr-2"></i>
                    <h4 class="mt-0 d-inline-block">Daftar Konfirmasi Pembayaran Iuran Bulan Ini (08/19)</h4>
                </div>
                {{-- <div class="">
                    <div class="input-group">
                        <a href="{{ route('konfirmasi-iuran.index') }}" class="btn btn-primary mr-2">Konfirmasi Iuran
                            warga</a>
                        <a href="{{ route('tambah-iuran.index') }}" class="btn btn-primary">+Tambah Iuran</a>
                    </div>
                </div> --}}
            </div>
            <hr>
            <!-- tabel iuran-->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kode Rumah</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Bayaran</th>
                                    <th>Status Konfirmasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>19/6/23</td>
                                    <td>12A</td>
                                    <td>Gunawan</td>
                                    <td>Iuran Awal</td>
                                    <td>Rp.500.000</td>
                                    <td>
                                        <span class="badge badge-boxed badge-warning">Menunggu
                                            konfirmasi</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('detail-konfirmasi-iuran.index') }}">
                                            <i class="fa fa-check-square-o mr-2 font-20"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td>19/6/23</td>
                                    <td>12A</td>
                                    <td>Wahyu</td>
                                    <td>Iuran Awal</td>
                                    <td>Rp.500.000</td>
                                    <td>
                                        <span class="badge badge-boxed badge-success">Diterima</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('detail-konfirmasi-iuran.index') }}">
                                            <i class="fa fa-check-square-o mr-2 font-20"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>
                                    <td>19/6/23</td>
                                    <td>12A</td>
                                    <td>Wahyu</td>
                                    <td>Iuran Awal</td>
                                    <td>Rp.500.000</td>
                                    <td>
                                        <span class="badge badge-boxed badge-danger">Belum lunas</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('detail-konfirmasi-iuran.index') }}">
                                            <i class="fa fa-check-square-o mr-2 font-20"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
