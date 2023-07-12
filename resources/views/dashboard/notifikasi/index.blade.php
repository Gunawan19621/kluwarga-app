@extends('dashboard.layouts.main')
@section('title', 'Notifikasi')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-transparent shadow-none">
                <div class="card-body">
                    <h3 class="mt-0 mb-2"><i class="fa fa-bullhorn fs-1"></i> Notifikasi
                        <div class="rounded-circle bg-success d-inline-block text-white px-2" style="font-size: 20px">5</div>
                    </h3>
                    <div class="autohide-scroll" style="height: 500px;">
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-primary d-inline-block p-2"></div><a
                                        href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter"> Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <h4 class="text-danger">Pengumuman : bla bla</h4>
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
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-primary d-inline-block p-2"></div><a
                                        href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter"> Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <h4 class="text-danger">Pengumuman : bla bla</h4>
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
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4>
                                    <div class="rounded-circle bg-primary d-inline-block p-2"></div><a
                                        href="javascript:void(0);" class="text-dark" data-toggle="modal"
                                        data-target="#exampleModalCenter"> Jalan Berlubang</a>
                                </h4>
                                <hr>
                                <h4 class="text-danger">Pengumuman : bla bla</h4>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal detail notifikasi-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle"> Jalan Berlubang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ml-3 mb-3">
                    <p>Isi Pesan :</p>
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
                        <div class="col-6">
                            <p>Foto lokasi kejadian :</p>
                            <img src="{{ asset('image/jalan berlubang.jpg') }}" alt="" width="200px">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- End Modal detail notifikasi --}}
@endsection
