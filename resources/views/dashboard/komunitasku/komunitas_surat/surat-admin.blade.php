@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Surat')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Komunitasku</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('komunitas.index') }}">Komunitas</a>
                        </li>
                        <li class="breadcrumb-item active">Pengaturan Surat</li>
                    </ol>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card bg-transparent shadow-none">
                    <div class="card-body bg-white">
                        <!-- Profil Komunitas Perumahan -->
                        <div class="card">
                            <div class="card-body"
                                style="background: linear-gradient(to top, {{ $getKomunitas['warna_skunder'] }}, {{ $getKomunitas['warna_primer'] }});">
                                <div class="row">
                                    <div class="col-3 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('storage/' . $getKomunitas['logo_komunitas']) }}" alt=""
                                            class="rounded-circle img-thumbnail thumb-xl">
                                        <div class="online-circle"></div>
                                    </div>
                                    <div class="col-7 text-center text-white">
                                        <h3>{{ $getKomunitas['nama_komunitas'] }}</h3>
                                        <p>"{{ $getKomunitas['moto_komunitas'] }}"</p>
                                        <hr class="col-9" style="border-color:#fff">
                                        <div class="d-flex justify-content-around">
                                            <span>
                                                <i class="dripicons-user"></i>
                                                <p class="d-inline-block">{{ $getKomunitas['jumlah_warga'] }}</p>
                                            </span>
                                            <span>
                                                <i class="dripicons-home"></i>
                                                <p class="d-inline-block">{{ $getKomunitas['jumlah_rumah'] }}</p>
                                            </span>
                                            <span>
                                                <i class="dripicons-location"></i>
                                                <p class="d-inline-block">{{ $getKomunitas['alamat_komunitas'] }}</p>
                                            </span>
                                            <span>
                                                <i class="mdi mdi-phone"></i>
                                                <p class="d-inline-block">{{ $getKomunitas['no_tlp'] }}</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 class="mt-0 d-inline-block">Pengaturan Surat</h4>
                                    </div>
                                    <div>
                                        <button type="Update" class="btn btn-primary" data-toggle="modal"
                                            data-target="#tambahsuratModal">+Tambah</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table">
                                    <h5>Jenis Surat :</h5><select class="form-control">
                                        <option>Jenis Surat</option>
                                        <option>Surat Keterangan Domisili</option>
                                        <option>Surat 2</option>
                                        <option>Surat 3</option>
                                    </select>
                                    <h6>Data yang di butuhkan</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck1" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="1">
                                                <label class="custom-control-label" for="customCheckDisabled">Nama
                                                    Lengkap</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck2" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheckDisabled">Jenis
                                                    Surat</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck3" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="3">
                                                <label class="custom-control-label" for="customCheckDisabled">Tempat/Tanggal
                                                    lahir</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck4" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="4">
                                                <label class="custom-control-label"
                                                    for="customCheckDisabled">Pekerjaan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck5" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="5">
                                                <label class="custom-control-label" for="customCheckDisabled">Agama</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck6" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="6">
                                                <label class="custom-control-label" for="customCheckDisabled">Status
                                                    Perkawinan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck7" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="7">
                                                <label class="custom-control-label"
                                                    for="customCheckDisabled">Kewarganegaraan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck8" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="8">
                                                <label class="custom-control-label" for="customCheckDisabled">Nomor
                                                    NIK/Passpor</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck9" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="9">
                                                <label class="custom-control-label" for="customCheckDisabled">Nomor Kartu
                                                    Keluarga</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck10" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="10">
                                                <label class="custom-control-label" for="customCheckDisabled">Alamat
                                                    Sesuai KTP</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck11" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="11">
                                                <label class="custom-control-label" for="customCheckDisabled">Alamat
                                                    Domisili</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked=""
                                                    id="customCheck12" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="12">
                                                <label class="custom-control-label"
                                                    for="customCheckDisabled">Keperluan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="tableSurat" class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Surat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Keterangan Domisili</td>
                                    <td>
                                        <a href="#" class="" data-toggle="modal" data-target="#showModal">
                                            <i class="fa fa-eye mr-2" style="font-size: 20px"></i>
                                        </a>
                                        <a href="#" class="" data-toggle="modal"
                                            data-target="#editsuratModal">
                                            <i class="fa fa-edit mr-2" style="font-size: 20px"></i>
                                        </a>
                                        <a href="#" class="">
                                            <i class="fa fa-trash-o text-danger mr-2" style="font-size: 20px"
                                                id="sa-params"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris data sesuai kebutuhan -->
                            </tbody>
                        </table>

                        <button type="submit" class="btn btn-danger px-4 float-right mt-4 mr-2"
                            onclick="window.location.href = '{{ route('komunitas.index') }}'">KEMBALI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.komunitasku.komunitas_surat.popup')
@endsection
