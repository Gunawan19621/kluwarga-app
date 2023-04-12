@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Tambah Warga</h1>
        <form action="/warga/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nik</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nik</label>
                <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
            </div>
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
@endsection
