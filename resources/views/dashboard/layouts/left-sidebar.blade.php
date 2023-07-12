        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu" id="side-nav">
                <li><a href="{{ route('dashboard') }}"><i class="mdi mdi-home"></i> Beranda</a></li>
                <li>
                    <a href="javascript: void(0);"><span> <i class="mdi mdi-account-multiple"></i> Komunitasku</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @foreach ($komunitas as $data)
                            <li>
                                <a href="{{ route('komunitas.show', $data->id) }}">{{ $data->nama_komunitas }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><span> <i class="fa fa-globe"></i> Komunitas</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('komunitas.create') }}">Buat Komunitas</a></li>
                        <li><a href="{{ route('cariKomunitas.cari') }}">Cari Komunitas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><span><i class="mdi mdi-file-document-box"></i> Lainnya</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('pengaduan.index') }}">Pengaduan</a></li>
                        <li><a href="{{ route('halamanSurat.surat') }}">Surat</a></li>
                    </ul>
                </li>
            </ul>
        </div>
