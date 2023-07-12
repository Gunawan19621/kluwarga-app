@extends('dashboard.layouts.main')
@section('title', 'Pengaduan')
@section('content')
    <div class="crad transparent shadow-none">
        <div class="card-body">
            @if ($message = session('success-pengaduan'))
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert"
                    id="success-alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="mdi mdi-check-circle mr-2"></i>{{ $message }}
                </div>
            @endif
            <div class="card">

                <div class="card-body mb-4" style="background: linear-gradient(to top, #08CAA2,#058BA0);">
                    <h2 class="" style="color: white;">Hi Gunawan, Suarakan Aduan Anda!</h2>
                    <p style="color: white;">"Suara Anda, Solusi Kami: Ajukan Pengaduan Masyarakat dan Bersama Kita Perbaiki
                        Lingkungan Hidup."
                    </p>
                    <button type="submit" onclick="window.location.href='{{ route('pengaduan.create') }}'"
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
                                            @forelse ($pengaduan as $data)
                                                <tr>
                                                    <td>{{ $data->pengguna->user['name'] }}</td>
                                                    <td>{{ $data['judul_pengaduan'] }}</td>
                                                    <td>{{ $data['lokasi_kejadian'] }}</td>
                                                    <td>{{ $data['waktu_kejadian'] }}</td>
                                                    <td>
                                                        <div>
                                                            @if ($data['status_pengaduan'] === 'Proses')
                                                                <span
                                                                    class="badge badge-boxed badge-warning">{{ $data['status_pengaduan'] }}</span>
                                                                <h6 class="text-dark ml-1"></h6>
                                                            @elseif ($data['status_pengaduan'] === 'Selesai')
                                                                <span
                                                                    class="badge badge-boxed badge-success">{{ $data['status_pengaduan'] }}</span>
                                                                <h6 class="text-dark ml-1"></h6>
                                                            @elseif ($data['status_pengaduan'] === 'Ditolak')
                                                                <span
                                                                    class="badge badge-boxed badge-danger">{{ $data['status_pengaduan'] }}</span>
                                                                <h6 class="text-dark ml-1"></h6>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('pengaduan.show', $data['id']) }}"><i
                                                                class="dripicons-preview" style="font-size: 25px"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <p>data tidak ada</p>
                                            @endforelse
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
