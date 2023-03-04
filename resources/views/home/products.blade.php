@extends('layouts.app-master')

@section('content')
    <div class="container bg-white mt-5">
    <h2  class="pt-3">Produk Terbaru</h2>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="/storage/img/{{$product->productImage}}" alt="image">
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="title pt-4 pb-1">{{ $product->productName }}</div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="price">Rp {{ $product->price }}</div>
            <form action="" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $product->productCode }}" name="productCode">
                        <input type="hidden" value="{{ $product->productName }}" name="productName">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->productImage }}"  name="productImage">
                        <input type="hidden" value="1" name="qty">
                        <button class="px-4 py-1.5 text-white text-sm btn btn-primary rounded">Beli</button>
                    </form>
        </div>
        @endforeach
    </div>
</div>
@endsection