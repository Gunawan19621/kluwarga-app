@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Profil')
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
                        <li class="breadcrumb-item active">Pengaturan Profil Komunitas</li>
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
                                style="background: linear-gradient(to top, {{ $getKomunitas->warna_skunder }},{{ $getKomunitas->warna_primer }})">
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

                        <div class="card bg-transparent shadow-none">
                            <div class="card-body">
                                <form action="{{ route('komunitas.update', $getKomunitas['id']) }}" id="form-update-akun"
                                    method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="mb-4">
                                        <h4 class="text-success">Profil Komunitas</h4>
                                        <hr class="border">
                                        <div class="form-group">
                                            <label for="nama_komunitas" class="col-form-label" style="font-size: 14px;">Nama
                                                Komunitas</label>
                                            <input class="form-control mb-2" name="nama_komunitas" type="text"
                                                id="nama_komunitas"
                                                value="{{ old('nama_komunitas', $getKomunitas['nama_komunitas']) }}">
                                            @error('nama_komunitas')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            <label for="moto_komunitas" class="col-form-label" style="font-size: 14px;">Moto
                                                Komunitas</label>
                                            <input class="form-control" name="moto_komunitas" type="text"
                                                id="moto_komunitas"
                                                value="{{ old('moto_komunitas', $getKomunitas['moto_komunitas']) }}">
                                            @error('moto_komunitas')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <h4 class="text-success">Domisili Komunitas</h4>
                                    <hr class="border">
                                    <div class="form-group">
                                        <label for="provinsi" class="col-form-label"
                                            style="font-size: 14px;">Provinsi</label>
                                        <input class="form-control mb-2" name="provinsi" type="text" id="provinsi"
                                            value="{{ old('provinsi', $getKomunitas['provinsi']) }}">
                                        @error('provinsi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <label for="kabupaten" class="col-form-label"
                                            style="font-size: 14px;">Kota/Kabupaten</label>
                                        <input class="form-control mb-2" name="kabupaten" type="text" id="kabupaten"
                                            value="{{ old('kabupaten', $getKomunitas['kabupaten']) }}">
                                        @error('kabupaten')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <label for="kecamatan" class="col-form-label"
                                            style="font-size: 14px;">Kecamatan</label>
                                        <input class="form-control mb-2" name="kecamatan" type="text" id="kecamatan"
                                            value="{{ old('kecamatan', $getKomunitas['kecamatan']) }}">
                                        @error('kecamatan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <label for="desa" class="col-form-label"
                                            style="font-size: 14px;">Kelurahan/Desa</label>
                                        <input class="form-control mb-2" name="desa" type="text" id="desa"
                                            value="{{ old('desa', $getKomunitas['desa']) }}">
                                        @error('desa')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                        <label for="kode_pos" class="col-form-label" style="font-size: 14px;">Kode
                                            Pos</label>
                                        <input class="form-control mb-3" name="kode_pos" type="text" id="kode_pos"
                                            value="{{ old('kode_pos', $getKomunitas['kode_pos']) }}"
                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                        @error('kode_pos')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                                    <button type="button" class="btn btn-danger px-4 float-right mr-2"
                                        onclick="window.location.href = '{{ route('komunitas.index') }}'">KEMBALI</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
