<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return view('home.products', compact('products'));
    }
    
    public function productDetail($idProduct)
    {
        $productDetail = DB::table('products')
                        ->select('*')
                        ->where('productCode','=',$idProduct)
                        ->get();   
        return view('home.product-detail', compact('productDetail'));
    }
}
