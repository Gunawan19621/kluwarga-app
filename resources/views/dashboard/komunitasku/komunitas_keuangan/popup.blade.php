<!-- Modal tambah kategori akun -->
<div class="modal fade" id="tambah-kategori-akun" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Tambah
                    Kategori Akun Keuangan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="">
                            <div class="form-group mb-4">
                                <label for="kategori-akun" class="col-form-label" style="font-size: 14px;">Kategori akun
                                    baru</label>
                                <input class="form-control" type="text" name="kategori-akun" id="kategori-akun">
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger waves-effect px-4 mr-2" type="button"
                                    data-dismiss="modal">Batal</button>
                                <button class="btn btn-success px-4" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End modal tambah kategori akun -->

<!-- Modal tambah akun keuangan -->
<div class="modal fade" id="tambah-akun-keuangan" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title text-success" id="exampleModalLongTitle">Tambah Akun
                    Keuangan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="">
                            <div class="form-group">
                                <label for="kategori-akun" class="col-form-label" style="font-size: 14px;">Grup
                                    Akun</label>
                                <div class="mb-2">
                                    <select class="form-control">
                                        <option>Kas & Bank</option>
                                        <option>Pengeluaran</option>
                                        <option>Pemasukan</option>
                                    </select>
                                </div>

                                <label for="kode-akun" class="col-form-label" style="font-size: 14px;">Kode Akun</label>
                                <input class="form-control mb-2" type="text" name="" id="">

                                <label for="nama-akun" class="col-form-label" style="font-size: 14px;">Nama Akun</label>
                                <input class="form-control mb-2" type="text" name="" id="">

                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger waves-effect px-4 mr-2" type="button"
                                    data-dismiss="modal">Batal</button>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End modal tambah akun keuangan -->

{{-- Edit keuangan berdasarkan bulan Di pake --}}
<div class="modal fade" id="keuangan-edit-input" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ml-auto modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>INPUT LAPORAN KEUANGAN</h4>
                <form action="">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <input class="form-control" style="height: 30px;" name="tahun" type="text"
                                            readonly id="tahun" value="2023">
                                        <label for="tahun"><i>Tahun</i></label>
                                    </div>
                                    <div class="col-6">
                                        <input class="form-control" style="height: 30px;" name="bulan" type="text"
                                            readonly id="bulan" value="Januari">
                                        <label for="bulan"><i>Bulan</i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <h5>Saldo Awal Kas & Bank</h5>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="rom-group border-0">
                                        101 Bank BCA
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="rom-group">
                                        <input type="text"
                                            style="border: none;
                                            ">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%">
                                    <div class="rom-group border-0">
                                        <strong>Total Saldo awal & Bank</strong>
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="rom-group">
                                        <input type="text"
                                            style="border: none;
                                            ">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <h5>Pemasukan</h5>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 50%">
                                    <div class="rom-group border-0">
                                        Iuran Wajib
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="rom-group">
                                        <input type="text"
                                            style="border: none;
                                            ">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%">
                                    <div class="rom-group border-0">
                                        <strong>Total Pemasukan</strong>
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="rom-group">
                                        <input type="text"
                                            style="border: none;
                                            ">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <h5>Pengeluaran</h5>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 50%">
                                    <div class="rom-group border-0">
                                        Biaya Operasional
                                    </div>
                                </td>
                                <td style="width: 50%">
                                    <div class="rom-group">
                                        <input type="text"
                                            style="border: none;
                                            ">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%">
                                    <div class="rom-group border-0">
                                        <strong>Total Pengeluaran</strong>
                                    </div>
                                </td style="width: 50%">
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
                    <div class="text-right">
                        <button class="btn btn-danger waves-effect px-4 mr-2" type="button"
                            data-dismiss="modal">Batal</button>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- EndEdit keuangan berdasarkan bulan --}}
