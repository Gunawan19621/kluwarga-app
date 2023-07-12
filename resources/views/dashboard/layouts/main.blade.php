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

    <!-- Alert pengaturan-->
    <script>
        // Menampilkan alert
        $(function() {
            var successAlert = $('#success-alert');
            successAlert.fadeIn(300);

            // Menghilangkan alert setelah 5 detik
            setTimeout(function() {
                successAlert.fadeOut(500, function() {
                    successAlert.remove();
                });
            }, 2000);
        });
    </script>
    <!-- End Alert pengaturan-->

    <!-- update data foto -->
    <script>
        $(document).ready(function() {
            $('#photo').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('.profile-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            $('.profile-image').click(function() {
                $('.form-control-file').click();
            });
        });
    </script>
    <!-- End update data foto -->

    <!-- Panel Komunitas -->
    <script>
        $(document).ready(function() {
            $('#tableProfil,#tableRumah,#adminRumah,#tableWarga,#tableIuran,#tableKeuangan,#tableSurat,#tableInformasi')
                .DataTable({
                    searching: true
                });
        });
    </script>
    <!-- End Panel Komunitas -->

    <!-- Menu lainnya pada saat nambah dropdown -->
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
    <!-- End Menu lainnya pada saat nambah dropdown -->

    <!-- Menu tambah level pengurus -->
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
    <!-- End Menu tambah level pengurus -->

    <!-- checkbox Status aktif access information -->
    <script>
        $(document).ready(function() {
            // Pertanyaan 1
            $('input[name="pertanyaan1"]').on('change', function() {
                $('input[name="pertanyaan1"]').not(this).prop('checked', false);
            });

            // Pertanyaan 2
            $('input[name="pertanyaan2"]').on('change', function() {
                $('input[name="pertanyaan2"]').not(this).prop('checked', false);
            });

            // Pertanyaan 3
            $('input[name="pertanyaan3"]').on('change', function() {
                $('input[name="pertanyaan3"]').not(this).prop('checked', false);
            });

            // Pertanyaan 4
            $('input[name="pertanyaan4"]').on('change', function() {
                $('input[name="pertanyaan4"]').not(this).prop('checked', false);
            });
        });
    </script>
    <!-- End checkbox Status aktif access information -->
    <!-- checkbox update pengaturan information -->
    <script>
        function submitForm() {
            var pertanyaan1 = [];
            $('.pertanyaan1:checked').each(function() {
                pertanyaan1.push({
                    pertanyaan: $(this).data('pertanyaan'),
                    jawaban: $(this).val()
                });
            });

            var pertanyaan2 = [];
            $('.pertanyaan2:checked').each(function() {
                pertanyaan2.push({
                    pertanyaan: $(this).data('pertanyaan'),
                    jawaban: $(this).val()
                });
            });

            var pertanyaan3 = [];
            $('.pertanyaan3:checked').each(function() {
                pertanyaan3.push({
                    pertanyaan: $(this).data('pertanyaan'),
                    jawaban: $(this).val()
                });
            });

            var pertanyaan4 = [];
            $('.pertanyaan4:checked').each(function() {
                pertanyaan4.push({
                    pertanyaan: $(this).data('pertanyaan'),
                    jawaban: $(this).val()
                });
            });

            // Menggabungkan semua pertanyaan menjadi satu array
            var semuaPertanyaan = pertanyaan1.concat(pertanyaan2, pertanyaan3, pertanyaan4);

            // Membuat objek data yang akan dikirimkan
            var data = {
                pertanyaan: semuaPertanyaan
            };

            // Kirim data menggunakan AJAX
            $.ajax({
                url: '{{ route('pengaturan-akses-info.store') }}',
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Handle response dari server
                    $("#success").fadeTo(2000, 500).slideUp(500, function() {
                        $("#success").remove();
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    // Handle error jika terjadi kesalahan pada request
                    console.error(error);
                }
            });
        }
    </script>
    <!-- End checkbox update pengaturan information -->


    <!-- checkbox status aktif Pengaturan Komunitas -->
    <script>
        $(document).ready(function() {
            // Pengaturan 1
            $('input[name="pengaturan1"]').on('change', function() {
                $('input[name="pengaturan1"]').not(this).prop('checked', false);
            });

            // Pengaturan 2
            $('input[name="pengaturan2"]').on('change', function() {
                $('input[name="pengaturan2"]').not(this).prop('checked', false);
            });

            // Pengaturan 3
            $('input[name="pengaturan3"]').on('change', function() {
                $('input[name="pengaturan3"]').not(this).prop('checked', false);
            });

        });
    </script>
    <!-- End checkbox status aktif Pengaturan Komunitas -->
    <!-- checkbox update pengaturan Komunitas -->
    <script>
        function submitPengaturan() {
            var pengaturan1 = [];
            $('.pengaturan1:checked').each(function() {
                pengaturan1.push({
                    pengaturan: $(this).data('pengaturan'),
                    jawaban: $(this).val()
                });
            });

            var pengaturan2 = [];
            $('.pengaturan2:checked').each(function() {
                pengaturan2.push({
                    pengaturan: $(this).data('pengaturan'),
                    jawaban: $(this).val()
                });
            });

            var pengaturan3 = [];
            $('.pengaturan3:checked').each(function() {
                pengaturan3.push({
                    pengaturan: $(this).data('pengaturan'),
                    jawaban: $(this).val()
                });
            });
            // Menggabungkan semua pertanyaan menjadi satu array
            var semuaPengaturan = pengaturan1.concat(pengaturan2, pengaturan3);

            // Membuat objek data yang akan dikirimkan
            var data = {
                pengaturan: semuaPengaturan,
                komunitas: {{ request('komunitas') }}
            };

            // Kirim data menggunakan AJAX
            $.ajax({
                url: '{{ route('pengaturanKomunitas.store') }}',
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Handle response dari server
                    $("#success").fadeTo(1000, 250).slideUp(2500, function() {
                        $("#success").remove();
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 500);
                },
                error: function(xhr, status, error) {
                    // Handle error jika terjadi kesalahan pada request
                    console.error(error);
                }
            });
        }
    </script>
    <!-- End checkbox update pengaturan information -->


</body>



</html>
