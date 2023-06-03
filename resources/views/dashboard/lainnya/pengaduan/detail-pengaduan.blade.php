@extends('dashboard.layouts.main')
@section('title', 'Detail Pengaduan')
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
                        <li class="breadcrumb-item active">Detail Pengaduan</li>
                    </ol>
                </div>
                <h4 class="page-title">Detail Pengaduan</h4>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul-pengaduan" class="col-form-label">Ubah Status Pengaduan</label>
                        <div class="button-items">
                            <button type="button" class="btn btn-outline-success"
                                onclick="toggleActive(this)">Selesai</button>
                            <button type="button" class="btn btn-outline-warning" onclick="toggleActive(this)">Dalam
                                Proses</button>
                            <button type="button" class="btn btn-outline-danger"
                                onclick="toggleActive(this)">Ditolak</button>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="nama-pengirim" class="col-form-label">Nama Pengirim</label>
                            <h6>Dinda</h6>

                            <label for="status-pengaduan" class="col-form-label">Status Pengaduan</label>
                            <div>
                                <h6 class="text-dark ml-1">Belum ada Balasan</h6>
                            </div>

                            <label for="judul-pengaduan" class="col-form-label">Judul Pengaduan</label>
                            <h6>Jembatan Roboh</h6>

                            <label for="lokasi-kejadian" class="col-form-label">Lokasi Kejadian</label>
                            <h6>Jalan Kucing</h6>

                            <label for="waktu-kejadian" class="col-form-label">Waktu Kejadian</label>
                            <h6>10.00 / 20-02-2022</h6>

                            <label for="penyebab-kejadian" class="col-form-label">Penyebab Kejadian</label>
                            <h6>Jembatan lama</h6>

                            <label for="isi-pengaduan" class="col-form-label">Isi Pengaduan</label>
                            <h6>Lorem ipsum is placeholder text commonly used in the graphic, print, and <br> publishing
                                industries for previewing layouts and visual mockups</h6>

                        </div>
                        <div class="form-group">
                            <label for="imageInput">Foto Lokasi Kejadian</label>
                            <div>
                                <img src="{{ asset('image/jalan berlubang.jpg') }}" alt="Jalan Rusak" widht="150"
                                    height="150">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="isi-pengaduan" class="col-form-label">Tanggapan Pengaduan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Isi tanggapan anda"></textarea>
                    </div>
                    <button type="button" class="btn btn-success px-4 float-right">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleActive(button) {
            button.classList.toggle("active");
        }
    </script>
@endsection
