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

                                <!-- Modal tambah kategori akun -->
                                <div class="modal fade" id="tambah-kategori-akun" tabindex="-1" role="dialog"
                                    aria-labelledby="popupModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title ml-auto text-success text-center"
                                                    id="exampleModalLongTitle">Tambah Kategori Akun Keuangan</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="">
                                                            <div class="form-group">
                                                                <label>Kategori akun baru</label>
                                                                <div>
                                                                    <input class="form-control" type="text"
                                                                        name="" id="">
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button class="btn btn-danger" type="button">Batal</button>
                                                                <button class="btn btn-success"
                                                                    type="submit">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End modal tambah kategori akun -->

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

                            <!-- Modal tambah akun keuangan -->
                            <div class="modal fade" id="tambah-akun-keuangan" tabindex="-1" role="dialog"
                                aria-labelledby="popupModalLabel" aria-hidden="true">
                                <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title ml-auto text-success text-center"
                                                id="exampleModalLongTitle">Tambah Akun
                                                Keuangan</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label>Grup Akun</label>
                                                            <div>
                                                                <select class="form-control">
                                                                    <option>Kas & Bank</option>
                                                                    <option>Pengeluaran</option>
                                                                    <option>Pemasukan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kode Akun</label>
                                                            <div>
                                                                <input class="form-control" type="text" name=""
                                                                    id="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Akun</label>
                                                            <div>
                                                                <input class="form-control" type="text" name=""
                                                                    id="">
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button class="btn btn-danger" type="button">Batal</button>
                                                            <button class="btn btn-success" type="submit">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End modal tambah akun keuangan -->

                            <button type="submit" class="btn btn-success float-right">Simpan dan Kembali</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- @include('dashboard.komunitasku.popup') --}}

@endsection
