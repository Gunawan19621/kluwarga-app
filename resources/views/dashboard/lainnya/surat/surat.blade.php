@extends('dashboard.layouts.main')
@section('title', 'Surat')
@section('content')
    <div class="crad transparent shadow-none">
        <div class="card-body">
            <div class="card-body mb-4" style="background: linear-gradient(to top, #08CAA2,#058BA0);">
                <h2 class="" style="color: white;">Hi Gunawan, Ingin membuat surat?</h2>
                <p style="color: white;"> Silahkan kembali ke menu komunitas anda dan pilih di bagian surat</p>
                {{-- <button type="submit" onclick="window.location.href='{{ route('form-pengaduan.index') }}'"
                    class="btn btn-info px-4">Buat Surat Baru</button> --}}
            </div>

            <!-- tabel Surat -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mt-0">Permohonan Pembuatan Surat Masyarakat</h5>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengirim</th>
                                            <th>Jenis Surat</th>
                                            <th>Tanggal Pembuatan Surat</th>
                                            <th>Keterangan Surat</th>
                                            <th>Status Pengajuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{ route('detail-surat.index') }}" class="text-dark">Asep</a></td>
                                            <td>Surat Keterangan Domisili</td>
                                            <td>15/08/2023</td>
                                            <td>Untuk keperluan pembuatan Kartu Tanda Penduduk (KTP) baru.</td>
                                            <td>
                                                <span class="badge badge-boxed badge-success">Selesai</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('detail-surat.index') }}" class="text-dark">Bambang</a>
                                            </td>
                                            <td>Surat Izin Parkir</td>
                                            <td>15/08/2023</td>
                                            <td>Untuk memiliki akses parkir yang sah</td>
                                            <td>
                                                <span class="badge badge-boxed badge-warning">Menunggu persetujuan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('detail-surat.index') }}" class="text-dark">Caca</a></td>
                                            <td>Surat Izin Bangunan</td>
                                            <td>15/08/2023</td>
                                            <td>Untuk membangun dan merenovasi bangunan secara legal</td>
                                            <td>
                                                <span class="badge badge-boxed badge-danger">DItolak</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ route('detail-surat.index') }}" class="text-dark">Dinda</a></td>
                                            <td>Surat Izin Bangunan</td>
                                            <td>15/08/2023</td>
                                            <td>Untuk membangun dan merenovasi bangunan secara legal</td>
                                            <td>Belum ada balasan </td>
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

@endsection
