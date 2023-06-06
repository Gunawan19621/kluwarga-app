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
                                <button type="button" class="btn btn-danger mr-2" id="ajax-alert">Undang via email</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    onclick="tambahElement()">+ Tambah</button>
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
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Aisa</td>
                                    <td>Istri</td>
                                    <td>081111111111</td>
                                    <td>aisa@gmail.com</td>
                                    <td>
                                        <div class="">
                                            <a href="#"><i class="fa fa-edit mr-2"
                                                    style="font-size: 20px !important"></i></a>
                                            <a href="#"><i class="fa fa-trash-o text-danger"
                                                    style="font-size: 20px !important"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bambang</td>
                                    <td>Suami</td>
                                    <td>082222222222</td>
                                    <td>bambang@gmail.com</td>
                                    <td>
                                        <div class="">
                                            <a href="#"><i class="fa fa-edit mr-2"
                                                    style="font-size: 20px !important"></i></a>
                                            <a href="#"><i class="fa fa-trash-o text-danger"
                                                    style="font-size: 20px !important"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>

            {{-- Detail Profil Keluarga --}}
            <h4 class="text-success mt-0">Profil Keluarga</h4>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <form method="POST" class="form-horizontal well" role="form">
                        <fieldset>
                            <div class="repeater-default">
                                <div data-repeater-list="car">
                                    <div data-repeater-item="">
                                        {{-- data user1 --}}
                                        <div class="form-group row d-flex align-items-end">
                                            <div class="col-12">
                                                <label class="control-label">Nama*</label>
                                                <div class="">
                                                    <input class="form-control" name="nama" type="text" id="nama"
                                                        value="Aisa">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Hubungan keluarga*</label>
                                                <select class="form-control" name="hubungan-keluarga" type="text"
                                                    id="hubungan-keluarga" value="{{ old('hubungan-keluarga') }}">
                                                    <option>iistri</option>
                                                    <option>Suami</option>
                                                    <option>Istri</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Nomor Telepon</label>
                                                <div class="">
                                                    <input class="form-control" name="nomor-telepon" type="text"
                                                        id="nomor-telepon" value="081111111111">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="control-label">Email</label>
                                                <div class="">
                                                    <input class="form-control" name="email" type="text" id="email"
                                                        value="aisa@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between mt-3">
                                                <div>
                                                    <a href="javascript:void(0);" class="text-success" data-toggle="modal"
                                                        data-target="#myModal">Data
                                                        detail</a>
                                                </div>
                                                <div>
                                                    <span data-repeater-delete=""
                                                        class="btn btn-danger btn-sm mr-2">Hapus</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row d-none">
                                    <div class="col-sm-12">
                                        <span data-repeater-create="" class="btn btn-light">
                                            <span class="fa fa-plus"></span> Add
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <span data-repeater-delete="" class="btn btn-success col-2 btn-sm mr-2">SIMPAN</span>
                            </div>
                        </fieldset>
                    </form>
                </div>
                {{-- End Detail Profil Keluarga --}}
            </div>
        </div>
    </div>

    <!-- modal data detail -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-success modal-title align-self-center mt-0" id="myModalLabel">Data Detail
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama*</label>
                            <div class="">
                                <input class="form-control" type="text" id="nama" value="{{ old('nama') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hubungan-keluarga" class="col-form-label">Hubungan Keluarga*</label>
                            <select class="form-control" name="hubungan-keluarga" type="text" id="jenis-kelamin"
                                value="{{ old('jenis_kelamin') }}">
                                <option>Pilih Hubungan Keluarga</option>
                                <option>Suami</option>
                                <option>Istri</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="jenis-kelamin" class="col-form-label">Jenis Kelamin</label>
                                <div class="">
                                    <select class="form-control" name="jenis-kelamin" type="text" id="jenis-kelamin"
                                        value="{{ old('jenis_kelamin') }}">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option>Laki Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="tanggal-lahir" class="col-form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" value="{{ old('tanggal-lahir') }}"
                                    id="tanggal-lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-form-label">Agama</label>
                            <select class="form-control" name="agama" type="text" id="agama"
                                value="{{ old('agama') }}">
                                <option>Pilih Agama</option>
                                <option>Agama 1</option>
                                <option>Agama 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan" class="col-form-label">Pekerjaan</label>
                            <div class="">
                                <input class="form-control" type="text" id="pekerjaan"
                                    value="{{ old('pekerjaan') }}">
                            </div>
                        </div>
                        <hr>
                        <h5>Kontak</h5>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <div class="">
                                <input class="form-control" type="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor-telepon" class="col-form-label">Nomor Telepon</label>
                            <div class="">
                                <input class="form-control" type="text" id="nomor-telepon"
                                    value="{{ old('nomor-telepon') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor-telepon-rumah" class="col-form-label">Nomor Telepon Rumah</label>
                            <div class="">
                                <input class="form-control" type="text" id="nomor-telepon-rumah"
                                    value="{{ old('nomor-telepon-rumah') }}">
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox my-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Sama Dengan Alamat Pengguna</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Hapus</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- end modal data detail -->

    <script>
        function tambahElement() {
            // Mengambil referensi elemen target
            var targetElement = document.querySelector('[data-repeater-create]');

            // Menjalankan perintah saat tombol di klik
            targetElement.click();
            // Melakukan scrolling ke bawah secara penuh
            window.scrollTo(0, document.body.scrollHeight);
        }
    </script>
@endsection
