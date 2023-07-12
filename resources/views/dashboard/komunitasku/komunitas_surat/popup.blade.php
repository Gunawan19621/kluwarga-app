<!-- tambah data jenis surat-->
<div class="modal fade" id="tambahsuratModal" tabindex="-1" role="dialog" aria-labelledby="tambahsuratModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Tambah Jenis Surat</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="jenis-surat" class="col-form-label" style="font-size: 14px;">Detail Iuran</label>
                        <input class="form-control" name="jenis-surat" type="text" id="jenis-surat"
                            placeholder="Masukan kategosi surat">
                    </div>
                    <h5>Data yang dibutuhkan</h5>
                    <hr>
                    <div class="row mb-4">
                        <div class="col-4">
                            {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox1"
                                    data-parsley-multiple="groups" data-parsley-mincheck="1" value="1">
                                <label class="custom-control-label" for="checkbox1">Nama
                                    Lengkap</label>
                            </div> --}}
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox1" name="data[]"
                                    value="Nama Lengkap">
                                <label class="custom-control-label" for="checkbox1">Nama Lengkap</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox2"
                                    data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="checkbox2">Jenis
                                    Surat</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox3"
                                    data-parsley-multiple="groups" data-parsley-mincheck="3">
                                <label class="custom-control-label" for="checkbox3">Tempat/Tanggal
                                    lahir</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox4"
                                    data-parsley-multiple="groups" data-parsley-mincheck="4">
                                <label class="custom-control-label" for="checkbox4">Pekerjaan</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox5"
                                    data-parsley-multiple="groups" data-parsley-mincheck="5">
                                <label class="custom-control-label" for="checkbox5">Agama</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox6"
                                    data-parsley-multiple="groups" data-parsley-mincheck="6">
                                <label class="custom-control-label" for="checkbox6">Status
                                    Perkawinan</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox7"
                                    data-parsley-multiple="groups" data-parsley-mincheck="7">
                                <label class="custom-control-label" for="checkbox7">Kewarganegaraan</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox8"
                                    data-parsley-multiple="groups" data-parsley-mincheck="8">
                                <label class="custom-control-label" for="checkbox8">Nomor
                                    NIK/Passpor</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox9"
                                    data-parsley-multiple="groups" data-parsley-mincheck="9">
                                <label class="custom-control-label" for="checkbox9">Nomor
                                    Kartu Keluarga</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox10"
                                    data-parsley-multiple="groups" data-parsley-mincheck="10">
                                <label class="custom-control-label" for="checkbox10">Alamat
                                    Sesuai
                                    KTP</label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox11"
                                    data-parsley-multiple="groups" data-parsley-mincheck="11">
                                <label class="custom-control-label" for="checkbox11">Alamat
                                    Domisili</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox12"
                                    data-parsley-multiple="groups" data-parsley-mincheck="12">
                                <label class="custom-control-label" for="checkbox12">Keperluan</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                    <button type="Update" class="btn btn-danger px-4 float-right mr-3 waves-effect"
                        data-dismiss="modal">BATAL</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Tambah data jenis surat-->

