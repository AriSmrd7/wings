@extends('layouts.admin-master')

    @section('content')

    @auth
    <div class="bg-light p-5 rounded">
        <h1>Halaman Utama</h1>
        <p class="lead">Selamat Datang di Halaman Admin</p>
    </div>
    @endauth

    @guest
    <div class="bg-light p-5 rounded">
        <h1>Data Tidak Dapat Diakses</h1>
        <p class="lead">Silahkan login terlebih dahulu</p>
    </div>
    @endguest

@endsection