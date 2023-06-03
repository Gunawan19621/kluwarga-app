@extends('dashboard.layouts.main')
@section('title', 'Pengaduan')
@section('content')
    <div class="crad transparent shadow-none">
        <div class="card-body">
            <div class="card">
                <div class="card-body mb-4" style="background: linear-gradient(to top, #08CAA2,#058BA0);">
                    <h2 class="" style="color: white;">Hi Gunawan, Suarakan Aduan Anda!</h2>
                    <p style="color: white;">"Suara Anda, Solusi Kami: Ajukan Pengaduan Masyarakat dan Bersama Kita Perbaiki
                        Lingkungan Hidup."
                    </p>
                    <button type="submit" onclick="window.location.href='{{ route('form-pengaduan.index') }}'"
                        class="btn btn-info px-4">Buat Pengaduan Baru</button>

                </div>

                <!-- tabel pengaduan -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0">Pengaduan Masyarakat</h5>
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama Pengirim</th>
                                                <th>Judul Pengaduan</th>
                                                <th>Lokasi Kejadian</th>
                                                <th>Waktu Kejadian</th>
                                                <th>Status Pengajuan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Asep</td>
                                                <td>Jalan Rusak</td>
                                                <td>Jalan TIkus</td>
                                                <td>15.00 / 20-02-2022</td>
                                                <td>
                                                    <span class="badge badge-boxed badge-success">Selesai</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('detail-pengaduan.index') }}"><i
                                                            class="dripicons-preview" style="font-size: 25px"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bambang</td>
                                                <td>Jalan berlubang</td>
                                                <td>Jalan kucing</td>
                                                <td>10.00 / 20-02-2022</td>
                                                <td>
                                                    <span class="badge badge-boxed badge-warning">Dalam Proses</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('detail-pengaduan.index') }}"><i
                                                            class="dripicons-preview" style="font-size: 25px"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caca</td>
                                                <td>Jalan berlubang</td>
                                                <td>Jalan kucing</td>
                                                <td>10.00 / 20-02-2022</td>
                                                <td>
                                                    <span class="badge badge-boxed badge-danger">Ditolak</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('detail-pengaduan.index') }}"><i
                                                            class="dripicons-preview" style="font-size: 25px"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dinda</td>
                                                <td>Jembatan roboh</td>
                                                <td>Jalan kucing</td>
                                                <td>10.00 / 20-02-2022</td>
                                                <td>Belum ada balasan </td>
                                                <td class="text-center">
                                                    <a href="{{ route('detail-pengaduan.index') }}"><i
                                                            class="dripicons-preview" style="font-size: 25px"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end tabel pengaduan -->
            </div>
        </div>
    </div>

@endsection
