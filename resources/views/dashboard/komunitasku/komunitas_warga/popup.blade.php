<!-- Modal Warga > Tambah data-->
<div class="modal fade" id="wargaModal" tabindex="-1" role="dialog" aria-labelledby="wargaModalLabel" aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Tambah Data Warga</h4>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ rouet }}"> --}}
                <form action="">
                    <div class="form-group">
                        <label for="kode_rumah" class="col-form-label " style="font-size: 14px;">Kode Rumah</label>
                        {{-- <input class="form-control mb-2 form-control-sm" name="kode-rumah" type="text"
                            id="kode-rumah" value="{{ old('kode-rumah') }}"> --}}
                        <select class="form-control" name="kode_rumah" type="text" id="kode_rumah">
                            <option value="1A">1A</option>
                            <option value="2A">2A</option>
                            <option value="3A">3A</option>
                        </select>

                        <label for="name" class="col-form-label" style="font-size: 14px;">Nama</label>
                        {{-- <input class="form-control mb-2 form-control-sm" name="nama" type="text" id="rw"
                            value="{{ old('nama') }}"> --}}
                        <select class="form-control" name="name" type="text" id="name">
                            <option value="gunawan">Gunawan</option>
                            <option value="wahyu">Wahyu</option>
                        </select>
                    </div>
                    <div class="row ml-2">
                        <div class="col-6 custom-control custom-radio my-2">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"
                                checked="checked">
                            <label class="custom-control-label" for="customRadio1">Pemilik</label>
                        </div>
                        <div class="col-6 custom-control custom-radio my-2">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Penghuni</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label" style="font-size: 14px;">Jabatan</label>
                        {{-- <input class="form-control mb-4 form-control-sm" name="jabatan" type="text" id="jabatan"
                            value="{{ old('jabatan') }}"> --}}
                        <select class="form-control" name="jabatan" type="text" id="jabatan">
                            <option value="warga">Warga</option>
                            <option value="rt">Ketua RT</option>
                            <option value="rw">Ketua RW</option>
                            <option value="lainnya">dan seterusnya</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-sm btn-success px-4 float-right">SIMPAN</button>
                    <button type="Update" class="btn-sm btn-danger px-4 float-right mr-3 waves-effect"
                        data-dismiss="modal">BATAL</button>
                </form>

            </div>
        </div>
    </div>
</div>
{{-- End Modal Warga > Tambah data --}}


<!-- Modal undanganModal-->
<div class="card-body">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title align-self-center mt-0 text-success" id="myLargeModalLabel">Daftar
                        Pengajuan
                        Persetujuan
                        Bergabung Komunitas</h5>
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
                                                <input type="radio" id="customRadio2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="radio my-2">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="radio6" name="radio2" checked="checked"
                                                    class="custom-control-input" />
                                                <label class="custom-control-label"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Warga</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-sm btn-success mr-2"><i
                                                class="dripicons-checkmark"></i></button>
                                        <button type="submit" class="btn btn-sm btn-success"><i
                                                class="dripicons-cross"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button>
                    <button type="Update" class="btn btn-danger px-4 float-right mr-3 waves-effect"
                        data-dismiss="modal">BATAL</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal undanganModal --}}

<!-- Modal Warga > edit data warga-->
<div class="modal fade" id="datadetailModal" tabindex="-1" role="dialog" aria-labelledby="datadetailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-auto text-success" id="exampleModalLongTitle">Tambah Data Detail Warga</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="rt" class="col-form-label" style="font-size: 14px;">RT</label>
                    <div class="">
                        <input class="form-control" name="rt" type="text" id="rt"
                            value="{{ old('rt', $rumah['rt']) }}" readonly>
                    </div>

                    <label for="rw" class="col-form-label">RW</label>
                    <div class="">
                        <input class="form-control" name="rw" type="text" id="rw"
                            value="{{ old('rw', $rumah['rw']) }}" readonly>
                    </div>

                    <label for="jalan" class="col-form-label">Jalan</label>
                    <div class="">
                        <input class="form-control" name="jalan" type="text" id="jalan"
                            value="{{ old('jalan', $rumah['jalan']) }}" readonly>
                    </div>

                    <label for="blok" class="col-form-label">Blok</label>
                    <div class="">
                        <input class="form-control" name="blok" type="text" id="blok"
                            value="{{ old('blok', $rumah['blok']) }}" readonly>
                    </div>

                    <label for="kode_rumah" class="col-form-label">Kode Rumah</label>
                    <div class="">
                        <input class="form-control" name="kode_rumah" type="text" id="kode_rumah"
                            value="{{ old('kode_rumah', $rumah['kode_rumah']) }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Warga > edit data warga --}}
