@extends('dashboard.layouts.main')
@section('title', 'Edit Akun Keuangan')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Komunitasku</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('komunitas.index') }}">Komunitas</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('komunitas.halamanKeuangan') }}">Pengaturan Keuangan</a>
                        </li>
                        <li class="breadcrumb-item active">Edit akun keuangan</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Akun Keuangan</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-between mb-3">
                                <h4 class="text-success mt-0">Pengaturan Akun Keuangan</h4>
                                <div>
                                    <button class="btn btn-sm btn-primary mr-1" data-toggle="modal"
                                        data-target="#tambah-kategori-akun">Tambah Kategori</button>
                                    <button type="Update" class="btn btn-sm btn-light dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="dripicons-trash"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Hapus
                                            Semua</a>
                                        <a class="dropdown-item" href="#">Hapus
                                            Terpilih</a>
                                    </div>
                                </div>


                            </div>
                            <!-- Datatable Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-default">
                                                <tr>
                                                    <th style="width: 100% !important">1. Kas & Bank</th>
                                                    <th></th>
                                                    <th>
                                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                                            data-target="#tambah-akun-keuangan">+Tambah</button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="width: 100% !important">101 Bank BCA</th>
                                                    <td></td>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-default">
                                                <tr>
                                                    <th style="width: 100% !important">2. Pemasukan</th>
                                                    <th></th>
                                                    <th>
                                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                                            data-target="#tambah-akun-keuangan">+Tambah</button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="width: 100% !important">101 Bank BCA</th>
                                                    <td></td>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-default">
                                                <tr>
                                                    <th style="width: 100% !important">3. Pengeluaran</th>
                                                    <th></th>
                                                    <th>
                                                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                                            data-target="#tambah-akun-keuangan">+Tambah</button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="width: 100% !important">101 Bank BCA</th>
                                                    <td></td>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable End -->

                            <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                            <button type="submit" class="btn btn-danger px-4 float-right mr-3"
                                onclick="window.location.href = '{{ route('komunitas.halamanKeuangan') }}'">KEMBALI</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('dashboard.komunitasku.komunitas_keuangan.popup')

@endsection
