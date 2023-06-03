@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Akses Informasi')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('pengaturan.index') }}">Pengaturan</a>
                        </li>
                        <li class="breadcrumb-item active">Pengaturan Akses Informasi</li>
                    </ol>
                </div>
                <h4 class="page-title">Pengaturan Akses Informasi</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">

                    {{-- Pertanyaan 1 --}}
                    <div class="ml-3">
                        <p>1.&nbsp;&nbsp;Yang boleh melihat profil detail saya</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">Semua Pengguna</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox2" name="checkbox2" data-parsley-multiple="groups"
                                data-parsley-mincheck="2" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Semua warga di komunitas saya
                                bergabung</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox3" name="checkbox3" data-parsley-multiple="groups"
                                data-parsley-mincheck="3" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Pengurus di komunitas saya bergabung</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Tidak ada</label>
                        </div>
                    </div>

                    {{-- Pertanyaan 2 --}}
                    <div class="ml-3">
                        <p>2.&nbsp;&nbsp;Yang boleh melihat profil umum keluarga saya</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">Semua Pengguna</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox2" name="checkbox2" data-parsley-multiple="groups"
                                data-parsley-mincheck="2" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Semua warga di komunitas saya
                                bergabung</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox3" name="checkbox3" data-parsley-multiple="groups"
                                data-parsley-mincheck="3" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Pengurus di komunitas saya bergabung</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Tidak ada</label>
                        </div>
                    </div>

                    {{-- Pertanyaan 3 --}}
                    <div class="ml-3">
                        <p>3.&nbsp;&nbsp;Yang boleh melihat profil detail keluarga saya</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">Semua Pengguna</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox2" name="checkbox2" data-parsley-multiple="groups"
                                data-parsley-mincheck="2" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Semua warga di komunitas saya
                                bergabung</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox3" name="checkbox3" data-parsley-multiple="groups"
                                data-parsley-mincheck="3" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Pengurus di komunitas saya bergabung</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Tidak ada</label>
                        </div>
                    </div>

                    {{-- Pertanyaan 4 --}}
                    <div class="ml-3">
                        <p>4.&nbsp;&nbsp;Yang boleh melihat komunitas dimana saya bergabung</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">Semua Pengguna</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox2" name="checkbox2" data-parsley-multiple="groups"
                                data-parsley-mincheck="2" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Semua warga di komunitas saya
                                bergabung</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox3" name="checkbox3" data-parsley-multiple="groups"
                                data-parsley-mincheck="3" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Pengurus di komunitas saya bergabung</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Tidak ada</label>
                        </div>
                    </div>

                    <div>
                        <span data-repeater-delete="" class="btn btn-success btn-sm mr-3">Simpan</span>
                        <span data-repeater-delete="" class="btn btn-danger btn-sm">Batal</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
