<!-- Tambah data rumah-->
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Tambah Data Rumah</h4>
            </div>
            <div class="modal-body m-3">
                <form action="{{ route('rumah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="rt" class="col-form-label">RT</label>
                        <input class="form-control form-control-sm" name="rt" type="text" id="rt"
                            value="{{ old('rt') }}" placeholder="Masukan RT berapa rumah anda"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>

                        <label for="rw" class="col-form-label">RW</label>
                        <input class="form-control form-control-sm" name="rw" type="text" id="rw"
                            value="{{ old('rw') }}" placeholder="Masukan RW berapa rumah anda"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>

                        <label for="jalan" class="col-form-label">Jalan</label>
                        <input class="form-control form-control-sm" name="jalan" type="text" id="jalan"
                            value="{{ old('jalan') }}" placeholder="Masukan nama jalan rumah anda">

                        <label for="blok" class="col-form-label">Blok</label>
                        <input class="form-control form-control-sm" name="blok" type="text" id="blok"
                            value="{{ old('blok') }}" placeholder=" Masukan nama blok rumah anda">

                        <label for="kode_rumah" class="col-form-label">Kode Rumah</label>
                        <input class="form-control form-control-sm" name="kode_rumah" type="text" id="kode_rumah"
                            value="{{ old('kode_rumah') }}" placeholder="Masukan nomor kode rumah anda">
                    </div>
                    <button type="submit" class="btn-sm btn-success px-4 float-right">SIMPAN</button>
                    <button type="button" class="btn-sm btn-danger px-4 float-right mr-3 waves-effect"
                        data-dismiss="modal">BATAL</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Tambah data rumah -->

<!-- Modals Edit data rumah-->
@forelse ($rumah as $data)
    <div class="modal fade" id="editDataModal{{ $data['id'] }}" tabindex="-1" role="dialog"
        aria-labelledby="editDataModalLabel" aria-hidden="true">
        <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="modal-title text-success" id="exampleModalLongTitle">Edit Data Rumah</h4>
                </div>
                <div class="modal-body m-3">
                    <form action="{{ route('rumah.update', $data['id']) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="rt" class="col-form-label" style="font-size: 14px;">RT</label>
                            <input class="form-control form-control-sm" name="rt" type="text" id="rt"
                                value="{{ old('rt', $data['rt'] ?? '') }}">

                            <label for="rw" class="col-form-label" style="font-size: 14px;">RW</label>
                            <input class="form-control form-control-sm" name="rw" type="text" id="rw"
                                value="{{ old('rw', $data['rw'] ?? '') }}">

                            <label for="jalan" class="col-form-label" style="font-size: 14px;">Jalan</label>
                            <input class="form-control form-control-sm" name="jalan" type="text" id="jalan"
                                value="{{ old('jalan', $data['jalan'] ?? '') }}">

                            <label for="blok" class="col-form-label" style="font-size: 14px;">Blok</label>
                            <input class="form-control form-control-sm" name="blok" type="text" id="blok"
                                value="{{ old('blok', $data['blok'] ?? '') }}">

                            <label for="kode_rumah" class="col-form-label" style="font-size: 14px;">Kode
                                Rumah</label>
                            <input class="form-control form-control-sm" name="kode_rumah" type="text"
                                id="kode_rumah" value="{{ old('kode_rumah', $data['kode_rumah'] ?? '') }}">
                        </div>
                        <button type="submit" class="btn-sm btn-success px-4 float-right">SIMPAN</button>
                        <button type="button" class="btn-sm btn-danger px-4 float-right mr-3 waves-effect"
                            data-dismiss="modal">BATAL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse
<!-- End Modals Edit data rumah-->
