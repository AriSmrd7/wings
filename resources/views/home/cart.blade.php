@extends('layouts.app-master')

@section('content')
<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Keranjang Saya</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix" style="margin-left: 100px;">
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Nama Produk</div>
                                    </div>
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Unit</div>
                                    </div>
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                    </div>
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Harga</div>
                                    </div>
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Subtotal</div>
                                    </div>
                                </div>
                            </li>
                            @foreach ($carts as $product)
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="/storage/img/{{$product->productImage}}" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_text">{{ $product->productName }}</div>
                                    </div>
                                    <div class="cart_item_color cart_info_col">
                                    <div class="cart_item_text">{{ $product->unit }}</div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_text">{{ $product->qty }}</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_text">Rp {{ $product->price }}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_text">Rp22000</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Total:</div>
                            <div class="order_total_amount">Rp22000</div>
                        </div>
                    </div>
                    <div class="cart_buttons"> 
                        <a href="{{ route('products.list') }}" class="button cart_button_clear">Lanjutkan
                            Belanja
                        </a>
                        <button type="button" class="button cart_button_checkout">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection