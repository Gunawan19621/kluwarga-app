@extends('dashboard.layouts.main')
@section('title', 'Form Pengaduan')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Lainnya</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('pengaduan.index') }}">Pengaduan</a>
                        </li>
                        <li class="breadcrumb-item active">Form Pengaduan</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Pengaduan</h4>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-pengirim" class="col-form-label">Nama Pengirim</label>
                            <div class="">
                                <input class="form-control" name="nama-pengirim" type="text" id="nama-pengirim"
                                    placeholder="Nama Pengirim">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lokasi-kejadian" class="col-form-label">Lokasi Kejadian</label>
                            <div class="">
                                <input class="form-control" name="lokasi-kejadian" type="text" id="lokasi-kejadian"
                                    placeholder="Lokasi Kejadian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="waktu-kejadian" class="col-form-label">Waktu Kejadian</label>
                            <input class="form-control" type="datetime-local" id="waktu-kejadian" />
                        </div>
                        <div class="form-group">
                            <label for="penyebab-kejadian" class="col-form-label">Penyebab Kejadian</label>
                            <div class="">
                                <input class="form-control" name="penyebab-kejadian" type="text" id="penyebab-kejadian"
                                    placeholder="Penyebab Kejadian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul-pengaduan" class="col-form-label">Judul Pengaduan</label>
                            <div class="">
                                <input class="form-control" name="judul-pengaduan" type="text" id="judul-pengaduan"
                                    placeholder="Judul Pengaduan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi-pengaduan" class="col-form-label">Isi Pengaduan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Isi Pengaduan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imageInput">Pilih Gambar</label>
                            <input type="file" class="form-control-file" id="imageInput" name="imageInput"
                                accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary px-4">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
