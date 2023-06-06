<option value="sekretaris" selected="">[Blok] Blok Perumahan</option>



<div data-repeater-list="car">
    <div data-repeater-item="">
        <!-- Level Level 2 -->
        <div class="row">
            <div class="col-sm-1 border d-flex justify-content-center align-items-center mb-3 ml-3"
                style=" height: 50px;">
                Level 2
            </div>
            <div class="col-sm-3 border d-flex flex-column" style=" height: 50px;">
                <label class="control-label d-block" style="font-size: 11px;">Kepengurusan</label>
                <select name="car[0][make]" class="form-control bg-transparent shadow-none border-0"
                    style="margin-top: -13px; margin-left: -16px">
                    <option value="rw">[RW] Rukun Warga</option>
                    <option value="rt" selected="">[RT] Rukun Tetangga</option>
                    <option value="sekretaris">Sekertaris</option>
                    <option value="sekretaris">[Blok] Blok Perumahan</option>
                </select>
            </div>
            <div class="col-sm-2 border d-flex flex-column" style=" height: 50px;">
                <label class="control-label d-block" style="font-size: 11px;">Deskripsi</label>
                <input type="text" name="car[0][model]" value="RT 03"
                    class="form-control bg-transparent shadow-none border-0"
                    style="margin-top: -13px; margin-left: -12px">
            </div>
            <div class="col-sm-5 border d-flex flex-column" style=" height: 50px;">
                <div class="row">
                    <div class="col-8">
                        <label class="control-label d-block" style="font-size: 11px;">Fungsi
                            Pengurus</label>
                        <div class="d-flex justify-content-between">
                            <div class="custom-control custom-checkbox mr-1">
                                <input type="checkbox" class="custom-control-input" id="checkbox1"
                                    data-parsley-multiple="groups" data-parsley-mincheck="1">
                                <label class="custom-control-label" for="checkbox1">K</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-1">
                                <input type="checkbox" class="custom-control-input" id="checkbox2"
                                    data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="checkbox2">WK</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-1">
                                <input type="checkbox" class="custom-control-input" id="checkbox3"
                                    data-parsley-multiple="groups" data-parsley-mincheck="3">
                                <label class="custom-control-label" for="checkbox3">S</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-1">
                                <input type="checkbox" class="custom-control-input" id="checkbox4"
                                    data-parsley-multiple="groups" data-parsley-mincheck="4">
                                <label class="custom-control-label" for="checkbox4">B</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-1">
                                <input type="checkbox" class="custom-control-input" id="checkbox5"
                                    data-parsley-multiple="groups" data-parsley-mincheck="5">
                                <label class="custom-control-label" for="checkbox5">P</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-primary px-3 py-0">+Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Level Level 3 -->
<div class="row">
    <div class="col-sm-1 border d-flex justify-content-center align-items-center mb-3 ml-3" style=" height: 50px;">
        Level 3
    </div>
    <div class="col-sm-3 border d-flex flex-column" style=" height: 50px;">
        <label class="control-label d-block" style="font-size: 11px;">Kepengurusan</label>
        <select name="car[0][make]" class="form-control bg-transparent shadow-none border-0"
            style="margin-top: -13px; margin-left: -16px">
            <option value="rw">[RW] Rukun Warga</option>
            <option value="rt">[RT] Rukun Tetangga]</option>
            <option value="sekretaris">Sekertaris</option>
            <option value="sekretaris" selected="">[Blok] Blok Perumahan</option>
        </select>
    </div>
    <div class="col-sm-2 border d-flex flex-column" style=" height: 50px;">
        <label class="control-label d-block" style="font-size: 11px;">Deskripsi</label>
        <input type="text" name="car[0][model]" value="Blok Perumahan"
            class="form-control bg-transparent shadow-none border-0" style="margin-top: -13px; margin-left: -12px">
    </div>
    <div class="col-sm-5 border d-flex flex-column" style=" height: 50px;">
        <div class="row">
            <div class="col-8">
                <label class="control-label d-block" style="font-size: 11px;">Fungsi
                    Pengurus</label>
                <div class="d-flex justify-content-between">
                    <div class="custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="custom-control-input" id="checkbox1"
                            data-parsley-multiple="groups" data-parsley-mincheck="1">
                        <label class="custom-control-label" for="checkbox1">K</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="custom-control-input" id="checkbox2"
                            data-parsley-multiple="groups" data-parsley-mincheck="2">
                        <label class="custom-control-label" for="checkbox2">WK</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="custom-control-input" id="checkbox3"
                            data-parsley-multiple="groups" data-parsley-mincheck="3">
                        <label class="custom-control-label" for="checkbox3">S</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="custom-control-input" id="checkbox4"
                            data-parsley-multiple="groups" data-parsley-mincheck="4">
                        <label class="custom-control-label" for="checkbox4">B</label>
                    </div>
                    <div class="custom-control custom-checkbox mr-1">
                        <input type="checkbox" class="custom-control-input" id="checkbox5"
                            data-parsley-multiple="groups" data-parsley-mincheck="5">
                        <label class="custom-control-label" for="checkbox5">P</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
