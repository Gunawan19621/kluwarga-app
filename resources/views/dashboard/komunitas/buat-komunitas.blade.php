@extends('dashboard.layouts.main')
@section('title', 'Buat Komunitas')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <h4 class="text-success mt-0">Masukkan Detail Komunitasmu</h4>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <form>
                                <div class="form-group">
                                    <label for="tipe-komunitas" class="col-form-label">Tipe Komunitas</label>
                                    <select class="form-control" name="tipe-komunitas" type="text" id="tipe-komunitas"
                                        value="{{ old('tipe-komunitas') }}">
                                        <option>Pilih tipe komunitas</option>
                                        <option>Tipe 1</option>
                                        <option>Tipe 2</option>
                                        <option>Tipe 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama-perumahan" class="col-form-label">Nama Perumahan/Komunitas</label>
                                    <input class="form-control" name="nama-perumahan" type="text" id="nama-perumahan"
                                        value="{{ old('nama-perumahan') }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('image/jalan berlubang.jpg') }}" class="d-block mx-auto" alt=""
                                width="150">
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="moto-komunitas" class="col-form-label">Moto Komunitas</label>
                                <div class="">
                                    <input class="form-control" name="moto-komunitas" type="text" id="moto-komunitas"
                                        value="{{ old('moto-komunitas') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-form-label">Alamat Komunitas</label>
                                <div class="">
                                    <input class="form-control" name="alamat" type="text" id="alamat"
                                        value="{{ old('alamat') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="provinsi" class="col-form-label">Provinsi</label>
                                <select class="form-control" name="provinsi" type="text" id="provinsi"
                                    value="{{ old('kabupaten') }}">
                                    <option>Pilih Provinsi Anda</option>
                                    <option>Provinsi 1</option>
                                    <option>Provinsi 2</option>
                                    <option>Provinsi 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan" class="col-form-label">Kecamatan</label>
                                <select class="form-control" name="kecamatan" type="text" id="kecamatan"
                                    value="{{ old('kecamatan') }}">
                                    <option>Pilih Kecamatan Anda</option>
                                    <option>Kecamatan 1</option>
                                    <option>Kecamatan 2</option>
                                    <option>Kecamatan 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode-pos" class="col-form-label">Kode Pos</label>
                                <div class="">
                                    <input class="form-control" name="kode-pos" type="text" id="kode-pos"
                                        value="{{ old('kode-pos') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kabupaten" class="col-form-label">Kabupaten</label>
                                <select class="form-control" name="kabupaten" type="text" id="kabupaten"
                                    value="{{ old('kabupaten') }}">
                                    <option>Pilih Kabupaten Anda</option>
                                    <option>Kabupaten 1</option>
                                    <option>Kabupaten 2</option>
                                    <option>Kabupaten 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan/desa" class="col-form-label">Kelurahan/Desa</label>
                                <select class="form-control" name="kelurahan/desa" type="text" id="kelurahan/desa"
                                    value="{{ old('kelurahan/desa') }}">
                                    <option>Pilih elurahan/Desa Anda</option>
                                    <option>elurahan/Desa 1</option>
                                    <option>elurahan/Desa 2</option>
                                    <option>elurahan/Desa 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                                <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tabel RT, RW, Jalan, Blok --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 bg-light py-4">
                            <div class="form-group">
                                <i class="dripicons-view-list mr-2"></i>
                                <h4 class="mt-0 d-inline-block">Daftar RT, RW, Jalan, Blok</h4>
                            </div>
                        </div>
                        <div class="col-6 bg-light py-4">
                            <div class="row float-right">
                                <div class="form-group mr-2">
                                    <div class="input-group">
                                        <input type="cari" id="example-input2-group3" name="example-input2-group3"
                                            class="form-control" placeholder="Cari">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                    class="mdi mdi-filter"></i></button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" type="button">RT</button>
                                                <button class="dropdown-item" type="button">RW</button>
                                                <button class="dropdown-item" type="button">Jalan</button>
                                                <button class="dropdown-item" type="button">Blok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mr-4">
                                    <button type="Update" class="btn btn-primary" data-toggle="modal"
                                        data-target="#popupModal">+ Tambah</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 bg-white p-3">
                            <div class="form-group">
                                <table class="table table-hover mb-0 border">
                                    <thead class="thead-default">
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
                                        <tr>
                                            <td>1</td>
                                            <td>01</td>
                                            <td>03</td>
                                            <td>Jl. Satu Tiga</td>
                                            <td>A</td>
                                            <td>12A</td>
                                            <td>
                                                <a href="#" class=""><i class="fa fa-edit mr-2"
                                                        style="font-size: 20px"></i></a>
                                                <a href="#" class=""><i
                                                        class="fa fa-trash-o text-danger mr-2"
                                                        style="font-size: 20px"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="text-center">
                                    <h4>Undang Member Komunitas</h4>
                                    <p>Undang anggota kedalam komunitas dengan <br> menggunakan
                                        link/e-mail di bawah ini</p>
                                </div>
                                <div class="input-group mb-3 d-flex justify-content-center">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" id="example-input2-group1" name="example-input2-group1"
                                        class="form-control col-8" placeholder="email@gmail.com" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="input" class="btn btn-danger px-4"><i class="mdi mdi-email-open"></i>
                                        Email</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="d-flex justify-content-center text-center">
                                    <p class="col-6">Undang anggota keluargamu dengan QR dibawah ini</p>
                                </div>
                                <img src="{{ asset('image/qrcode.jpeg') }}" alt="" class="mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>

    <!-- Modal Tambah Alamat-->
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Tambah Alamat Lengkap</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="rt" class="col-form-label">RT</label>
                        <div class="">
                            <input class="form-control" name="rt" type="text" id="rt"
                                value="{{ old('rt') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rw" class="col-form-label">RW</label>
                        <div class="">
                            <input class="form-control" name="rw" type="text" id="rw"
                                value="{{ old('rw') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jalan" class="col-form-label">Jalan</label>
                        <div class="">
                            <input class="form-control" name="jalan" type="text" id="jalan"
                                value="{{ old('jalan') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blok" class="col-form-label">Blok</label>
                        <div class="">
                            <input class="form-control" name="blok" type="text" id="blok"
                                value="{{ old('blok') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kode" class="col-form-label">Kode</label>
                        <div class="">
                            <input class="form-control" name="kode" type="text" id="kode"
                                value="{{ old('kode') }}">
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
    {{-- End Modal Tambah Alamat --}}
@endsection
