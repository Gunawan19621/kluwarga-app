@extends('dashboard.layouts.main')
@section('title', 'Buat Surat')
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
                        <li class="breadcrumb-item active">Pengajuan Surat</li>
                    </ol>
                </div>
                <h4 class="page-title">Pengajuan Surat</h4>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="mb-3">
                        <div class="form-group">
                            <label for="jenis-surat" class="col-form-label">Jenis Surat</label>
                            <div class="mb-2">
                                <input class="form-control" name="jenis-surat" readonly type="text" id="jenis-surat"
                                    value="Surat Keterangan Domisili">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="nama-lengkap" class="col-form-label">Nama Lengkap</label>
                            <div class="mb-2">
                                <input class="form-control" name="nama-lengkap" type="text" id="nama-lengkap"
                                    placeholder="Isi dengan nama lengkap">
                            </div>

                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                            <div class="mb-2">
                                <select class="form-control" name="jenis_kelamin" type="text" id="jenis_kelamin"
                                    value="{{ old('jenis_kelamin') }}">
                                    <option>Jenis Kelamin</option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                                    <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir"
                                        value="{{ old('tempat-lahir') }}">
                                </div>
                                <div class="col-6">
                                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" value="{{ old('tanggal_lahir') }}"
                                        id="tanggal_lahir">
                                </div>
                            </div>

                            <label for="status-perkawinan" class="col-form-label">Status Perkawinan</label>
                            <div class="mb-2">
                                <input class="form-control" name="status-perkawinan" type="text" id="status-perkawinan"
                                    placeholder="isi status perkawinan">
                            </div>

                            <label for="nonik-passport-kitas" class="col-form-label">Nomor NIK/Passport/KITAS</label>
                            <div class="mb-2">
                                <input class="form-control" name="nonik-passport-kitas" type="text"
                                    id="nonik-passport-kitas" placeholder="isi data diri anda">
                            </div>

                            <label for="keperluan" class="col-form-label">Keperluan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                placeholder="Keperluan membuat surat tersebut"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-success px-3 float-right ">
                        Simpan
                    </button>
                    <button type="button" class="btn btn-danger px-4 float-right mr-2">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
