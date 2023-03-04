@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Produk Utama</h1>
        <p class="lead">Silahkan pilih produk.</p>
        @endauth

        @guest
        <h1>Halaman Utama</h1>
        <p class="lead">Silahkan login terlebih dahulu</p>
        @endguest
    </div>
@endsection