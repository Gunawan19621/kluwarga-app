<!--Kumpulan modal-->
<!-- modal  Edit detail Komunitas-->
<div class="modal fade" id="editprofilModal" tabindex="-1" role="dialog" aria-labelledby="editprofilModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-auto text-success" id="editprofilModalLongTitle">Profil Komunitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="">
                        <label for="nama-komunitas" class="col-form-label">Nama Komunitas</label>
                        <input class="form-control" name="nama-komunitas" type="text" id="nama-komunitas"
                            value="{{ old('nama-komunitas') }}">
                    </div>
                    <div>
                        <label for="moto-komunitas" class="col-form-label">Moto Komunitas</label>
                        <input class="form-control" name="moto-komunitas" type="text" id="moto-komunitas"
                            value="{{ old('moto-komunitas') }}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="jumlah-warga" class="col-form-label">Jumlah Warga</label>
                                    <input class="form-control" name="jumlah-warga" type="text" id="jumlah-warga"
                                        value="{{ old('jumlah-warga') }}">
                                </div>
                                <div class="col-6">
                                    <label for="jumlah-rumah" class="col-form-label">Jumlah Rumah</label>
                                    <input class="form-control" name="jumlah-rumah" type="text" id="jumlah-rumah"
                                        value="{{ old('jumlah-rumah') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="nomor-telepon" class="col-form-label">Nomor Telepon</label>
                            <input class="form-control" name="nomor-telepon" type="text" id="nomor-telepon"
                                value="{{ old('nomor-telepon') }}">
                        </div>
                    </div>
                    <div>
                        <label for="alamat-perumahan" class="col-form-label">Alamat Perumahan</label>
                        <input class="form-control" name="alamat-perumahan" type="text" id="alamat-perumahan"
                            value="{{ old('alamat-perumahan') }}">
                    </div>
                    <div>
                        <label>Tema Warna</label>
                        <div id="cp2" class="input-group btn-group btn-group-toggle colorpicker-component">
                            <input type="text" value="#00AABB" class="form-control col-4"> <span
                                class="input-group-addon"><i></i></span>
                            <button class="btn btn-success">apply</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    Batal
                </button>
                <button type="button" class="btn btn-success">SIMPAN</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Edit detail Komunitas-->

<!-- Modal Rumah > Tambah data-->
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Tambah Alamat Lengkap</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="rt" class="col-form-label">RT</label>
                    <div class="">
                        <input class="form-control" name="rt" type="text" id="rt"
                            value="{{ old('rt') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="rw" class="col-form-label">RW</label>
                    <div class="">
                        <input class="form-control" name="rw" type="text" id="rw"
                            value="{{ old('rw') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jalan" class="col-form-label">Jalan</label>
                    <div class="">
                        <input class="form-control" name="jalan" type="text" id="jalan"
                            value="{{ old('jalan') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="blok" class="col-form-label">Blok</label>
                    <div class="">
                        <input class="form-control" name="blok" type="text" id="blok"
                            value="{{ old('blok') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode-rumah" class="col-form-label">Kode RUmah</label>
                    <div class="">
                        <input class="form-control" name="kode-rumah" type="text" id="kode-rumah"
                            value="{{ old('kode-rumah') }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Rumah > Tambah data --}}

<!-- Modal Warga > Tambah data-->
<div class="modal fade" id="wargaModal" tabindex="-1" role="dialog" aria-labelledby="wargaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Tambah Data Warga</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="kode-rumah" class="col-form-label">Kode Rumah</label>
                    <div class="">
                        <input class="form-control" name="kode-rumah" type="text" id="kode-rumah"
                            value="{{ old('kode-rumah') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama</label>
                    <div class="">
                        <input class="form-control" name="nama" type="text" id="rw"
                            value="{{ old('nama') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="radio my-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="radio1" name="radion1" class="custom-control-input"
                                    checked="checked" />
                                <label class="custom-control-label">Pemilik</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="radio my-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="radio1" name="radion1" class="custom-control-input" />
                                <label class="custom-control-label">Penghuni</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan</label>
                    <div class="">
                        <input class="form-control" name="jabatan" type="text" id="jabatan"
                            value="{{ old('jabatan') }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Warga > Tambah data --}}

<!-- Modal undanganModal-->
<div class="card-body">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-auto align-self-center mt-0 text-success" id="myLargeModalLabel">Daftar
                        Pengajuan
                        Persetujuan
                        Bergabung Komunitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <table class="table table-hover mb-0" style="width: 100%">
                            <thead class="thead-default">
                                <tr class="text-center">
                                    <th>Kode Rumah</th>
                                    <th>Nama</th>
                                    <th>Pemilik</th>
                                    <th>Penghuni</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>34A</td>
                                    <td>Yusup</td>
                                    <td>
                                        <div class="radio my-2">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="radio5" name="radioDisabled"
                                                    class="custom-control-input" disabled="" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="radio my-2">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="radio6" name="radio06Disabled"
                                                    checked="checked" class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Warga</td>
                                    <td class="row d-flex justify-content-center">
                                        <div class="col-3 ">
                                            <button type="submit" class="btn btn-sm btn-success"><i
                                                    class="mdi mdi-account-check"></i></button>
                                        </div>
                                        <div class="col-6 ">
                                            <button type="submit" class="btn btn-sm btn-success"><i
                                                    class="dripicons-checkmark"></i></button>
                                            <button type="submit" class="btn btn-sm btn-success"><i
                                                    class="dripicons-cross"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                    <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal undanganModal --}}

