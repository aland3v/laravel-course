<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {        
        return view('index');
    }

    public function shop() {
        return view('shop', [
            'products' => Product::with('user')->latest()->paginate(9)
        ]);
    }

    public function product(Product $product) {
        return view('product-details', ['product' => $product]);
    }


}
