<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/amezia/vertical/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Sep 2018 09:28:59 GMT -->
<title>@yield('title')</title>

<head>
    <meta charset="utf-8" />
    <title>Siaga Kluwarga</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Themesbrand" name="Kluwarga" />
    @include('dashboard.layouts.link')
</head>

<body>
    @stack('style')

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span><img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm" />
                </span><span><img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg" /></span>
            </a>
        </div>
        <!-- END LOGO -->

        <!-- Navbar -->
        @include('dashboard.layouts.navbar')
        <!-- end navbar-->

    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper">

        <!-- Left Sidenav -->
        @include('dashboard.layouts.left-sidebar')
        <!-- end left-sidenav-->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container -->
            <footer class="footer text-center text-sm-left">
                &copy; Gunawan <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
            </footer>
        </div>


        <!-- end page content -->
    </div>

    @stack('javascript')
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    @include('dashboard.layouts.script')
    <script>
        $(document).ready(function() {
            var datarole1 = $('#role-1').html();
            var datarole2 = $('#role-2').html();
            var datarole3 = $('#role-3').html();
            var datarole4 = $('#role-4').html();
            var datarole5 = $('#role-5').html();
            var datarole6 = $('#role-6').html();
            var datarole7 = $('#role-7').html();

            //profil & alamat
            $('a.profil-alamat').click(function() {
                // Menambahkan
                $('a[href="#role-1"]').addClass('active');
                $('#role-1').addClass('active');
                $('div.isi').empty();
                $('div.isi').append(
                    '<div class="mb-4"><h4 class="text-success">Profil Komunitas</h4><hr class="border"><div class="form-group col-12"><label for="nama-komunitas" class="col-form-label">Nama Komunitas</label><div class=""><input class="form-control" name="nama-komunitas" type="text" id="nama-komunitas"value="Komunitas Perumahan Wakanda"></div></div><div class="form-group col-12"><label for="moto" class="col-form-label">Moto</label><div class=""><input class="form-control" name="moto" type="text" id="moto"value="Bersama-sama mari hidup rukun bertetangga"></div></div></div><h4 class="text-success">Domisili Komunitas</h4><hr class="border"><div class="form-group col-12"><label for="provinsi" class="col-form-label">Provinsi</label><div class=""><input class="form-control" name="provinsi" type="text" id="provinsi" value="DKI Jakarta"></div></div><div class="form-group col-12"><label for="kota/kabupaten" class="col-form-label">Kota/Kabupaten</label><div class=""><input class="form-control" name="kota/kabupaten" type="text" id="kota/kabupaten" value="Jakarta Barat"></div></div><div class="form-group col-12"><label for="kecamatan" class="col-form-label">Kecamatan</label><div class=""><input class="form-control" name="kecamatan" type="text" id="kecamatan" value="Palmerah"></div></div><div class="form-group col-12"><label for="kelurahan/desa" class="col-form-label">Kelurahan/Desa</label><div class=""><input class="form-control" name="kelurahan/desa" type="text" id="kelurahan/desa" value="Wakanda"></div></div><div class="form-group col-12"><label for="kode-pos" class="col-form-label">Kode Pos</label><div class=""><input class="form-control" name="kode-pos" type="text" id="kode-pos" value="12345"></div></div><button type="submit" class="btn btn-success px-4 float-right">SIMPAN</button><button type="submit" class="btn btn-danger px-4 float-right mr-2">BATAL</button>'
                );
                // Menghapus
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke profil
            $('a[href="#role-1"]').click(function() {
                $('.isi').html(datarole1);
            });
            //end profil & alamat

            //rumah
            $('a.rumah').click(function() {
                // Menambahkan
                $('a[href="#role-2"]').addClass('active');
                $('#role-2').addClass('active');
                $('div.isi-rumah').empty();
                $('div.isi-rumah').append(
                    '<div class="tab-pane p-3 isi-rumah" id="role-2" role="tabpanel"><div class="card"><div class="card-body"><div class="row justify-content-between"><div class="col-7"><i class="dripicons-view-list"></i><h4 class="mt-0 d-inline-block">Daftar Warga</h4></div><div class="col-5"><div class="input-group"><input type="cari" id="example-input2-group3" name="example-input2-group3"class="form-control" placeholder="Cari"><div class="input-group-append mr-2"><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-filter"></i></button><div class="dropdown-menu"><button class="dropdown-item" type="button">RT</button><button class="dropdown-item" type="button">RW</button><button class="dropdown-item" type="button">Jalan</button><button class="dropdown-item" type="button">Blok</button><button class="dropdown-item" type="button">Kode rumah</button></div></div><button type="Update" class="btn btn-primary" data-toggle="modal"data-target="#popupModal">+Tambah</button></div></div></div><hr><div class="table-responsive"><table class="table table-hover mb-0"><thead class="thead-default"><tr><th>No</th><th>RT</th><th>RW</th><th>Jalan</th><th>Blok</th><th>Kode Rumah</th><th>Action</th></tr></thead><tbody><tr><td>1</td><td>01</td><td>02</td><td>Jl. satu dua</td><td>Blok satu</td><td>12A</td><td><a href="{{ route('edit-rumah.index') }}" class=""><i class="fa fa-edit mr-2"style="font-size: 20px"></i></a><a href="#" class=""><i class="fa fa-trash-o text-danger mr-2"style="font-size: 20px"></i></a></td></tr></tbody></table></div><hr></div></div></div>'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke rumah
            $('a[href="#role-2"]').click(function() {
                $('.isi-rumah').html(datarole2);
            });
            //end rumah

            //warga
            $('a.warga').click(function() {
                // Menambahkan
                $('a[href="#role-3"]').addClass('active');
                $('#role-3').addClass('active');
                $('div.isi-warga').empty();
                $('div.isi-warga').append(
                    '<div class="tab-pane p-3 isi-warga" id="role-3" role="tabpanel"><div class="card"><div class="card-body"><div class="justify-content-between"><div class="row"><div class="col-6"><i class="dripicons-view-list"></i><h4 class="mt-0 d-inline-block">Daftar Warga</h4></div><div class="col-6"><div class="row"><div class="col-7"><div class="input-group"><input type="cari" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Cari"><div class="input-group-append"><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-filter"></i></button><div class="dropdown-menu"><button class="dropdown-item" type="button">Kode rumah</button><button class="dropdown-item" type="button">Pemilik</button><button class="dropdown-item" type="button">Penghuni</button><button class="dropdown-item" type="button">Jabatan</button></div></div></div></div><div class="col-5"><button type="Update" class="btn btn-primary mr-1" data-toggle="modal" data-target="#wargaModal">+Tambah</button><button type="Update" class="btn btn-light waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="mdi mdi-account-check"></i></button></div></div></div></div></div><hr><div class="table-responsive"><table class="table table-hover mb-0"><thead class="thead-default"><tr><th>Kode Rumah</th><th>Nama</th><th>Pemilik</th><th>Penghuni</th><th>Jabatan</th><th>Action</th></tr></thead><tbody><tr><td>12A</td><td>Bambang</td><td><div class="radio my-2"><div class="custom-control custom-radio"><input type="radio" id="radio1" name="radion1" class="custom-control-input" checked="checked" /><label class="custom-control-label"></label></div></div></td><td><div class="radio my-2"><div class="custom-control custom-radio"><input type="radio" id="radio1" name="radion1" class="custom-control-input" /><label class="custom-control-label"></label></div></div></td><td>Warga</td><td><a href="{{ route('edit-warga.index') }}" class=""><i class="fa fa-edit mr-2" style="font-size: 20px"></i></a><a href="#" class=""><i class="fa fa-trash-o text-danger mr-2" style="font-size: 20px"></i></a></td></tr><tr><td>23A</td><td>Gunawan</td><td><div class="radio my-2"><div class="custom-control custom-radio"><input type="radio" id="radio5" name="radioDisabled" class="custom-control-input" disabled="" /><label class="custom-control-label"></label></div></div></td><td><div class="radio my-2"><div class="custom-control custom-radio"><input type="radio" id="radio6" name="radioDisabled" checked="checked" class="custom-control-input" /><label class="custom-control-label"></label></div></div></td><td>Ketua RT</td><td><a href="{{ route('edit-warga.index') }}" class=""><i class="fa fa-edit mr-2" style="font-size: 20px"></i></a><a href="#" class=""><i class="fa fa-trash-o text-danger mr-2" style="font-size: 20px"></i></a></td></tr></tbody></table></div><hr></div></div><br><div class="row"><div class="col-5"><h4 class="text-center">Undang Member Komunitas</h4><p class="text-center">Undang anggota kedalam komunitas dengan <br>menggunakan link/e-mail di bawah ini</p><div class=""><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div><input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="jbaKSasxsxjncaa" /></div><div class="d-flex justify-content-center"><button type="input" class="btn btn-danger px-4"><i class="mdi mdi-email-open"></i>Email</button></div></div></div><div class="col-2"><h5 class="text-center">Atau</h5></div><div class="col-5"><p class="text-center">Undang anggota keluargamu dengan <br> QR dibawah ini</p><img src="{{ asset('image/qrcode.jpeg') }}" alt="" class="mx-auto d-block"></div></div></div>'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke warga
            $('a[href="#role-3"]').click(function() {
                $('.isi-warga').html(datarole3);
            });
            //end warga

            //Iuran
            $('a.iuran').click(function() {
                // Menambahkan
                $('a[href="#role-4"]').addClass('active');
                $('#role-4').addClass('active');
                $('div.isi-iuran').empty();
                $('div.isi-iuran').append(
                    '<div class="tab-pane p-3 isi-iuran" id="role-4" role="tabpanel"><div class="card"><div class="card-body"><div class="d-flex justify-content-between"><div class="form-group"><i class="dripicons-view-list mr-2"></i><h4 class="mt-0 d-inline-block">Daftar Warga</h4></div><div class=""><div class="input-group"><a href="{{ route('konfirmasi-iuran.index') }}" class="btn btn-primary mr-2">Konfirmasi Iuran warga</a><a href="{{ route('tambah-iuran.index') }}" class="btn btn-primary">+Tambah Iuran</a></div></div></div><hr><div class="row"><div class="col-md-12"><div class="table-responsive"><table id="datatable" class="table table-bordered"><thead><tr><th>Nama Iuran</th><th>Jumlah</th><th>Periode</th><th>Jenis</th><th>Penanggunng Jawab</th><th>Action</th></tr></thead><tbody><tr><td>Iuran Awal</td><td>Rp.500.000</td><td>Satu Kali</td><td>Wajib</td><td>Pemilik</td><td><a href="{{ route('edit-iuran.index') }}"><i class="fa fa-edit mr-2 font-20"></i></a><a href="#"><i class="fa fa-trash mr-2 font-20 text-danger"></i></a></td></tr><tr><td>Iuran Awal</td><td>Rp.100.000</td><td>Satu Kali</td><td>Wajib</td><td>Penghuni</td><td><a href="{{ route('edit-iuran.index') }}"><i class="fa fa-edit mr-2 font-20"></i></a><a href="#"><i class="fa fa-trash mr-2 font-20 text-danger"></i></a></td></tr></tbody></table></div></div></div><hr></div></div></div>'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke Iuran
            $('a[href="#role-4"]').click(function() {
                $('.isi-iuran').html(datarole4);
            });
            //end Iuran




            //Keuangan
            $('a.keuangan').click(function() {
                // Menambahkan
                $('a[href="#role-5"]').addClass('active');
                $('#role-5').addClass('active');
                $('div.isi-keuangan').empty();
                $('div.isi-keuangan').append(
                    '<div class="tab-pane p-3 isi-keuangan" id="role-5" role="tabpanel"><div class="card"><div class="card-body"><div class="justify-content-between"><div class="row"><div class="col-4"><h4 class="mt-0 d-inline-block">Input Laporan Keuangan</h4></div><div class="col-8"><div class="d-flex justify-content-end px-3 py-3 mb-0"><div class="border-right mr-1"><a href="{{ route('akun-keuangan.index') }}" class="btn btn-outline-info btn-sm mr-2 mt-1">Edit Akun Keuangan</a></div><i class="mdi mdi-calendar-today mr-2" style="font-size: 30px"></i><select class="form-control w-25 mr-2"><option>Tahun</option><option>Tahun 1</option><option>Tahun 2</option></select><div></div></div></div></div></div><caption><strong><i>*Input laporan keuangan dapat menekan bulan yang dituju</i></strong></caption><hr><div class="table-responsive"><table id="table" class="table table-hover table-bordered table table-sm"><thead><tr><th style="width: 210px">Saldo Awal Kas & Bank</th><th class="text-success" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Jan</th><th class="text-danger" data-toggle="modal" style="cursor: pointer"data-target="#keuangan-edit-input">Feb</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Mar</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Apr</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Mei</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Jun</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Jul</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Agt</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Sep</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Okt</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Nov</th><th class="text-danger" data-toggle="modal" style="cursor: pointer" data-target="#keuangan-edit-input">Des</th></tr></thead><tbody><tr><td>101 Bank BCA</td><td>200000</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr><td>Total Saldo Awal Kas & Bank</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr></tbody></table></div><div class="table-responsive"><table id="table" class="table table-hover table-bordered table table-sm"><thead><tr><th style="width: 210px">Pemasukan</th><th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>Mei</th><th>Jun</th><th>Jul</th><th>Agt</th><th>Sep</th><th>Okt</th><th>Nov</th><th>Des</th></tr></thead><tbody><tr><td>Iuran Wajib</td><td>200000</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr><td>Total Pemasukan</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr></tbody></table></div><div class="table-responsive"><table id="table" class="table table-hover table-bordered table table-sm"><thead><tr><th style="width: 210px">Pengeluaran</th><th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>Mei</th><th>Jun</th><th>Jul</th><th>Agt</th><th>Sep</th><th>Okt</th><th>Nov</th><th>Des</th></tr></thead><tbody><tr><td>Biaya Operasional</td><td>200000</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr><tr><td>Total Total Pengeluaran</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr></tbody></table></div></div></div></div>'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke Keuangan
            $('a[href="#role-6"]').click(function() {
                $('.isi-keuangan').html(datarole5);
            });
            //end Keuangan

            //Surat
            $('a.surat').click(function() {
                // Menambahkan
                $('a[href="#role-6"]').addClass('active');
                $('#role-6').addClass('active');
                $('div.isi-surat').empty();
                $('div.isi-surat').append(
                    '<div class="tab-pane p-3 isi-surat" id="role-6" role="tabpanel"><div class="card "><div class="card-body"><div class="d-flex justify-content-between"><div class=""><h4 class="mt-0 d-inline-block">Permintaan Surat</h4></div><div><button type="Update" class="btn btn-primary" data-toggle="modal" data-target="#tambahsuratModal">+ Tambah</button></div></div><hr><div class="table"><h5>Jenis Surat :</h5><select class="form-control"><option>Jenis Surat</option><option>Surat Keterangan Domisili</option><option>Surat 2</option><option>Surat 3</option></select><h6>Data yang di butuhkan</h6><hr><div class="row"><div class="col-4"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox1" data-parsley-multiple="groups" data-parsley-mincheck="1"><label class="custom-control-label" for="checkbox1">Nama Lengkap</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox2" data-parsley-multiple="groups" data-parsley-mincheck="2" value="1"><label class="custom-control-label" for="checkbox2">Jenis Surat</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox3" data-parsley-multiple="groups" data-parsley-mincheck="3"><label class="custom-control-label" for="checkbox3">Tempat/Tanggal lahir</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox4" data-parsley-multiple="groups" data-parsley-mincheck="4"><label class="custom-control-label" for="checkbox4">Pekerjaan</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox5" data-parsley-multiple="groups" data-parsley-mincheck="5"><label class="custom-control-label" for="checkbox5">Agama</label></div></div><div class="col-4"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox6" data-parsley-multiple="groups" data-parsley-mincheck="6"><label class="custom-control-label" for="checkbox6">Status Perkawinan</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox7" data-parsley-multiple="groups" data-parsley-mincheck="7"><label class="custom-control-label" for="checkbox7">Kewarganegaraan</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox8" data-parsley-multiple="groups" data-parsley-mincheck="8"><label class="custom-control-label" for="checkbox8">Nomor NIK/Passpor</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox9" data-parsley-multiple="groups" data-parsley-mincheck="9"><label class="custom-control-label" for="checkbox9">Nomor Kartu Keluarga</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox10" data-parsley-multiple="groups" data-parsley-mincheck="10"><label class="custom-control-label" for="checkbox10">Alamat Sesuai KTP</label></div></div><div class="col-4"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox11" data-parsley-multiple="groups" data-parsley-mincheck="11"><label class="custom-control-label" for="checkbox11">Alamat Domisili</label></div><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="checkbox12" data-parsley-multiple="groups" data-parsley-mincheck="12"><label class="custom-control-label" for="checkbox12">Keperluan</label></div></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="card"><div class="card-body"><h4 class="mt-0 text-success">Data Jenis Surat</h4><div class="table-responsive"><table id="datatable" class="table table-bordered"><thead><tr><th>No</th><th>Jenis Surat</th><th>Action</th></tr></thead><tbody><tr><td>1</td><td>Surat Keterangan Domisili</td><td><a href="#" class="" data-toggle="modal" data-target="#showModal"><i class="fa fa-eye mr-2" style="font-size: 20px"></i></a><a href="{{ route('edit-data-surat.index') }}" class=""><i class="fa fa-edit mr-2" style="font-size: 20px"></i></a><a href="#" class=""><i class="fa fa-trash-o text-danger mr-2" style="font-size: 20px"></i></a></td></tr></tbody></table></div></div></div></div></div></div>'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-7"]').removeClass('active');
                $('#role-7').removeClass('active');
            });
            //kembali ke Surat
            $('a[href="#role-6"]').click(function() {
                $('.isi-surat').html(datarole6);
            });
            //end Surat

            //Informasi
            $('a.informasi').click(function() {
                // Menambahkan
                $('a[href="#role-7"]').addClass('active');
                $('#role-7').addClass('active');
                $('div.isi-informasi').empty();
                $('div.isi-informasi').append(
                    '<div class="tab-pane p-3 isi-informasi" id="role-7" role="tabpanel"><div class="card bg-transparent shadow-none"><div class="card-body"><div class="mb-4"><div class="row"><div class="col-10"><h3 class="mt-0 d-inline-block">Informasi</h3></div><div class="col-2 text-right"><a href="{{ route('tambah-informasi.index') }}" class="btn btn-primary">+Tambah</a></div></div><hr></div><div class="row"><div class="col-lg-4"><div class="card card-body"><h4 class="card-title mt-0">kebijakan baru di perumahan wakanda</h4><p class="card-text text-muted font-13">With supporting text below as a natural lead-in to additional content.</p><a href="{{ route('detail-informasi.index') }}" class="btn btn-primary">Selengkapnya</a></div></div><div class="col-lg-4"><div class="card card-body"><h4 class="card-title mt-0">Undangan Rapat Masyarakat Wakanda</h4><p class="card-text text-muted font-13">With supporting text below as a natural lead-in to additional content.</p><a href="{{ route('detail-informasi.index') }}" class="btn btn-primary">Selengkapnya</a></div></div><div class="col-lg-4"><div class="card card-body"><h4 class="card-title mt-0">Pengumuman kerja bakti</h4><p class="card-text text-muted font-13">With supporting text below as a natural lead-in to additional content.</p><a href="{{ route('detail-informasi.index') }}" class="btn btn-primary">Selengkapnya</a></div></div></div></div></div></div>'
                    // 'Halaman admin informasi'
                );
                // Menghapus
                $('a[href="#role-1"]').removeClass('active');
                $('#role-1').removeClass('active');
                $('a[href="#role-2"]').removeClass('active');
                $('#role-2').removeClass('active');
                $('a[href="#role-3"]').removeClass('active');
                $('#role-3').removeClass('active');
                $('a[href="#role-4"]').removeClass('active');
                $('#role-4').removeClass('active');
                $('a[href="#role-5"]').removeClass('active');
                $('#role-5').removeClass('active');
                $('a[href="#role-6"]').removeClass('active');
                $('#role-6').removeClass('active');
            });
            //kembali ke Surat
            $('a[href="#role-7"]').click(function() {
                $('.isi-informasi').html(datarole7);
            });
            //end Surat

        });
    </script>
    <script>
        $(function() {
            $("#select-iuran").change(function() {
                var iuran = $(this).val();
                var isAdded = false;
                if (iuran === "lainnya" && !isAdded) {
                    isAdded = true;
                    $("#select-iuran").after(
                        '<div class="form-group" id="tambah_iuran">' +
                        '<form method="POST" action="">' +
                        '@csrf' +
                        '<label for="nama_iuran" class="col-form-label">Tambah Nama Iuran</label>' +
                        '<div class="mb-2">' +
                        ' <input class="form-control" name="nama_iuran" type="text" id="nama_iuran"' +
                        'value="{{ old('nama_iuran') }}">' +
                        '</div>' +
                        '<button type="submit" class="btn btn-sm btn-success">Simpan</button>' +
                        '</form>' +
                        '</div>'
                    );
                } else {
                    $("#tambah_iuran").remove();
                    isAdded = false;
                }
            });

            $("#select-periode").change(function() {
                var periode = $(this).val();
                var isAdded = false;
                if (periode === "lainnya" && !isAdded) {
                    isAdded = true;
                    $("#select-periode").after(
                        '<div class="form-group" id="tambah_periode">' +
                        '<form method="POST" action="">' +
                        '@csrf' +
                        '<label for="nama_periode" class="col-form-label">Tambah Nama Periode</label>' +
                        '<div class="mb-2">' +
                        ' <input class="form-control" name="nama_periode" type="text" id="nama_periode"' +
                        'value="{{ old('nama_periode') }}">' +
                        '</div>' +
                        '<button type="submit" class="btn btn-sm btn-success">Simpan</button>' +
                        '</form>' +
                        '</div>'
                    );
                } else {
                    $("#tambah_periode").remove();
                    isAdded = false;
                }
            });

            $("#select-jenis").change(function() {
                var jenis = $(this).val();
                var isAdded = false;
                if (jenis === "lainnya" && !isAdded) {
                    isAdded = true;
                    $("#select-jenis").after(
                        '<div class="form-group" id="tambah_jenis">' +
                        '<form method="POST" action="">' +
                        '@csrf' +
                        '<label for="nama_jenis" class="col-form-label">Tambah Nama Jenis</label>' +
                        '<div class="mb-2">' +
                        ' <input class="form-control" name="nama_jenis" type="text" id="nama_jenis"' +
                        'value="{{ old('nama_jenis') }}">' +
                        '</div>' +
                        '<button type="submit" class="btn btn-sm btn-success">Simpan</button>' +
                        '</form>' +
                        '</div>'
                    );
                } else {
                    $("#tambah_jenis").remove();
                    isAdded = false;
                }
            });

            $("#select-penanggungjawab").change(function() {
                var penanggungjawab = $(this).val();
                var isAdded = false;
                if (penanggungjawab === "lainnya" && !isAdded) {
                    isAdded = true;
                    $("#select-penanggungjawab").after(
                        '<div class="form-group" id="tambah_penanggungjawab">' +
                        '<form method="POST" action="">' +
                        '@csrf' +
                        '<label for="nama_penanggungjawab" class="col-form-label">Tambah Nama Penanggung Jawab</label>' +
                        '<div class="mb-2">' +
                        ' <input class="form-control" name="nama_penanggungjawab" type="text" id="nama_penanggungjawab"' +
                        'value="{{ old('nama_penanggungjawab') }}">' +
                        '</div>' +
                        '<button type="submit" class="btn btn-sm btn-success">Simpan</button>' +
                        '</form>' +
                        '</div>'
                    );
                } else {
                    $("#tambah_penanggungjawab").remove();
                    isAdded = false;
                }
            });
        });
    </script>
    <script>
        $(function() {
            let level1Counter = 0,
                level2Counter = 0,
                level3Counter = 0;

            $(".btn-parent").click(function(e) {
                ParentTambahlvlSatu(level1Counter);
                level1Counter++;
            });

            $(".btn-1").click(function(e) {
                ParentTambahlvlDua(level2Counter);
                level2Counter++;
            });

            $(".btn-2").click(function(e) {
                ParentTambahlvlTiga(level3Counter);
                level3Counter++;

            });
        });

        function ParentTambahlvlSatu(counter) {
            $(".level-3").after(
                `<div class="row level-3">
                    <div class="col-sm-1 border d-flex justify-content-center align-items-center mb-3 ml-3"
                        style=" height: 50px;">
                        Level 1
                    </div>
                    <div class="col-sm-3 border d-flex flex-column" style=" height: 50px;">
                        <label class="control-label d-block" style="font-size: 11px;">Kepengurusan</label>
                        <select name="car[0][make]" class="form-control bg-transparent shadow-none border-0"
                            style="margin-top: -13px; margin-left: -16px">
                            <option value="rw" selected="">[RW] Rukun Warga</option>
                            <option value="rt">[RT] Rukun Tetangga]</option>
                            <option value="sekretaris">Sekertaris</option>
                            <option value="sekretaris">[Blok] Blok Perumahan</option>
                        </select>
                    </div>
                    <div class="col-sm-2 border d-flex flex-column" style=" height: 50px;">
                        <label class="control-label d-block" style="font-size: 11px;">Deskripsi</label>
                        <input type="text" name="car[0][model]" value="RW 03"
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
                                <button type="Button" data-repeater-create=""
                                    class="btn btn-primary px-3 py-0">+Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>`
            );
        }

        function ParentTambahlvlDua(counter) {
            $(".level-2").after(
                `<div class="row level-2">
                    <div class="col-sm-1 border d-flex justify-content-center align-items-center mb-3 ml-5"
                        style=" height: 50px;">
                        Level 2
                    </div>
                    <div class="col-sm-3 border d-flex flex-column" style=" height: 50px;">
                        <label class="control-label d-block" style="font-size: 11px;">Kepengurusan</label>
                        <select name="car[0][make]"
                            class="form-control bg-transparent shadow-none border-0"
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
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox1" data-parsley-multiple="groups"
                                            data-parsley-mincheck="1">
                                        <label class="custom-control-label" for="checkbox1">K</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox2" data-parsley-multiple="groups"
                                            data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="checkbox2">WK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox3" data-parsley-multiple="groups"
                                            data-parsley-mincheck="3">
                                        <label class="custom-control-label" for="checkbox3">S</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox4" data-parsley-multiple="groups"
                                            data-parsley-mincheck="4">
                                        <label class="custom-control-label" for="checkbox4">B</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox5" data-parsley-multiple="groups"
                                            data-parsley-mincheck="5">
                                        <label class="custom-control-label" for="checkbox5">P</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <button type="button" class="btn btn-primary px-3 py-0 btn-2">+Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>`
            );
        }

        function ParentTambahlvlTiga(counter) {
            $(".level-3").after(
                `<div class="row level-3">
                    <div class="col-sm-1 border d-flex justify-content-center align-items-center mb-3"
                        style=" height: 50px; margin-left:75px">
                        Level 3
                    </div>
                    <div class="col-sm-3 border d-flex flex-column" style=" height: 50px;">
                        <label class="control-label d-block" style="font-size: 11px;">Kepengurusan</label>
                        <select name="car[0][make]"
                            class="form-control bg-transparent shadow-none border-0"
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
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox1" data-parsley-multiple="groups"
                                            data-parsley-mincheck="1">
                                        <label class="custom-control-label" for="checkbox1">K</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox2" data-parsley-multiple="groups"
                                            data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="checkbox2">WK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox3" data-parsley-multiple="groups"
                                            data-parsley-mincheck="3">
                                        <label class="custom-control-label" for="checkbox3">S</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox4" data-parsley-multiple="groups"
                                            data-parsley-mincheck="4">
                                        <label class="custom-control-label" for="checkbox4">B</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-1">
                                        <input type="checkbox" class="custom-control-input"
                                            id="checkbox5" data-parsley-multiple="groups"
                                            data-parsley-mincheck="5">
                                        <label class="custom-control-label" for="checkbox5">P</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
            );
        }
    </script>
</body>
<!-- Mirrored from themesbrand.com/amezia/vertical/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Sep 2018 09:33:55 GMT -->

</html>
