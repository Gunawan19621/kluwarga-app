@extends('dashboard.layouts.main')
@section('title', 'Profil Pengguna')
@section('content')
    <div class="card bg-transparent shadow-none ">
        <div class="card-body">
            <h4 class="text-success mt-0">Profil Pengguna</h4>
            <div class="row">
                <div class="col-8">
                    <form>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama*</label>
                            <div class="">
                                <input class="form-control" type="text" id="name" value="{{ auth()->user()->name }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Alamat Email*</label>
                            <div class="">
                                <input class="form-control" type="email" id="email"
                                    value="{{ auth()->user()->email }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">No. HP*</label>
                            <div class="">
                                <input class="form-control" type="tel" id="phone"
                                    value="{{ auth()->user()->phone }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik" class="col-form-label">NIK*</label>
                            <div class="">
                                <input class="form-control" name="nik" type="text" id="nik"
                                    value="{{ old('nik') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                                <input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir"
                                    value="{{ old('tempat-lahir') }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" value="{{ old('tanggal_lahir') }}"
                                    id="tanggal_lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                            <div class="">
                                <select class="form-control" name="jenis_kelamin" type="text" id="jenis_kelamin"
                                    value="{{ old('jenis_kelamin') }}">
                                    <option>Jenis Kelamin</option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-form-label">Agama</label>
                            <div class="">
                                <input class="form-control" name="agama" type="text" id="agama"
                                    value="{{ old('agama') }}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="offset-1 col-3 text-center">
                    <h4>Foto Profil</h4>
                    <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt=""
                        class="rounded-circle img-thumbnail thumb-xl">
                    <p class="text-muted font-12">Silahkan untuk menggunakan foto profil dengan format .png .jpg .tiff</p>
                    <div class="button-items">
                        <button type="button" class="btn btn-sm col-4 btn-primary" disabled="">Edit</button>
                        <button type="button" class="btn btn-sm col-4 btn-secondary" disabled="">Hapus</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-8">
                <h4 class="">Alamat Lengkap</h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="alamat" class="col-form-label">Alamat</label>
                        <input class="form-control" name="alamat" type="text" id="alamat"
                            value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group col-3">
                        <label for="rt" class="col-form-label">RT</label>
                        <input class="form-control" name="rt" type="text" id="rt"
                            value="{{ old('rt') }}">
                    </div>
                    <div class="form-group col-3">
                        <label for="rw" class="col-form-label">RW</label>
                        <input class="form-control" name="rw" type="text" id="rw"
                            value="{{ old('rw') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kelurahan/desa" class="col-form-label">Kelurahan/Desa</label>
                    <div class="">
                        <select class="form-control" name="kelurahan/desa" type="text" id="kelurahan/desa"
                            value="{{ old('kelurahan/desa') }}">
                            <option>Pilih Kelurahan/Desa</option>
                            <option>Desa 1</option>
                            <option>Desa 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kecamatan" class="col-form-label">Kecamatan</label>
                    <div class="">
                        <select class="form-control" name="kecamatan" type="text" id="kecamatan"
                            value="{{ old('kecamatan') }}">
                            <option>Pilih Kecamatan</option>
                            <option>kecamatan 1</option>
                            <option>kecamatan 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kota/kabupaten" class="col-form-label">Kota/Kabupaten</label>
                    <div class="">
                        <select class="form-control" name="kota/kabupaten" type="text" id="kota/kabupaten"
                            value="{{ old('kota/kabupaten') }}">
                            <option>Pilih Kota/Kabupaten</option>
                            <option>Kota/Kabupaten 1</option>
                            <option>Kota/Kabupaten 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="provinsi" class="col-form-label">Provinsi</label>
                    <div class="">
                        <select class="form-control" name="provinsi" type="text" id="provinsi"
                            value="{{ old('provinsi') }}">
                            <option>Pilih provinsi</option>
                            <option>provinsi 1</option>
                            <option>provinsi 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode_pos" class="col-form-label">Kode Pos</label>
                    <div class="">
                        <input class="form-control" name="kode_pos" type="text" id="kode_pos"
                            value="{{ old('kode_pos') }}">
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-8">
                <H4>Kontak</H4>
                <div class="form-group">
                    <label for="email" class="col-form-label">Alamat Email*</label>
                    <div class="">
                        <input class="form-control" type="email" id="email" value="{{ auth()->user()->email }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-form-label">Nomor Handphone</label>
                    <div class="">
                        <input class="form-control" type="tel" id="phone" value="{{ auth()->user()->phone }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-form-label">Nomor Telepon Rumah</label>
                    <div class="">
                        <input class="form-control" type="tel" id="phone" value="{{ auth()->user()->phone }}"
                            readonly>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
            <button type="Update" class="btn btn-primary px-4 float-right mr-3">EDIT PASSWORD</button>
        </div>
    </div>
@endsection
