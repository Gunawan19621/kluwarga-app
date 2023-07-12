@extends('dashboard.layouts.main')
@section('title', 'Detail Surat')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Lainnya</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('surat.index') }}">Surat</a>
                        </li>
                        <li class="breadcrumb-item active">Detail Surat</li>
                    </ol>
                </div>
                <h4 class="page-title">Detail Surat</h4>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul-pengaduan" class="col-form-label">Ubah Status Surat</label>
                        <div class="button-items">
                            <button type="button" class="btn btn-outline-success"
                                onclick="toggleActive(this)">Selesai</button>
                            <button type="button" class="btn btn-outline-warning" onclick="toggleActive(this)">Menunggu
                                Persetujuan</button>
                            <button type="button" class="btn btn-outline-danger"
                                onclick="toggleActive(this)">Ditolak</button>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="nama-pengirim" class="col-form-label">Nama Pengirim</label>
                            <h6>Dinda</h6>

                            <label for="status-pengajuan" class="col-form-label">Status pengajuan</label>
                            <div>
                                <h6 class="text-dark ml-1">Belum ada Balasan</h6>
                            </div>

                            <label for="lokasi-kejadian" class="col-form-label">Jenis Surat</label>
                            <h6>Surat Izin Bangunan</h6>

                            <label for="waktu-kejadian" class="col-form-label">Tanggal Pembuatan Surat</label>
                            <h6>15/08/2023</h6>

                            <div class="form-group">
                                <label for="penyebab-kejadian" class="col-form-label">Keterangan Surat</label>
                                <h6 class="mb-3">Untuk membangun dan merenovasi bangunnan secara ilegal</h6>
                            </div>


                        </div>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h5>Dokumen Pengajuan Surat</h5>
                        <div class="row">
                            <div class="col-lg-2 col-md-4">
                                <div class="card bg-transparent shadow-none">
                                    <i class="fa fa-file-text-o fa-4x text-primary text-center"></i>
                                    <div class="py-2 text-center">
                                        <a href="{{ asset('path_to_document_file.pdf') }}" class="text-muted font-600"
                                            download>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi-pengaduan" class="col-form-label">Tanggapan Surat</label>
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
