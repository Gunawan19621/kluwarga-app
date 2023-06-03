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
                    <form class="mb-3">
                        <div class="form-group">
                            <label for="kode-rumah" class="col-form-label">Kode Rumah</label>
                            <div class="mb-2">
                                <input class="form-control" name="kode-rumah" type="text" id="kode-rumah" value="12A">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <div class="mb-2">
                                <input class="form-control" name="nama" type="text" id="nama" value="Bambang">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="radio my-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radio1" name="radion1" class="custom-control-input"
                                            checked="checked" />
                                        <label class="custom-control-label">Pemilik</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="radio my-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="radio1" name="radion1" class="custom-control-input" />
                                        <label class="custom-control-label">Penghuni</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-form-label">Jabatan</label>
                            <select class="form-control">
                                <option>Pilih jabatan</option>
                                <option>Warga</option>
                                <option>Ketua RT</option>
                                <option>Ketua RW</option>
                                <option>Sekretaris</option>
                                <option>Bendahatra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blok" class="col-form-label">Blok</label>
                            <div class="mb-2">
                                <input class="form-control" name="blok" type="text" id="blok" value="Blok satu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode-rumah" class="col-form-label">Kode Rumah</label>
                            <div class="mb-2">
                                <input class="form-control" name="kode-rumah" type="kode-rumah" id="kode-rumah"
                                    value="12A">
                            </div>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="text-success" data-toggle="modal"
                                data-target="#datadetailModal">Data
                                detail</a>
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


    <!-- Modal Rumah > Tambah data-->
    <div class="modal fade" id="datadetailModal" tabindex="-1" role="dialog" aria-labelledby="datadetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Data Detail Warga</h4>
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

                        <label for="rw" class="col-form-label">RW</label>
                        <div class="">
                            <input class="form-control" name="rw" type="text" id="rw"
                                value="{{ old('rw') }}">
                        </div>

                        <label for="jalan" class="col-form-label">Jalan</label>
                        <div class="">
                            <input class="form-control" name="jalan" type="text" id="jalan"
                                value="{{ old('jalan') }}">
                        </div>

                        <label for="blok" class="col-form-label">Blok</label>
                        <div class="">
                            <input class="form-control" name="blok" type="text" id="blok"
                                value="{{ old('blok') }}">
                        </div>

                        <label for="kode-rumah" class="col-form-label">Kode Rumah</label>
                        <div class="">
                            <input class="form-control" name="kode-rumah" type="text" id="kode-rumah"
                                value="{{ old('kode-rumah') }}">
                        </div>

                        <label for="nomor-rumah" class="col-form-label">Nomor Rumah</label>
                        <div class="">
                            <input class="form-control" name="nomor-rumah" type="text" id="nomor-rumah"
                                value="{{ old('nomor-rumah') }}">
                        </div>
                    </div>

                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                    <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Rumah > Tambah data --}}
@endsection
