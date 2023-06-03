@extends('dashboard.layouts.main')
@section('title', 'Tambah Iuran')
@section('content')
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Komunitasku</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('komunitas.index') }}">Komunitas</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Iuran</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Iuran</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="selectOption">nama Iuran</label>
                    <select class="form-control" id="select-iuran">
                        <option value="option1">Pilih</option>
                        <option value="option2">Iuran wajib</option>
                        <option value="option3">Iuran Sukarela</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="col-form-label">Jumlah</label>
                    <div class="mb-2">
                        <input class="form-control" name="jumlah" type="text" id="jumlah"
                            value="{{ old('jumlah') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectOption">Periode</label>
                    <select class="form-control" id="select-periode">
                        <option value="option1">Pilih</option>
                        <option value="option2">Sekali</option>
                        <option value="option3">Perminggu</option>
                        <option value="option4">Perbulan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="selectOption">Jenis</label>
                    <select class="form-control" id="select-jenis">
                        <option value="option1">Pilih</option>
                        <option value="option2">Wajib</option>
                        <option value="option3">Sukarela</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="selectOption">Penanggung Jawab</label>
                    <select class="form-control" id="select-penanggungjawab">
                        <option value="option1">Pilih</option>
                        <option value="option2">Pemilik</option>
                        <option value="option3">Penghuni</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="metode-pembayaran" class="col-form-label">Metode Pembayaran</label>
                    <div class="mb-2 ml-1">
                        <label for="m-banking" class="col-form-label">1. M-Banking</label>
                        <input class="form-control" name="m-banking" type="text" id="m-banking"
                            placeholder="Masukan Nomor rekening M-Banking">
                    </div>
                    <div class="mb-2 ml-1">
                        <label for="e-walet" class="col-form-label">2. Dana</label>
                        <input class="form-control" name="e-walet" type="text" id="e-walet"
                            placeholder="Masukan Nomor E-walet Dana Anda">
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-success px-4 float-right">
                Simpan
            </button>
            <button type="button" class="btn btn-danger mr-2 px-4 float-right">
                Batal
            </button>
        </div>
    </div>
@endsection
