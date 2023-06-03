@extends('dashboard.layouts.main')
@section('title', 'Detail Iuran')
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
                        <li class="breadcrumb-item active">Bayar iuran</li>
                    </ol>
                </div>
                <h4 class="page-title">Bayar Iuran</h4>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="jenis-iuran" class="col-form-label">Jenis Iuran</label>
                            <div class="">
                                <input class="form-control" name="jenis-iuran" type="text" readonly id="jenis-iuran"
                                    placeholder="Iuran Awal">
                            </div>

                            <label for="metode-pembayaran" class="col-form-label">Metode Pembayaran</label>
                            <select class="form-control mb-2" name="metode-pembayaran" type="text" id="metode-pembayaran"
                                value="{{ old('metode-pembayaran') }}">
                                <option>Pilih Metode Pemabayarn</option>
                                <option>m-Banking</option>
                                <option>Ewalet</option>
                                <option>Cash</option>
                            </select>

                            <label for="nama-pengirim" class="col-form-label">Nama Pengirim</label>
                            <div class="">
                                <input class="form-control" name="nama-pengirim" type="text" id="nama-pengirim"
                                    placeholder="Nama Pengirim">
                            </div>

                            <label for="jumlah-pembayaran" class="col-form-label">Jumlah Pembayaran</label>
                            <div class="">
                                <input class="form-control" name="jumlah-pembayaran" type="text" id="jumlah-pembayaran"
                                    placeholder="Masukan nominal Pembayaran">
                            </div>

                            <label for="tanggal-pembayaran" class="col-form-label">Tanggal Pembayaran</label>
                            <input class="form-control" type="datetime-local" id="tanggal-pembayaran" />

                            <label for="keterangan" class="col-form-label">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Isi keterangan pembayaran"></textarea>
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
