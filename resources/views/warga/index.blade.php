@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/warga/create">Tambah Data</a>
        <table class="table table-hover">
            <tr>
                <th>NAMA</th>
                <th>NIK</th>
                <th>NO.KK</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>Aksi</th>
            </tr>
            @foreach ($warga as $w)
                <tr>
                    <td>{{ $w->id }}</td>
                    <td>{{ $w->nama }}</td>
                    <td>{{ $w->nik }}</td>
                    <td>{{ $w->no_kk }}</td>
                    <td>{{ $w->alamat }}</td>
                    <td>
                        <a href="/warga/{{ $w->id }}/edit">Edit</a>
                        <form action="/warga/{{ $w->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="DELETE">
                        </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
