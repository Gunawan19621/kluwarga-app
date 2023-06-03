@extends('dashboard.layouts.main')
@section('title', 'Detail Informasi')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Komunitasku</li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('komunitas.index') }}">Komunitas</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Informasi</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Detail Informasi</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-3">
                        <img class="d-flex mr-3 rounded-circle thumb-md" src="{{ asset('assets/images/users/user-5.jpg') }}"
                            alt="Generic placeholder image" />
                        <div class="media-body">
                            <h4 class="font-14 m-0">Humberto D. Champion</h4>
                            <small class="text-muted">Ketua RT</small>
                        </div>
                    </div>
                    <h4 class="mt-4 mb-4 text-center">Undangan Rapat Masyarakat Wakanda</h4>
                    <p>Dear Semua Warrga Wakanda</p>
                    <p>
                        Praesent dui ex, dapibus eget mauris ut, finibus
                        vestibulum enim. Quisque arcu leo, facilisis in fringilla
                        id, luctus in tortor. Nunc vestibulum est quis orci varius
                        viverra. Curabitur dictum volutpat massa vulputate
                        molestie. In at felis ac velit maximus convallis.
                    </p>
                    <div class="ml-2">
                        <h5>Hari / Tanggal : Sabtu, 16 Februari 2023</h5>
                        <h5>Jam : 13.30 s/d 17.00</h5>
                        <h5>Tempat : Balai Desa</h5>
                    </div>
                    <p>

                    </p>
                    <p>
                        Sed elementum turpis eu lorem interdum, sed porttitor eros
                        commodo. Nam eu venenatis tortor, id lacinia diam. Sed
                        aliquam in dui et porta. Sed bibendum orci non tincidunt
                        ultrices. Vivamus fringilla, mi lacinia dapibus
                        condimentum, ipsum urna lacinia lacus, vel tincidunt mi
                        nibh sit amet lorem.
                    </p>
                    <p>Sincerly,</p>
                    <hr />
                    <h5>Dokumen Pendukung</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                            <div class="card">
                                <i class="fa fa-file-text-o fa-4x text-primary text-center"></i>
                                <div class="py-2 text-center">
                                    <a href="{{ asset('path_to_document_file.pdf') }}" class="text-muted font-600"
                                        download>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
