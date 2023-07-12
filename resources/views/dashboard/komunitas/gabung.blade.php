@extends('dashboard.layouts.main')
@section('title', 'Detail Komunitas')
@section('content')
    <div class="card bg-transparent shadow-none">
        <div class="card-body">
            <div class="card">
                <div class="card-body"
                    style="background: linear-gradient(to top, {{ $getKomunitas->warna_skunder }},{{ $getKomunitas->warna_primer }}">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('storage/' . $getKomunitas['logo_komunitas']) }}" alt=""
                                class="rounded-circle img-thumbnail thumb-xl">
                        </div>
                        <div class="col-9 text-center text-white">
                            <h3>{{ $getKomunitas->nama_komunitas }}</h3>
                            <p>"{{ $getKomunitas->moto_komunitas }}"</p>
                            <hr class="col-9" style="border-color:#fff">
                            <div class="d-flex justify-content-around">
                                <span>
                                    <i class="dripicons-user"></i>
                                    <p class="d-inline-block">{{ $getKomunitas->jumlah_warga }}</p>
                                </span>
                                <span>
                                    <i class="dripicons-home"></i>
                                    <p class="d-inline-block">{{ $getKomunitas->jumlah_rumah }}</p>
                                </span>
                                <span>
                                    <i class="dripicons-location"></i>
                                    <p class="d-inline-block">{{ $getKomunitas->alamat_komunitas }}</p>
                                </span>
                                <span>
                                    <i class="mdi mdi-phone"></i>
                                    <p class="d-inline-block">{{ $getKomunitas->no_tlp }}</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="form-group col-6">
                                <i class="dripicons-view-list mr-2"></i>
                                <h4 class="mt-4 d-inline-block">Daftar Warga</h4>
                            </div>
                        </div>
                        <hr class="border"> --}}
                        <table id="tableWarga" class="table datatable">
                            <thead>
                                <tr>
                                    <th>Kode Rumah</th>
                                    <th>Nama</th>
                                    <th>Pemilik</th>
                                    <th>Penghuni</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($rumah as $data)
                                    <tr>
                                        <td>{{ $data['kode_rumah'] }}</td>
                                        <td>{{ $data->pengguna->user['name'] }}</td>
                                        <td>
                                            <div class="radio my-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radio2"
                                                        @if ($data['status_hunian'] == 'pemilik') checked @endif
                                                        class="custom-control-input" />
                                                    <label class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="radio my-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="radio1"
                                                        @if ($data['status_hunian'] == 'penghuni') checked @endif
                                                        class="custom-control-input" />
                                                    <label class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $data->pengguna['jabatan'] }}</td>
                                    </tr>
                                @empty
                                @endforelse
                                <!-- Tambahkan baris data sesuai kebutuhan -->
                            </tbody>
                        </table>
                        <button type="Update" class="btn btn-success px-4 float-right mt-2" data-toggle="modal"
                            data-target="#gabungModal">Gabung</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal pengajuan bergabung ke komunitas-->
    <div class="modal fade" id="gabungModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="exampleModalLongTitle">Data Rumah Anda</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('komunitas.storePengajuan', ['komunitas_id' => $komunitas_id]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="jalan" class="col-form-label">Jalan</label>
                            <input class="form-control form-control-sm mb-1" name="jalan" type="text" id="jalan"
                                value="{{ old('jalan') }}" placeholder="Nama jalan rumah anda">
                            @error('jalan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="rt" class="col-form-label">RT</label>
                            <input class="form-control form-control-sm mb-1" name="rt" type="text" id="rt"
                                value="{{ old('rt') }}" placeholder="Masukan RT rumah anda"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                            @error('rt')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="rw" class="col-form-label">RW</label>
                            <input class="form-control form-control-sm mb-1" name="rw" type="text" id="rw"
                                value="{{ old('rw') }}" placeholder="Masukan RW rumah anda"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                            @error('rw')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="blok" class="col-form-label">Blok</label>
                            <input class="form-control form-control-sm mb-1" name="blok" type="text" id="blok"
                                value="{{ old('blok') }}" placeholder="Masukan nama blok anda">
                            @error('blok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="kode_rumah" class="col-form-label">Kode Rumah</label>
                            <input class="form-control form-control-sm mb-1" name="kode_rumah" type="text"
                                id="kode_rumah" value="{{ old('kode_rumah') }}" placeholder="Masukan kode rumah anda">
                            @error('kode_rumah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <label for="status_hunian" class="col-form-label">Status Hunian</label>
                            <div class="mb-1">
                                <select class="form-control form-control-sm" name="status_hunian" type="text"
                                    id="status_hunian" value="{{ old('status_hunian') }}">
                                    <option>Pilih Status Hunian</option>
                                    <option value="pemilik">Pemilik</option>
                                    <option value="penghuni">Penghuni</option>
                                </select>
                                @error('status_hunian')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <p>Dihuni sejak</p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <select class="form-control form-control-sm" name="bulan_huni" type="text"
                                    id="bulan_huni" value="{{ old('bulan_huni') }}">
                                    <option>Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                </select>
                                @error('bulan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <input class="form-control form-control-sm mb-1" name="tahun_huni" type="text"
                                    id="tahun_huni" value="{{ old('tahun_huni') }}"
                                    placeholder="Kapan menempati rumah ini"
                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                @error('rt')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success px-3 float-right">SIMPAN</button>
                        <button type="button" class="btn btn-danger waves-effect px-4 float-right mr-2"
                            data-dismiss="modal">
                            Batal
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah Data Rumah --}}
@endsection
