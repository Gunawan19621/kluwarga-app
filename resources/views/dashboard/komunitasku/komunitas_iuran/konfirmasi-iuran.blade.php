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
                    <li class="breadcrumb-item">
                        <a href="{{ route('iuranKomunitas.index') }}">Pengaturan Iuran</a>
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
                    <h4 class="mt-3 d-inline-block">Daftar Konfirmasi Pembayaran Iuran Bulan Ini (08/19)</h4>
                </div>
                <div class="">
                    <div class="input-group">
                        {{-- <a href="{{ route('komunitas.halamanKonfirmasiIuran') }}" class="btn btn-primary mr-2">Konfirmasi
                            Iuran
                            warga</a> --}}
                        {{-- <a href="{{ route('komunitas.halamanTambahIuran') }}" class="btn btn-primary">+Tambah Iuran</a> --}}
                    </div>
                </div>
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
                                        <a href="{{ route('iuranKomunitas.detailKonfirmasi') }}">
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
            <button type="submit" class="btn btn-danger px-4 float-right mr-3"
                onclick="window.location.href = '{{ route('iuranKomunitas.index') }}'">KEMBALI</button>
        </div>
    </div>
@endsection