<!-- Modal surat > tambah data jenis surat-->
<div class="modal fade" id="tambahsuratModal" tabindex="-1" role="dialog" aria-labelledby="tambahsuratModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Tambah Jenis Surat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenis-surat" class="col-form-label">Detail Iuran</label>
                    <div class="">
                        <input class="form-control" name="jenis-surat" type="text" id="jenis-surat"
                            placeholder="Masukan kategosi surat">
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
                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal surat > show data jenis surat --}}

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

<!-- Modal Iuran > Detail Iuran-->
<div class="modal fade" id="detailiuranModal" tabindex="-1" role="dialog" aria-labelledby="detailiuranModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Detail Iuran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenis-iuran" class="col-form-label">Jenis Iuran</label>
                    <div class="mb-2">
                        <input class="form-control" name="jenis-iuran" type="text" readonly id="jenis-iuran"
                            value="Iuran Awal">
                    </div>

                    <label for="tanggal" class="col-form-label">Tanggal</label>
                    <div class="mb-2">
                        <input class="form-control" name="tanggal" type="text" readonly id="tanggal"
                            value="1-06-2023">
                    </div>

                    <label for="jumlah-pembayaran" class="col-form-label">Jumlah Pembayaran</label>
                    <div class="mb-2">
                        <input class="form-control" name="jumlah-pembayaran" type="text" readonly
                            id="jumlah-pembayaran" value="Rp.500.000">
                    </div>

                    <label for="status-pembayaran" class="col-form-label">Status Pembayaran</label>
                    <div class="mb-2">
                        <span class="badge badge-boxed badge-info">Belum
                            bayar</span>
                    </div>

                    <label for="lokasi-kejadian" class="col-form-label">Metode pembayaran</label>
                    <div class="mb-2">
                        <p>M-Bankking = 0324242232 (Gunawan)</p>
                        <p>E-wallet = 085159079010 - Dana(Gunawan)</p>
                        <p>Cash = datang Langsung Ke Pak RT atau bendahara perumahan</p>
                    </div>
                </div>
                <button type="button" class="btn btn-success px-4 float-right"
                    onclick="window.location.href = '{{ route('bayar-iuran.index') }}';">
                    Bayar
                </button>
                <button type="button" class="btn btn-danger mr-2 px-4 float-right">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Iuran > Detail Iuran --}}

{{-- Modal Keuangan Belum ada akun --}}
{{-- <div class="modal fade" id="keuangan-edit-input" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h6>Sepertinya Anda belum memasukkan akun keuangan, apakah Anda ingin menambahkannya sekarang?</h6>
                <button type="button" class="btn btn-gray px-4 float-right ">Nanti Saja</button>
                <button type="submit" class="btn btn-success px-4 float-right mr-3"
                    onclick="location.href='{{ route('akun-keuangan.index') }}'">OK</button>
            </div>
        </div>
    </div>
</div> --}}
{{-- End Modal Keuangan Edit/Input --}}

{{-- Edit keuangan berdasarkan bulan --}}
<div class="modal fade" id="keuangan-edit-input" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-12">
                    <div class="card bg-transparent shadow-none">
                        <div class="card-body">
                            <div class="">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <h5>Saldo Awal Kas & Bank</h5>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="rom-group border-0">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rom-group">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="rom-group border-0">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rom-group">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="rom-group border-0">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="rom-group">
                                                    <input type="text"
                                                        style="border: none;
                                                    ">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-gray px-4 float-right ">Nanti Saja</button>
                <button type="submit" class="btn btn-success px-4 float-right mr-3"
                    onclick="location.href='{{ route('akun-keuangan.index') }}'">OK</button>
            </div>
        </div>
    </div>
</div>
{{-- EndEdit keuangan berdasarkan bulan --}}

{{-- Tambah akun keuangan --}}
<div class="modal fade" id="tambah-keuangan-edit-input" tabindex="-1" role="dialog"
    aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success text-center" id="exampleModalLongTitle">Tambah Akun
                    Keuangan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="">
                            <div class="form-group">
                                <label>Grup Akun</label>
                                <div>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kode Akun</label>
                                <div>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Akun</label>
                                <div>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger" type="button">Batal</button>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Tambah akun keuangan --}}
{{-- Modals Hapus data rumah --}}
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title align-self-center mt-0" id="exampleModalLabel">
                    Data dengan kode 12A akan di hapus, apa anda ingin melanjutkan?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                <button type="Update" class="btn btn-danger px-4 float-right mr-3">BATAL</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Hapus data rumah --}}
