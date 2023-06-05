@extends('dashboard.layouts.main')
@section('title', 'Pengaturan Komunitas')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Komunitasku</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('komunitas.index') }}">Komunitas</a>
                        </li>
                        <li class="breadcrumb-item active">Pengatuan komunitas</li>
                    </ol>
                </div>
                <h4 class="page-title">Pengaturan Komunitas</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">

                    {{-- Pertanyaan 1 --}}
                    <div class="ml-3">
                        <p style="margin: 0;">1.&nbsp;&nbsp;Pengaturan akeses bergabung komunitas</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">dibuka ( boleh siapa aja yang mau bergabung)</label>
                        </div>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox2" name="checkbox2" data-parsley-multiple="groups"
                                data-parsley-mincheck="2" style="width: 15px; height: 15px;">
                            <label for="checkbox2">hanya bisa di undang atau sceen QR Code</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox3" name="checkbox3" data-parsley-multiple="groups"
                                data-parsley-mincheck="3" style="width: 15px; height: 15px;">
                            <label for="checkbox2">ditutup (tidak ada yang bisa bergabung)</label>
                        </div>
                    </div>

                    {{-- Pertanyaan 2 --}}
                    <div class="ml-3">
                        <p style="margin: 0;">2.&nbsp;&nbsp;Yang boleh melihat profil komunitas</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">Semua Pengguna</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">Hanya warga komunitas saja</label>
                        </div>
                    </div>

                    {{-- Pertanyaan 3 --}}
                    <div class="ml-3">
                        <p style="margin: 0;">3.&nbsp;&nbsp;Pengaturan kepengurusan penentuan kepengurusan</p>
                        <div class="ml-3">
                            <input type="checkbox" id="checkbox1" name="checkbox1" data-parsley-multiple="groups"
                                data-parsley-mincheck="1" style="width: 15px; height: 15px;">
                            <label for="checkbox1">bisa di atur sesuai dengan level pengurusnya</label>
                        </div>
                        <div class="ml-3 mb-2">
                            <input type="checkbox" id="checkbox4" name="checkbox4" data-parsley-multiple="groups"
                                data-parsley-mincheck="4" style="width: 15px; height: 15px;">
                            <label for="checkbox2">hanya pembuat atau ketua yang dapat mengatur semua kepengurusan</label>
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
