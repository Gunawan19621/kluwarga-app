@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Keuangan')
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
                        <li class="breadcrumb-item active">Pengaturan Keuangan</li>
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

                        <div class="card">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-4">
                                        <h4 class="mt-4 d-inline-block">Input Laporan Keuangan</h4>
                                    </div>
                                    <div class="col-8">
                                        <div class="d-flex justify-content-end px-3 py-3 mb-0">
                                            <div class="border-right mr-1"><a
                                                    href="{{ route('komunitas.halamanAkunKeuangan') }}"
                                                    class="btn btn-outline-info btn-sm mr-2 mt-1">Edit
                                                    Akun Keuangan</a></div><i class="mdi mdi-calendar-today mr-2"
                                                style="font-size: 30px"></i><select class="form-control w-25 mr-2">
                                                <option>Tahun</option>
                                                <option>Tahun 1</option>
                                                <option>Tahun 2</option>
                                            </select>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <caption><strong><i>*Input laporan keuangan dapat menekan bulan yang
                                            dituju</i></strong></caption>
                                <hr class="border">
                                <div class="table-responsive">
                                    <table id="table" class="table table-hover table-bordered table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="width: 210px">Saldo Awal Kas & Bank</th>
                                                <th class="text-success" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Jan</th>
                                                <th class="text-danger" data-toggle="modal"
                                                    style="cursor: pointer"data-target="#keuangan-edit-input">
                                                    Feb</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Mar</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Apr</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Mei</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Jun</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Jul</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Agt</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Sep</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Okt</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Nov</th>
                                                <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                    data-target="#keuangan-edit-input">Des</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>101 Bank BCA</td>
                                                <td>200000</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Total Saldo Awal Kas & Bank</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table id="table" class="table table-hover table-bordered table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="width: 210px">Pemasukan</th>
                                                <th>Jan</th>
                                                <th>Feb</th>
                                                <th>Mar</th>
                                                <th>Apr</th>
                                                <th>Mei</th>
                                                <th>Jun</th>
                                                <th>Jul</th>
                                                <th>Agt</th>
                                                <th>Sep</th>
                                                <th>Okt</th>
                                                <th>Nov</th>
                                                <th>Des</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Iuran Wajib</td>
                                                <td>200000</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Total Pemasukan</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table id="table" class="table table-hover table-bordered table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="width: 210px">Pengeluaran</th>
                                                <th>Jan</th>
                                                <th>Feb</th>
                                                <th>Mar</th>
                                                <th>Apr</th>
                                                <th>Mei</th>
                                                <th>Jun</th>
                                                <th>Jul</th>
                                                <th>Agt</th>
                                                <th>Sep</th>
                                                <th>Okt</th>
                                                <th>Nov</th>
                                                <th>Des</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Biaya Operasional</td>
                                                <td>200000</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>Total Total Pengeluaran</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                {{-- <table id="tableKeuangan" class="table datatable ">
                                    <thead>
                                        <tr>
                                            <th style="width: 210px">Saldo Awal Kas & Bank</th>
                                            <th class="text-success" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Jan</th>
                                            <th class="text-danger" data-toggle="modal"
                                                style="cursor: pointer"data-target="#keuangan-edit-input">
                                                Feb</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Mar</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Apr</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Mei</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Jun</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Jul</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Agt</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Sep</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Okt</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Nov</th>
                                            <th class="text-danger" data-toggle="modal" style="cursor: pointer"
                                                data-target="#keuangan-edit-input">Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>101 Bank BCA</td>
                                            <td>200000</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Total Saldo Awal Kas & Bank</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th style="width: 210px">Pengeluaran</th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>Mar</th>
                                            <th>Apr</th>
                                            <th>Mei</th>
                                            <th>Jun</th>
                                            <th>Jul</th>
                                            <th>Agt</th>
                                            <th>Sep</th>
                                            <th>Okt</th>
                                            <th>Nov</th>
                                            <th>Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- baris 1 -->
                                        <tr>
                                            <td>Biaya Operasional</td>
                                            <td>200000</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <!-- baris 2 -->
                                        <tr>
                                            <td>Total Total Pengeluaran</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th style="width: 210px">Pemasukan</th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>Mar</th>
                                            <th>Apr</th>
                                            <th>Mei</th>
                                            <th>Jun</th>
                                            <th>Jul</th>
                                            <th>Agt</th>
                                            <th>Sep</th>
                                            <th>Okt</th>
                                            <th>Nov</th>
                                            <th>Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Iuran Wajib</td>
                                            <td>200000</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Total Pemasukan</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th style="width: 210px">Pengeluaran</th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>Mar</th>
                                            <th>Apr</th>
                                            <th>Mei</th>
                                            <th>Jun</th>
                                            <th>Jul</th>
                                            <th>Agt</th>
                                            <th>Sep</th>
                                            <th>Okt</th>
                                            <th>Nov</th>
                                            <th>Des</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Biaya Operasional</td>
                                            <td>200000</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Total Total Pengeluaran</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger px-4 float-right mr-3"
                            onclick="window.location.href = '{{ route('komunitas.index') }}'">KEMBALI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.komunitasku.komunitas_keuangan.popup')
@endsection
