@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit Data Warga</h1>

        <form action="/warga/{{ $warga->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    value="{{ $warga->nama }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nik</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $warga->nik }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NO. KK</label>
                <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $warga->no_kk }}">
            </div>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L" @if ($warga->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                <option value="P" @if ($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3">{{ $warga->alamat }}</textarea>
            </div>

            {{-- <textarea name="alamat" rows="10" placeholder="Alamat">{{ $warga->alamat }}</textarea><br> --}}
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
@endsection
