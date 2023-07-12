@extends('dashboard.layouts.main')
@section('title', 'Detail Konfirmasi Iuran')
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('iuranKomunitas.index') }}">Pengaturan Iuran</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('iuranKomunitas.konfirmasiIuran') }}">Konfirmasi Iuran</a>
                        </li>
                        <li class="breadcrumb-item active">Detail Iuran</li>
                    </ol>
                </div>
                <h4 class="page-title">Detail Konfirmasi Iuran</h4>
            </div>
        </div>


        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul-pengaduan" class="col-form-label" style="font-size: 14px;">Ubah Status
                            Surat</label>
                        <div class="button-items">
                            <button type="button" class="btn btn-outline-success"
                                onclick="toggleActive(this)">Lunas</button>
                            <button type="button" class="btn btn-outline-warning" onclick="toggleActive(this)">Menunggu
                                konfirmasi</button>
                            <button type="button" class="btn btn-outline-danger" onclick="toggleActive(this)">Belum
                                lunas</button>
                        </div>
                        <hr>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tanggal" class="col-form-label" style="font-size: 14px;">Tanggal</label>
                                    <h5 class="mb-3">19/6/2023</h5>

                                    <label for="kode-rumah" class="col-form-label" style="font-size: 14px;">Kode
                                        Rumah</label>
                                    <h5 class="mb-3">12A</h5>

                                    <label for="nama" class="col-form-label" style="font-size: 14px;">Nama</label>
                                    <h5 class="mb-3">Gunawan</h5>

                                    <label for="deskripsi" class="col-form-label" style="font-size: 14px;">Deskripsi</label>
                                    <h5 class="mb-3">Iuran Awal</h5>

                                    <label for="jumlah-bayaran" class="col-form-label" style="font-size: 14px;">Jumlah
                                        Bayaran</label>
                                    <h5 class="mb-3">Rp.500.000</h5>

                                    <label for="status-konfirmasi" class="col-form-label" style="font-size: 14px;">Status
                                        Konfirmasi</label>
                                    <div>
                                        <span class="badge badge-boxed badge-warning">Menunggu konfirmasi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5>Informasi Pembayaran</h5>
                                <hr>
                                <label for="metode-pembayaran" class="col-form-label">Metode Pembayaran</label>
                                <h5 class="mb-3">Mobile Banking</h5>

                                <label for="status-konfirmasi" class="col-form-label">Jumlah Transfer</label>
                                <h5 class="mb-3">Rp.500.000</h5>

                                <label for="tanggal-pembayaran" class="col-form-label">Tanggal Pembayaran</label>
                                <h5 class="mb-3">19/6/2023</h5>

                                <label for="keterangan" class="col-form-label">keterangan</label>
                                <h5 class="mb-3">BCA a.n Gunawan untuk iuran awal juni - agustus</h5>
                                <hr>
                                <h5 class="text-center">Bukti Pembayaran</h5>
                                <div class="text-center mb-2">
                                    <img src="{{ asset('assets/images/bukti pembayaran.jpg') }}" width="170px"
                                        height="220px" alt="">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-secondary">
                                        <i class="fa fa-download"></i> Unduh Gambar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="tanggapan-iuran" class="col-form-label">Tanggapan pembayaran iuran</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Isi tanggapan pembayaran"></textarea>
                    </div>
                    <button type="button" class="btn btn-success col-1 float-right">
                        SIMPAN
                    </button>
                    <button type="submit" class="btn btn-danger col-1 float-right mr-2"
                        onclick="window.location.href = '{{ route('iuranKomunitas.konfirmasiIuran') }}'">BATAL</button>
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