<!-- Edit data surat-->
<div class="modal fade" id="editsuratModal" tabindex="-1" role="dialog" aria-labelledby="editsuratModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Edit Data Surat</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenis-surat" class="col-form-label" style="font-size: 14px;">Detail Iuran</label>
                    <input class="form-control" name="jenis-surat" type="text" id="jenis-surat"
                        placeholder="Masukan kategosi surat">
                </div>
                <h5>Data yang dibutuhkan</h5>
                <hr>
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox1"
                                data-parsley-multiple="groups" data-parsley-mincheck="1">
                            <label class="custom-control-label" for="checkbox1">Nama
                                Lengkap</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox2"
                                data-parsley-multiple="groups" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="checkbox2">Jenis
                                Surat</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox3"
                                data-parsley-multiple="groups" data-parsley-mincheck="3">
                            <label class="custom-control-label" for="checkbox3">Tempat/Tanggal
                                lahir</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox4"
                                data-parsley-multiple="groups" data-parsley-mincheck="4">
                            <label class="custom-control-label" for="checkbox4">Pekerjaan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox5"
                                data-parsley-multiple="groups" data-parsley-mincheck="5">
                            <label class="custom-control-label" for="checkbox5">Agama</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox6"
                                data-parsley-multiple="groups" data-parsley-mincheck="6">
                            <label class="custom-control-label" for="checkbox6">Status
                                Perkawinan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox7"
                                data-parsley-multiple="groups" data-parsley-mincheck="7">
                            <label class="custom-control-label" for="checkbox7">Kewarganegaraan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox8"
                                data-parsley-multiple="groups" data-parsley-mincheck="8">
                            <label class="custom-control-label" for="checkbox8">Nomor
                                NIK/Passpor</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox9"
                                data-parsley-multiple="groups" data-parsley-mincheck="9">
                            <label class="custom-control-label" for="checkbox9">Nomor
                                Kartu Keluarga</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox10"
                                data-parsley-multiple="groups" data-parsley-mincheck="10">
                            <label class="custom-control-label" for="checkbox10">Alamat
                                Sesuai
                                KTP</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox11"
                                data-parsley-multiple="groups" data-parsley-mincheck="11">
                            <label class="custom-control-label" for="checkbox11">Alamat
                                Domisili</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox12"
                                data-parsley-multiple="groups" data-parsley-mincheck="12">
                            <label class="custom-control-label" for="checkbox12">Keperluan</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                <button type="Update" class="btn btn-danger px-4 float-right mr-3 waves-effect"
                    data-dismiss="modal">BATAL</button>
            </div>
        </div>
    </div>
</div>
<!-- End Edit data surat-->

<!-- Modal surat > tambah data jenis surat-->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Data Jenis Surat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="kode-rumah" class="col-form-label">Jenis Surat</label>
                    <div class="">
                        <input class="form-control" name="kode-rumah" readonly type="text" id="kode-rumah"
                            value="Surat Keterangan Domisili">
                    </div>
                </div>
                <p>Data yang dibutuhkan</p>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox1"
                                data-parsley-multiple="groups" data-parsley-mincheck="1">
                            <label class="custom-control-label" for="checkbox1">Nama
                                Lengkap</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox2"
                                data-parsley-multiple="groups" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="checkbox2">Jenis
                                Surat</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox3"
                                data-parsley-multiple="groups" data-parsley-mincheck="3">
                            <label class="custom-control-label" for="checkbox3">Tempat/Tanggal
                                lahir</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox4"
                                data-parsley-multiple="groups" data-parsley-mincheck="4">
                            <label class="custom-control-label" for="checkbox4">Pekerjaan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox5"
                                data-parsley-multiple="groups" data-parsley-mincheck="5">
                            <label class="custom-control-label" for="checkbox5">Agama</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox6"
                                data-parsley-multiple="groups" data-parsley-mincheck="6">
                            <label class="custom-control-label" for="checkbox6">Status
                                Perkawinan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox7"
                                data-parsley-multiple="groups" data-parsley-mincheck="7">
                            <label class="custom-control-label" for="checkbox7">Kewarganegaraan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox8"
                                data-parsley-multiple="groups" data-parsley-mincheck="8">
                            <label class="custom-control-label" for="checkbox8">Nomor
                                NIK/Passpor</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox9"
                                data-parsley-multiple="groups" data-parsley-mincheck="9">
                            <label class="custom-control-label" for="checkbox9">Nomor
                                Kartu Keluarga</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox10"
                                data-parsley-multiple="groups" data-parsley-mincheck="10">
                            <label class="custom-control-label" for="checkbox10">Alamat
                                Sesuai
                                KTP</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox11"
                                data-parsley-multiple="groups" data-parsley-mincheck="11">
                            <label class="custom-control-label" for="checkbox11">Alamat
                                Domisili</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox12"
                                data-parsley-multiple="groups" data-parsley-mincheck="12">
                            <label class="custom-control-label" for="checkbox12">Keperluan</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal surat > show data jenis surat --}}
