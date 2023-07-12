@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Rumah')
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
                        <li class="breadcrumb-item active">Pengaturan Rumah</li>
                    </ol>
                </div>
                <br>
                {{-- <h4 class="page-title">Pengaturan Komunitas</h4> --}}
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
                                <div class="row">
                                    <div class="form-group col-6">
                                        <i class="dripicons-view-list mr-2"></i>
                                        <h4 class="mt-4 d-inline-block">Daftar Rumah</h4>
                                    </div>
                                    <div class="form-group col-6 text-right mt-3">
                                        <button type="Update" class="btn btn-primary" data-toggle="modal"
                                            data-target="#popupModal">+Tambah</button>
                                    </div>
                                </div>
                                <hr class="border">
                                <table id="tableRumah" class="table dataTables_wrapper dt-bootstrap4 no-footer">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>Jalan</th>
                                            <th>Blok</th>
                                            <th>Kode Rumah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rumah as $data)
                                            <tr>
                                                <td>{{ $data['id'] }}</td>
                                                <td>{{ $data['rt'] }}</td>
                                                <td>{{ $data['rw'] }}</td>
                                                <td>{{ $data['jalan'] }}</td>
                                                <td>{{ $data['blok'] }}</td>
                                                <td>{{ $data['kode_rumah'] }}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#editDataModal{{ $data['id'] }}">
                                                        <i class="fa fa-edit mr-2" style="font-size: 20px"></i>
                                                    </a>
                                                    <a href="#" class="delete-data" data-id="{{ $data->id }}">
                                                        <i class="fa fa-trash-o text-danger mr-2" id="sa-params"
                                                            style="font-size: 20px"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        <!-- Tambahkan baris data sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- Undang Bergabung komunitas -->
                        <div class="row mb-4">
                            <div class="col-5">
                                <h4 class="text-center">Undang Member Komunitas</h4>
                                <p class="text-center">Undang anggota kedalam komunitas dengan <br>menggunakan link/e-mail
                                    di bawah ini</p>
                                <div class="mx-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" id="example-input2-group1" name="example-input2-group1"
                                            class="form-control" placeholder="jbaKSasxsxjncaa">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="input" class="btn btn-info px-4">
                                            <i class="mdi mdi-email-open mr-1"></i>Email
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h5 class="text-center">Atau</h5>
                            </div>
                            <div class="col-5">
                                <p class="text-center">Undang anggota keluargamu dengan <br> QR dibawah ini</p>
                                <img src="{{ asset('image/qrcode.jpeg') }}" alt="" class="mx-auto d-block">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger px-4 float-right mr-2"
                            onclick="window.location.href = '{{ route('komunitas.index') }}'">KEMBALI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.komunitasku.komunitas_rumah.popup')
@endsection
