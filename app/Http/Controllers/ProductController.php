<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        return view('home.product');
    }

    public function detail($id)
    {
        return view('home.detail-product');
    }

}
