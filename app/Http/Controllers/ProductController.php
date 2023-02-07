<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        return view('home.product');
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('home.detail-product', compact('product'));
    }

}
