@extends('dashboard.layouts.main')
@section('title', 'Dashboard')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title"><i class="typcn typcn typcn-equals"></i>Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body p-4">
                    <div class="d-flex align-content-center" style="margin-top:-20px; margin-left:-15px;">
                        <h4 class="card-title mt-0"> <img src="{{ asset('assets/images/titik.png') }}" width="20">Iuran
                        </h4>
                    </div>
                    <p class="card-text font-13">Atur iuranmu dengan menggunakan fitur ini</p>
                    <h4 class="float-right" style="margin-bottom:-15px">Rp.0,00</h4>
                </div><img class="card-img-top" height="180" src="assets/images/iuran.png" alt="Iuran image">
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body p-4">
                    <div class="d-flex align-content-center" style="margin-top:-20px; margin-left:-15px;">
                        <h4 class="card-title mt-0"> <img src="{{ asset('assets/images/titik.png') }}" width="20">Iuran
                            Belum Lunas
                        </h4>
                    </div>
                    <p class="card-text font-13">Lihat mana iuran yang belum di bayar</p>
                    <h4 class="float-right" style="margin-bottom:-15px">Rp.0,00</h4>
                </div><img class="card-img-top" height="180" src="assets/images/iuran.png" alt="Iuran image">
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body p-4">
                    <div class="d-flex align-content-center" style="margin-top:-20px; margin-left:-15px;">
                        <h4 class="card-title mt-0"> <img src="{{ asset('assets/images/titik.png') }}"
                                width="20">Anggota
                        </h4>
                    </div>
                    <p class="card-text font-13">Daftar warga/anggota yang terdapat di komunitasmu</p>
                    <h4 class="float-right" style="margin-bottom:-15px">Rp.0,00</h4>
                </div><img class="card-img-top" height="180" src="assets/images/iuran.png" alt="Iuran image">
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body p-4">
                    <div class="d-flex align-content-center" style="margin-top:-20px; margin-left:-15px;">
                        <h4 class="card-title mt-0"> <img src="{{ asset('assets/images/titik.png') }}"
                                width="20">Tetangga
                        </h4>
                    </div>
                    <p class="card-text font-13">Daftar warga/anggota yang terdapat di komunitasmu</p>
                    <h4 class="float-right" style="margin-bottom:-15px">Rp.0,00</h4>
                </div><img class="card-img-top" height="180" src="assets/images/iuran.png" alt="Iuran image">
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-white">
                <div class="card-body p-4">
                    <div class="d-flex align-content-center" style="margin-top:-20px; margin-left:-15px;">
                        <h4 class="card-title mt-0"> <img src="{{ asset('assets/images/titik.png') }}" width="20">Rumah
                        </h4>
                    </div>
                    <p class="card-text font-13">Sebuah kelompok sosial yang terdari individu-individu yang terkait
                    </p>
                    <h4 class="float-right" style="margin-bottom:-15px">Rp.0,00</h4>
                </div><img class="card-img-top" height="180" src="assets/images/iuran.png" alt="Iuran image">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <h3 class="mt-0 mb-2"><i class="fa fa-bullhorn fs-1"></i> Keluhan dan Informasi</h3>
                    <div class="autohide-scroll" style="height: 500px;">
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-danger d-inline-block p-2"></div>
                                    <a href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter">Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived not
                                    only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including
                                    versions of Lorem Ipsum.</h5>
                                    <hr>
                                    <small>By Sukiman</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-success d-inline-block p-2"></div>
                                    <a href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter">Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived not
                                    only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including
                                    versions of Lorem Ipsum.</h5>
                                    <hr>
                                    <small>By Sukiman</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-dark d-inline-block p-2"></div>
                                    <a href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter">Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a galley of type and scrambled it to make a type specimen book. It has survived not
                                    only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including
                                    versions of Lorem Ipsum.</h5>
                                    <hr>
                                    <small>By Sukiman</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade ml-5" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Jalan Berlubang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ml-3 mb-3">
                    <p class="mt-2">Isi Pesan :</p>
                    <h4>Siang Pak RT, jalan di Jln. Merak sudah rusak parah dan berlubang. Mohon segera di perbaiki.</h4>
                    <div class="row">
                        <div class="col-6">
                            <p>Lokasi kejadian :</p>
                            <h5>Jalan Merak</h5>
                            <p>Waktu kejadian :</p>
                            <h5>Pukul 15.00</h5>
                            <p>Pengirim pesan :</p>
                            <h5>Sukijan</h5>
                            <p>Penyebab kejadian :</p>
                            <h5>Dilalui kendaraan berat</h5>
                        </div>
                        <div class="col-6 d-flax">
                            <p>Foto lokasi kejadian :</p>
                            <img src="{{ asset('image/jalan berlubang.jpg') }}" alt="" width="200px">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}



    @push('style')
    @endpush

    @push('javascript')
    @endpush
@endsection
