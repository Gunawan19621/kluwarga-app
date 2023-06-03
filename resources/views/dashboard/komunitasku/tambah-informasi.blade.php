@extends('dashboard.layouts.main')
@section('title', 'Tambah Informasi')
@section('content')
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Komunitasku</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('komunitas.index') }}">Komunitas</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Informasi</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Informasi</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="judul-informasi" class="col-form-label">Judul Informasi</label>
                <div class="mb-2">
                    <input class="form-control" name="judul-informasi" type="text" id="judul-informasi"
                        placeholder="Isi judul informasi">
                </div>
                <label for="deskripsi-singkat" class="col-form-label">Deskripsi Singkat</label>
                <div class="mb-2">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                        placeholder="Isi deskripsi singkat informasi"></textarea>
                </div>
            </div>
            <div class="summernote">
                <h5>Hello Summernote</h5>
                <ul>
                    <li>Select a text to reveal the toolbar.</li>
                    <li>Edit rich document on-the-fly, so elastic!</li>
                </ul>
                <p>End of air-mode area</p>
            </div>
            <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
            <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
        </div>
    </div>
@endsection
