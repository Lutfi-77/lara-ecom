<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function Home()
    {
        return view('home.landing');
    }

}
