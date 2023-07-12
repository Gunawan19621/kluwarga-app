@extends('dashboard.layouts.main')
@section('title', 'Edit Data Warga')
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
                        <li class="breadcrumb-item active">Edit data warga</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Data Warga</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="{{ route('rumah.update', $rumah['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group mb-2">
                            <label for="kode_rumah" class="col-form-label" style="font-size: 14px;">Kode Rumah</label>
                            <div class="mb-2">
                                <input class="form-control" name="kode_rumah" type="text" id="kode-rumah"
                                    value="{{ old('kode_rumah', $rumah->kode_rumah) }}" readonly>
                            </div>

                            <label for="pengguna_id" class="col-form-label" style="font-size: 14px;">Nama</label>
                            <div class="mb-2">
                                <select class="form-control" name="pengguna_id" type="text" id="pengguna_id">
                                    @foreach ($pengguna as $p)
                                        @if ($rumah->pengguna['id'] === $p->id)
                                            <option selected value="{{ $p['id'] }}">
                                                {{ $p->user['name'] }}
                                            </option>
                                        @else
                                            <option selected value="{{ $p['id'] }}">
                                                {{ $p->user['name'] }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <label for="status_hunian">Status Hunian</label>
                            <div class="col-3 row">
                                <div class="col-6 custom-control custom-radio my-2">
                                    <input type="radio" id="customRadio1" name="status_hunian" value="pemilik"
                                        class="custom-control-input" @if ($rumah['status_hunian'] === 'pemilik') checked @endif>
                                    <label class="custom-control-label" for="customRadio1"
                                        style="font-size: 14px;">Pemilik</label>
                                </div>
                                <div class="col-6 custom-control custom-radio my-2">
                                    <input type="radio" id="customRadio2" name="status_hunian" value="penghuni"
                                        class="custom-control-input" @if ($rumah['status_hunian'] === 'penghuni') checked @endif>
                                    <label class="custom-control-label" for="customRadio2"
                                        style="font-size: 14px;">Penghuni</label>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="jabatan" class="col-form-label">Jabatan</label>
                                <select class="form-control" name="jabatan" type="text" id="jabatan">
                                    <option @if ($rumah->pengguna['jabatan'] === 'warga') selected @endif value="warga">Warga</option>
                                    <option @if ($rumah->pengguna['jabatan'] === 'rt') selected @endif value="rt">RT</option>
                                    <option @if ($rumah->pengguna['jabatan'] === 'rw') selected @endif value="rw">RW</option>
                                    <option @if ($rumah->pengguna['jabatan'] === 'sekretaris') selected @endif value="sekretaris">Sekretaris
                                    </option>
                                    <option @if ($rumah->pengguna['jabatan'] === 'bendahara') selected @endif value="bendahara">Bendahara
                                    </option>
                                </select>
                            </div>
                            <a href="javascript:void(0);" class="text-success" data-toggle="modal"
                                data-target="#datadetailModal"><i>Data detail</i></a>
                        </div>
                        <button type="submit" class="btn btn-success px-3 float-right ">
                            Simpan
                        </button>
                        <button type="button" class="btn btn-danger px-4 float-right mr-2"
                            onclick="window.location.href='{{ route('wargaKomunitas.indexWarga') }}'">
                            Batal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.komunitasku.komunitas_warga.popup')
@endsection
