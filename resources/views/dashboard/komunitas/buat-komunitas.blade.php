@extends('dashboard.layouts.main')
@section('title', 'Buat Komunitas')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <h4 class="text-success mt-0">Masukkan Detail Komunitasmu jjj</h4>
                    <hr>
                    <form action="{{ route('buatkomunitas.actioncreate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="nama_komunitas" class="col-form-label">Nama Perumahan/Komunitas</label>
                                    <input class="form-control" name="nama_komunitas" type="text" id="nama_komunitas"
                                        value="{{ old('nama_komunitas') }}">
                                    @error('nama_komunitas')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="moto_komunitas" class="col-form-label">Moto Komunitas</label>
                                    <input class="form-control" name="moto_komunitas" type="text" id="moto_komunitas"
                                        value="{{ old('moto_komunitas') }}">
                                    @error('moto_komunitas')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <!-- foto Komunitas -->
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="logo_komunitas" class="col-form-label">Foto Komunitas</label>
                                    <input class="form-control-file" name="logo_komunitas" type="file"
                                        id="logo_komunitas">
                                    @error('logo_komunitas')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- End Foto Komunitas -->

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamat_komunitas" class="col-form-label">Alamat Komunitas</label>
                                    <input class="form-control" name="alamat_komunitas" type="text" id="alamat_komunitas"
                                        value="{{ old('alamat_komunitas') }}">
                                    @error('alamat_komunitas')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="provinsi" class="col-form-label">Provinsi</label>
                                    <select class="form-control" name="provinsi" type="text" id="provinsi"
                                        value="{{ old('provinsi') }}">
                                        <option>Pilih Provinsi Anda</option>
                                        <option value="jawa barat">Jawab Barat</option>
                                        <option>Provinsi 2</option>
                                        <option>Provinsi 3</option>
                                    </select>
                                    @error('provinsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan" class="col-form-label">Kecamatan</label>
                                    <select class="form-control" name="kecamatan" type="text" id="kecamatan"
                                        value="{{ old('kecamatan') }}">
                                        <option>Pilih Kecamatan Anda</option>
                                        <option value="balongan">Balongan</option>
                                        <option>Kecamatan 2</option>
                                        <option>Kecamatan 3</option>
                                    </select>
                                    @error('kecamatan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos" class="col-form-label">Kode Pos</label>
                                    <input class="form-control" name="kode_pos" type="text" id="kode_pos"
                                        value="{{ old('kode_pos') }}" maxlength="5" minlength="5"
                                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                    @error('kode_pos')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="kabupaten" class="col-form-label">Kabupaten</label>
                                    <select class="form-control" name="kabupaten" type="text" id="kabupaten"
                                        value="{{ old('kabupaten') }}">
                                        <option>Pilih Kabupaten Anda</option>
                                        <option value="indramayu">Indramayu</option>
                                        <option>Kabupaten 2</option>
                                        <option>Kabupaten 3</option>
                                    </select>
                                    @error('kabupaten')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="desa" class="col-form-label">Kelurahan/Desa</label>
                                    <select class="form-control" name="desa" type="text" id="desa"
                                        value="{{ old('desa') }}">
                                        <option>Pilih elurahan/Desa Anda</option>
                                        <option value="gelarmandala">Gelarmendala</option>
                                        <option>elurahan/Desa 2</option>
                                        <option>elurahan/Desa 3</option>
                                    </select>
                                    @error('desa')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                                    <button type="button" class="btn btn-danger px-4 float-right mr-3"
                                        onclick="window.location.reload()">BATAL</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Tabel RT, RW, Jalan, Blok --}}
                {{-- <div class="card-body">
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
                                                <a href="#" data-toggle="modal" data-target="#editDataModal"><i
                                                        class="fa fa-edit mr-2" style="font-size: 20px"></i></a>
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
                </div> --}}
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>

    {{-- <!-- Modal Edit Data Rumah-->
    <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="modal-title text-success">Edit Alamat Lengkap</h4>
                </div>
                <div class="modal-body m-2">
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
                    <div class="form-group mb-4">
                        <label for="kode" class="col-form-label">Kode</label>
                        <div class="">
                            <input class="form-control" name="kode" type="text" id="kode"
                                value="{{ old('kode') }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-3 float-right">SIMPAN</button>
                    <button type="button" class="btn btn-danger waves-effect float-right mr-2 px-4"
                        data-dismiss="modal">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit Data Rumah --> --}}

    {{-- <!-- Modal Tambah Data Rumah-->
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="modal-title text-success">Tambah Alamat Lengkap</h4>
                </div>
                <div class="modal-body m-2">
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
                    <div class="form-group mb-4">
                        <label for="kode" class="col-form-label">Kode</label>
                        <div class="">
                            <input class="form-control" name="kode" type="text" id="kode"
                                value="{{ old('kode') }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-3 float-right">SIMPAN</button>
                    <button type="button" class="btn btn-danger waves-effect float-right mr-2 px-4"
                        data-dismiss="modal">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit Data Rumah --> --}}
@endsection
