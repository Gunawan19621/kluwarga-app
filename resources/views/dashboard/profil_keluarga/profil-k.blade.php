@extends('dashboard.layouts.main')
@section('title', 'Profil Keluarga')
@section('content')
    <div class="card bg-transparent shadow-none ">
        <div class="card-body ">
            <h4 class="text-success mt-0">Profil Keluarga</h4>
            <div class="card ">
                <div class="card-body">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="dripicons-view-list mr-2" style="font-size: 17px"></i>
                                <h4 class="mt-0 d-inline-block">List Anggota Keluarga</h4>
                            </div>
                            <div>
                                <a href="{{ route('profil-keluarga.create') }}" class="btn btn-primary">Tambah Data
                                    Keluarga</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 border">
                            <thead class="thead-default">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota Keluarga</th>
                                    <th>Hubungan Keluarga</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($profilKeluarga as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data['nama_anggota_keluarga'] }}</td>
                                        <td>{{ $data['hubungan_keluarga'] }}</td>
                                        <td>{{ $data['jenis_kelamin'] === 'L' ? 'Laki-Laki' : ($data['jenis_kelamin'] === 'P' ? 'Perempuan' : '') }}
                                        </td>
                                        <td>{{ $data['phone'] }}</td>
                                        <td>
                                            <div class="">
                                                {{-- <a href="#">
                                                    <i class="fa fa-edit mr-2" style="font-size: 20px !important"></i>
                                                </a> --}}
                                                <a href="#" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-edit mr-2" style="font-size: 20px !important"></i>
                                                </a>
                                                <a href="#"><i class="fa fa-trash-o text-danger"
                                                        style="font-size: 20px !important"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.profil_keluarga.popup')
@endsection
