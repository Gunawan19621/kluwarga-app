@extends('dashboard.layouts.main')
@section('title', 'Pengurus Komunitas')
@section('content')
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Komunitasku</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('komunitas.index') }}">Komunitas</a>
                    </li>
                    <li class="breadcrumb-item active">Pengurus</li>
                </ol>
            </div>
            <h4 class="page-title">Pengaturan Kepengurusan</h4>
        </div>
    </div>
@endsection
