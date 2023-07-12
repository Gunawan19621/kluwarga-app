@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Informasi')
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
                        <li class="breadcrumb-item active">Pengaturan Informasi</li>
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
                                <div class="row">
                                    <div class="col-10">
                                        <h3 class="mt-0 d-inline-block">Daftar Informasi</h3>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a href="{{ route('informasi.create') }}" class="btn btn-primary">+Tambah</a>
                                    </div>
                                </div>
                                <hr class="border">
                                <table id="tableWarga" class="table datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px;" class="text-center">No</th>
                                            <th style="width: 200px;">Judul Informasi</th>
                                            <th>Descripsi singkat</th>
                                            <th class="text-center" style="width: 125px;">Aksi</th>
                                        </tr>
                                    </thead>


                                    {{-- <tbody>
                                        @foreach ($rumah as $datarumah)
                                            <tr>
                                                <td>{{ $datarumah['id'] }}</td>
                                                <td>{{ $datarumah['rt'] }}</td>
                                                <td>{{ $datarumah['rw'] }}</td>
                                                <td>{{ $datarumah['jalan'] }}</td>
                                                <td>{{ $datarumah['blok'] }}</td>
                                                <td>{{ $datarumah['kode_rumah'] }}</td>
                                            </tr>
                                        @endforeach
                                        <!-- Tambahkan baris data sesuai kebutuhan -->
                                    </tbody> --}}


                                    <tbody>
                                        @forelse($informasi as $data)
                                            <tr>
                                                <td>{{ $data['id'] }}</td>
                                                <td>{{ $data['judul_informasi'] }}</td>
                                                <td>{{ Str::limit($data['deskripsi_singkat'], 150) }}</td>
                                                {{-- <td>{{ $data['deskripsi_singkat'] }}</td> --}}
                                                <td class="text-center">
                                                    <a href="{{ route('informasi.show', $data['id']) }}" class="">
                                                        <i class="fa fa-eye text-danger mr-2" style="font-size: 20px"></i>
                                                    </a>
                                                    <a href="#" class="">
                                                        <i class="fa fa-trash text-danger mr-2" id="sa-params"
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
                        </div>

                        <h3 class="ml-2">Informasi</h3>
                        <hr class="border">
                        <div class="row">
                            @forelse ($informasi as $detailInformasi)
                                <div class="col-lg-4">
                                    <div class="card card-body">
                                        <h4 class="card-title mt-0">{{ $detailInformasi['judul_informasi'] }}</h4>
                                        <p class="card-text text-muted font-13">
                                            {{ Str::limit($detailInformasi['deskripsi_singkat'], 150) }}</p>
                                        <a href="{{ route('informasi.show', $detailInformasi['id']) }}"
                                            class="btn btn-primary">Selengkapnya</a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <button type="submit" class="btn btn-danger px-4 float-right mr-3"
                            onclick="window.location.href = '{{ route('komunitas.index') }}'">KEMBALI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
