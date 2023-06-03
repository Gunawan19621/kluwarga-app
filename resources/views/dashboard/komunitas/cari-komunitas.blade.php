@extends('dashboard.layouts.main')
@section('title', 'Cari Komunitas')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <h4 class="text-dark mt-0">Cari Komunitasmu</h4>
                    <hr>
                    <p>Cari dan bergabunglah dengan komunitas yang kamu inginkan !</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <input type="text" id="example-input1-group2" name="example-input1-group2"
                                    class="form-control" placeholder="Search...">
                                <span class="input-group-prepend">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <button type="Update" class="btn btn-danger float-right" data-toggle="modal"
                                data-target="#popupModal">Riwayat</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="text-dark mt-0">Cari Komunitasmu</h4>
                    <div class="card">
                        <div class="card-body" style="background: linear-gradient(to top, #08CAA2,#058BA0);">
                            <div class="row">
                                <div class="col-3 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt=""
                                        class="rounded-circle img-thumbnail thumb-xl">
                                </div>
                                <div class="col-9 text-center text-white">
                                    <h3>Komunitas Perumahan Wakanda</h3>
                                    <p>"Bersama-sama mari hidup rukun bertetangga"</p>
                                    <hr class="col-9" style="border-color:#fff">
                                    <div class="d-flex justify-content-around">
                                        <span>
                                            <i class="dripicons-user"></i>
                                            <p class="d-inline-block">34</p>
                                        </span>
                                        <span>
                                            <i class="dripicons-home"></i>
                                            <p class="d-inline-block">18</p>
                                        </span>
                                        <span>
                                            <i class="dripicons-location"></i>
                                            <p class="d-inline-block">Jln. Indramayu Kota</p>
                                        </span>
                                        <span>
                                            <i class="mdi mdi-phone"></i>
                                            <p class="d-inline-block">089765432812</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table table-hover mb-0">
                                <thead class="thead-default">
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck01"
                                                    data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck01">
                                                </label>
                                            </div>
                                        </th>
                                        <th>Kode Rumah</th>
                                        <th>Nama</th>
                                        <th>Pemilik</th>
                                        <th>Penghuni</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck01"
                                                    data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck01"></label>
                                            </div>
                                        </td>
                                        <td>A2</td>
                                        <td>Yusup</td>
                                        <td>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio1" name="customRadio"
                                                    class="custom-control-input" checked="checked" />
                                                <label class="custom-control-label" for="customRadio1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio2" name="customRadio"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label" for="customRadio2"></label>
                                            </div>
                                        </td>
                                        <td>Warga</td>
                                        <td>
                                            <a href="#" class=""><i class="fa fa-edit mr-2"
                                                    style="font-size: 25px"></i></a>
                                            <a href="#" class=""><i class="fa fa-trash-o text-danger mr-2"
                                                    style="font-size: 25px"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="Update" class="btn btn-success px-4 float-right" data-toggle="modal"
                                data-target="#gabungModal">Gabung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Riwayat -->
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mx-auto" id="exampleModalLongTitle">Riwayat Pencarian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td>Rumah Indah</td>
                                <td>12.30</td>
                                <td> <button type="button" class="btn btn-danger"><i
                                            class="dripicons-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rumah Indah</td>
                                <td>12.30</td>
                                <td> <button type="button" class="btn btn-danger"><i
                                            class="dripicons-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rumah Indah</td>
                                <td>12.30</td>
                                <td> <button type="button" class="btn btn-danger"><i
                                            class="dripicons-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rumah Indah</td>
                                <td>12.30</td>
                                <td> <button type="button" class="btn btn-danger"><i
                                            class="dripicons-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal RIwayat --}}

    <!-- Modal Tambah Data Rumah-->
    <div class="modal fade" id="gabungModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Tambah Data Rumah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jalan" class="col-form-label">Jalan</label>
                        <input class="form-control" name="jalan" type="text" id="jalan"
                            value="{{ old('jalan') }}">
                    </div>
                    <div class="form-group">
                        <label for="blok" class="col-form-label">Blok</label>
                        <div class="">
                            <input class="form-control" name="blok" type="text" id="blok"
                                value="{{ old('blok') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor-rumah" class="col-form-label">Nomor Rumah</label>
                        <div class="">
                            <input class="form-control" name="nomor-rumah" type="text" id="nomor-rumah"
                                value="{{ old('nomor-rumah') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipe-komunitas" class="col-form-label">Status Hunian</label>
                        <div class="">
                            <select class="form-control" name="tipe-komunitas" type="text" id="tipe-komunitas"
                                value="{{ old('tipe-komunitas') }}">
                                <option>Pilih Status Hunian</option>
                                <option>Pemilik</option>
                                <option>Penghuni</option>
                            </select>
                        </div>
                    </div>
                    <p>Dihuni sejak</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="">
                                    <select class="form-control" name="bulan" type="text" id="bulan"
                                        value="{{ old('bulan') }}">
                                        <option>Bulan</option>
                                        <option>Bulan 1</option>
                                        <option>Bulan 2</option>
                                        <option>Bulan 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="">
                                    <select class="form-control" name="tahun" type="text" id="tahun"
                                        value="{{ old('tahun') }}">
                                        <option>Tahun</option>
                                        <option>Tahun 1</option>
                                        <option>Tahun 2</option>
                                        <option>Tahun 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                    <button type="button" class="btn btn-danger waves-effect float-right mr-2" data-dismiss="modal">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah Data Rumah --}}

@endsection
