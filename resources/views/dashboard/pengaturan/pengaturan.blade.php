@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Komunitas')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="card-body">
            <h4 class="text-success mt-0">Pengaturan Komunitas</h4>
            <div class="card ">
                <div class="card-body col-10">
                    <h5>Informasi Akun</h5>
                    <label class="control-label">Email</label>
                    <div class="">
                        <input class="form-control" name="email" type="text" id="email" value="">
                    </div>
                    <label class="control-label">No. Handphone</label>
                    <div class=" mb-3">
                        <input class="form-control" name="nomor-telepon" type="text" id="nomor-telepon" value="">
                    </div>
                    <div>
                        <span data-repeater-delete="" class="btn btn-danger btn-sm mr-2">Hapus</span>
                        <span data-repeater-delete="" class="btn btn-success btn-sm">Simpan</span>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="card-body col-10">
                    <h5>Kata Sandi</h5>
                    <label class="control-label">Kata Sandi Lama</label>
                    <div class="">
                        <input class="form-control" name="password" type="text" id="password" value="">
                    </div>
                    <label class="control-label">No. Handphone</label>
                    <div class="">
                        <input class="form-control" name="nomor-telepon" type="text" id="nomor-telepon" value="">
                    </div>
                    <label class="control-label">Kata Sandi Baru</label>
                    <div class="mb-3">
                        <input class="form-control" name="password" type="text" id="password" value="">
                    </div>
                    <div>
                        <span data-repeater-delete="" class="btn btn-danger btn-sm mr-2">Hapus</span>
                        <span data-repeater-delete="" class="btn btn-success btn-sm">Simpan</span>
                    </div>
                </div>
            </div>

            <div class="card ">
                <div class="card-body col-10">
                    <h5>
                        <a href="{{ route('pengaturan-akses-info.index') }}" class="text-dark">Pengaturan Akses
                            Informasi</a>
                    </h5>

                    <h5></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
