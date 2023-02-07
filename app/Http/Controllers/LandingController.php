<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class LandingController extends Controller
{
    //

    public function Home()
    {
        $products = Product::all();
        return view('home.landing', compact('products'));
    }

}
